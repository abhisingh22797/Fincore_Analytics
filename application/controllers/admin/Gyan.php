<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';

/**
 * Class : User (UserController)
 * User Class to control all user related operations.
 * @author : Kishor Mali
 * @version : 1.1
 * @since : 15 November 2016
 */
class Gyan extends BaseController
{
    /**
     * This is default constructor of the class
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Gyan_model');
		
		$this->load->helper('form');
        $this->isLoggedIn();   
    }
    
    /**
     * This function used to load the first screen of the user
     */
    public function index()
    {
		
		
		 if($this->isAdmin() == TRUE)
        {
            $this->loadThis();
        }
        else
        {        
           
            $this->global['pageTitle'] = 'Finecore  : Homepage Listing';
            $this->loadViews("admin/gallery/listGallery", $this->global, $data, NULL);
        }
		
		
       
    }
    
  
    
	/**
     * This function is used load user edit information
     * @param number About
     */
    function edit($id = NULL)
    {
		 
        if($this->isAdmin() == TRUE || $id == 1)
        {
            $this->loadThis();
        }
        else
        {
            
         
            $data['allData'] = $this->Gyan_model->getplacement();
            
            $this->global['pageTitle'] = 'Fincore : Edit Fincore_Gyan Page';
            
            $this->loadViews("admin/Fincore_Gyan/editplace", $this->global, $data, NULL);
        }
    }
    
	
	
	
	
    /**
     * This function is used to edit the user information
     */
    function editstudentplacement()
    {
           
       if( $this->input->post('submit')!==NULL){
		   
		   
		    if (!empty($_FILES["slid_img1"]['name'])) {
					$config = array(
						'upload_path' => "./uploads/gyan/",
						'allowed_types' => "jpg|PNG|png|gif|jpeg",
						'overwrite' => FALSE,
						'max_size' => "9000000", // Can be set to particular file size , here it is 0.5 MB(548 Kb)
					);
                                  
                    $this->load->library('upload', $config);					
                   					
					if ( !$this->upload->do_upload(slid_img1))
					{
						$this->session->set_flashdata('error',$this->upload->display_errors());
                       
					}
					else
					{
						$slid_img1 = $_FILES["slid_img1"]['name'];
						
					}
                }else{
					
					$slid_img1 = $this->db->get_where('tbl_gyan', array('id'=>1))->row_array()['slid_img1'];
				}  
				 if (!empty($_FILES["pro1_images"]['name'])) {
					$config = array(
						'upload_path' => "./uploads/gyan/",
						'allowed_types' => "jpg|PNG|png|gif|jpeg",
						'overwrite' => FALSE,
						'max_size' => "9000000", // Can be set to particular file size , here it is 0.5 MB(548 Kb)
					);
                                  
                    $this->load->library('upload', $config);					
                   					
					if ( !$this->upload->do_upload('pro1_images'))
					{
						$this->session->set_flashdata('error',$this->upload->display_errors());
                       
					}
					else
					{
						$pro1_images = $_FILES["pro1_images"]['name'];
						
					}
                }else{
					
					$pro1_images = $this->db->get_where('tbl_gyan', array('id'=>1))->row_array()['pro1_images'];
				}  
            
                		 if (!empty($_FILES["pro2_images"]['name'])) {
					$config = array(
						'upload_path' => "./uploads/gyan/",
						'allowed_types' => "jpg|PNG|png|gif|jpeg",
						'overwrite' => FALSE,
						'max_size' => "9000000", // Can be set to particular file size , here it is 0.5 MB(548 Kb)
					);
                                  
                    $this->load->library('upload', $config);					
                   					
					if ( !$this->upload->do_upload('pro2_images'))
					{
						$this->session->set_flashdata('error',$this->upload->display_errors());
                       
					}
					else
					{
						$pro2_images = $_FILES["pro2_images"]['name'];
						
					}
                }else{
					
					$pro2_images = $this->db->get_where('tbl_gyan', array('id'=>1))->row_array()['pro2_images'];
				}  
            
                		 if (!empty($_FILES["pro3_images"]['name'])) {
					$config = array(
						'upload_path' => "./uploads/gyan/",
						'allowed_types' => "jpg|PNG|png|gif|jpeg",
						'overwrite' => FALSE,
						'max_size' => "9000000", // Can be set to particular file size , here it is 0.5 MB(548 Kb)
					);
                                  
                    $this->load->library('upload', $config);					
                   					
					if ( !$this->upload->do_upload('pro3_images'))
					{
						$this->session->set_flashdata('error',$this->upload->display_errors());
                       
					}
					else
					{
						$pro3_images = $_FILES["pro3_images"]['name'];
						
					}
                }else{
					
					$pro3_images = $this->db->get_where('tbl_gyan', array('id'=>1))->row_array()['pro3_images'];
				}  
            
                
			
				
				$homeInfo = 
				array(
				   
				   'slid_title1'=>$this->input->post('slid_title1'),
					'slid_subtitle1'=>$this->input->post('slid_subtitle1'),
				   'slid_img1'=>$slid_img1,
				   
				   
			//	    'slid_title2'=>$this->input->post('slid_title2'),
				//	'slid_subtitle2'=>$this->input->post('slid_subtitle2'),
			
				//   'slid_img2'=>$slid_img2,
				   
	
				   'pdes' =>$this->input->post('pdes'),

				   
				   
				   'pro1_title'=>$this->input->post('pro1_title'),
				   'pro1_des'=>$this->input->post('pro1_des'),
				   'pro1_url'=>$this->input->post('pro1_url'),
				   'pro1_images'=>$pro1_images,
				   
				     'pro2_title'=>$this->input->post('pro2_title'),
				   'pro2_des'=>$this->input->post('pro2_des'),
				   'pro2_url'=>$this->input->post('pro2_url'),
				   'pro2_images'=>$pro2_images,
				   
				     'pro3_title'=>$this->input->post('pro3_title'),
				   'pro3_des'=>$this->input->post('pro3_des'),
				   'pro3_url'=>$this->input->post('pro3_url'),
				   'pro3_images'=>$pro3_images,
				   
				  
				);
                
                $result = $this->Gyan_model->editplacement($homeInfo,1);
                
                if($result == true)
                {
                    $this->session->set_flashdata('success', 'Fincore Gyan successfully');
                }
                else
                {
                    $this->session->set_flashdata('error', 'Fincore Gyan failed');
                }
                
                redirect('admin/Gyan/edit');
            }
			 redirect('admin/Gyan/edit');
	}
    

   
}

?>