<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';

/**
 * Class : User (UserController)
 * User Class to control all user related operations.
 * @author : Kishor Mali
 * @version : 1.1
 * @since : 15 November 2016
 */
class Consulting extends BaseController
{
    /**
     * This is default constructor of the class
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Consulting_model');
		
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
            
         
            $data['allData'] = $this->Consulting_model->getplacement();
            
            $this->global['pageTitle'] = 'Fincore : Edit student placement Page';
            
            $this->loadViews("admin/consulting/editconsult", $this->global, $data, NULL);
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
						'upload_path' => "./uploads/consulting/",
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
					
					$slid_img1 = $this->db->get_where('tbl_consulting', array('id'=>1))->row_array()['slid_img1'];
				}  
				 if (!empty($_FILES["slid_img2"]['name'])) {
					$config = array(
						'upload_path' => "./uploads/consulting/",
						'allowed_types' => "jpg|PNG|png|gif|jpeg",
						'overwrite' => FALSE,
						'max_size' => "9000000", // Can be set to particular file size , here it is 0.5 MB(548 Kb)
					);
                                  
                    $this->load->library('upload', $config);					
                   					
					if ( !$this->upload->do_upload('slid_img2'))
					{
						$this->session->set_flashdata('error',$this->upload->display_errors());
                       
					}
					else
					{
						$slid_img2 = $_FILES["slid_img2"]['name'];
						
					}
                }else{
					
					$slid_img2 = $this->db->get_where('tbl_consulting', array('id'=>1))->row_array()['slid_img2'];
				}  
                // upload sec1_image 
                if (!empty($_FILES["pi1"]['name'])) {
					$config = array(
						'upload_path' => "./uploads/consulting/",
						'allowed_types' => "jpg|PNG|png|gif|jpeg",
						'overwrite' => FALSE,
						'max_size' => "9000000", // Can be set to particular file size , here it is 0.5 MB(548 Kb)
					);
                                  
                    $this->load->library('upload', $config);					
                   					
					if ( !$this->upload->do_upload('pi1'))
					{
						$this->session->set_flashdata('error',$this->upload->display_errors());
                       
					}
					else
					{
						$pi1 = $_FILES["pi1"]['name'];
						
					}
                }else{
					
					$pi1 = $this->db->get_where('tbl_consulting', array('id'=>1))->row_array()['pi1'];
				}  
				
				
				
				
				// upload sec2_image 
                if (!empty($_FILES["pi2"]['name'])) {
					$config = array(
						'upload_path' => "./uploads/consulting/",
						'allowed_types' => "jpg|PNG|png|gif|jpeg",
						'overwrite' => FALSE,
						'max_size' => "9000000", // Can be set to particular file size , here it is 0.5 MB(548 Kb)
					);
                                
                    $this->load->library('upload', $config);					
                   					
					if ( !$this->upload->do_upload('pi2'))
					{
						$this->session->set_flashdata('error',$this->upload->display_errors());
                        
					}
					else
					{
						$pi2 = $_FILES["pi2"]['name'];
						
					}
                }else{
					
					$pi2 = $this->db->get_where('tbl_consulting', array('id'=>1))->row_array()['pi2'];
				}  
                
                
				
				
				// upload sec3_image 
                if (!empty($_FILES["pi3"]['name'])) {
					$config = array(
						'upload_path' => "./uploads/consulting/",
						'allowed_types' =>   "jpg|PNG|png|gif|jpeg",
						'overwrite' => FALSE,
						'max_size' => "9000000", // Can be set to particular file size , here it is 0.5 MB(548 Kb)
					);
                                  
                    $this->load->library('upload', $config);					
                   					
					if ( !$this->upload->do_upload('pi3'))
					{
						$this->session->set_flashdata('error',$this->upload->display_errors());
                       
					}
					else
					{
						$pi3 = $_FILES["pi3"]['name'];
						
					}
                }else{
					
					$pi3 = $this->db->get_where('tbl_consulting', array('id'=>1))->row_array()['pi3'];
				}  
                
				
				
				   // upload pro1_image 
                if (!empty($_FILES["pi4"]['name'])) {
					$config = array(
						'upload_path' => "./uploads/consulting/",
						'allowed_types' => "jpg|PNG|png|gif|jpeg",
						'overwrite' => FALSE,
						'max_size' => "9000000", // Can be set to particular file size , here it is 0.5 MB(548 Kb)
					);
                                  
                    $this->load->library('upload', $config);					
                   					
					if ( !$this->upload->do_upload('pi4'))
					{
						$this->session->set_flashdata('error',$this->upload->display_errors());
                       
					}
					else
					{
						$pi4 = $_FILES["pi4"]['name'];
						
					}
                }else{
					
					$pi4 = $this->db->get_where('tbl_consulting', array('id'=>1))->row_array()['pi4'];
				}  
				
				
				
				
				// upload pro2_image 
                if (!empty($_FILES["pi5"]['name'])) {
					$config = array(
						'upload_path' => "./uploads/consulting/",
						'allowed_types' => "jpg|PNG|png|gif|jpeg",
						'overwrite' => FALSE,
						'max_size' => "9000000", // Can be set to particular file size , here it is 0.5 MB(548 Kb)
					);
                                
                    $this->load->library('upload', $config);					
                   					
					if ( !$this->upload->do_upload('pi5'))
					{
						$this->session->set_flashdata('error',$this->upload->display_errors());
                        
					}
					else
					{
						$pi5 = $_FILES["pi5"]['name'];
						
					}
                }else{
					
					$pi5 = $this->db->get_where('tbl_consulting', array('id'=>1))->row_array()['pi5'];
				}  
                
                
				
				
				// upload pro3_image 
                if (!empty($_FILES["pi6"]['name'])) {
					$config = array(
						'upload_path' => "./uploads/consulting/",
						'allowed_types' =>   "jpg|PNG|png|gif|jpeg",
						'overwrite' => FALSE,
						'max_size' => "9000000", // Can be set to particular file size , here it is 0.5 MB(548 Kb)
					);
                                  
                    $this->load->library('upload', $config);					
                   					
					if ( !$this->upload->do_upload('pi6'))
					{
						$this->session->set_flashdata('error',$this->upload->display_errors());
                       
					}
					else
					{
						$pi6 = $_FILES["pi6"]['name'];
						
					}
                }else{
					
					$pi6 = $this->db->get_where('tbl_consulting', array('id'=>1))->row_array()['pi6'];
				}  
                
				
				
				// upload pro4_image 
              if (!empty($_FILES["pi7"]['name'])) {
					$config = array(
						'upload_path' => "./uploads/consulting/",
						'allowed_types' =>   "jpg|PNG|png|gif|jpeg",
						'overwrite' => FALSE,
						'max_size' => "9000000", // Can be set to particular file size , here it is 0.5 MB(548 Kb)
					);
                                  
                    $this->load->library('upload', $config);					
                   					
					if ( !$this->upload->do_upload('pi7'))
					{
						$this->session->set_flashdata('error',$this->upload->display_errors());
                       
					}
					else
					{
						$pi7 = $_FILES["pi7"]['name'];
						
					}
                }else{
					
					$pi7 = $this->db->get_where('tbl_consulting', array('id'=>1))->row_array()['pi7'];
				}  
                
			
				
				$homeInfo = 
				array(
				   
				   'slid_title1'=>$this->input->post('slid_title1'),
					//'slid_subtitle1'=>$this->input->post('slid_subtitle1'),
				   'slid_img1'=>$slid_img1,
				   
				   
				 //   'slid_title2'=>$this->input->post('slid_title2'),
				//	'slid_subtitle2'=>$this->input->post('slid_subtitle2'),
			
				   'slid_img2'=>$slid_img2,
				   
	
				   'pdes' =>$this->input->post('pdes'),

				   
				   
				   'p1'=>$this->input->post('p1'),
				   'pi1'=>$pi1,
				   
				   'p2'=>$this->input->post('p2'),
				   'pi2'=>$pi2,
				   
				    'p3'=>$this->input->post('p3'),
				    'pi3'=>$pi3,
				   
				   
				   'p4'=>$this->input->post('p4'),
				   'pi4'=>$pi4,
				   
				    'p5'=>$this->input->post('p5'),
					'pi5'=>$pi5,
				   
				   'p6'=>$this->input->post('p6'),
				   'pi6'=>$pi6,
				   
				       
					'p7'=>$this->input->post('p7'),
					'pi7'=>$pi7,
			
				);
                
                $result = $this->Consulting_model->editplacement($homeInfo,1);
                
                if($result == true)
                {
                    $this->session->set_flashdata('success', 'Placement updated successfully');
                }
                else
                {
                    $this->session->set_flashdata('error', 'Placement updation failed');
                }
                
                redirect('admin/Consulting/edit');
            }
			 redirect('admin/Consulting/edit');
	}
    

   
}

?>