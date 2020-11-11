<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';

/**
 * Class : User (UserController)
 * User Class to control all user related operations.
 * @author : Kishor Mali
 * @version : 1.1
 * @since : 15 November 2016
 */
class Home extends BaseController
{
    /**
     * This is default constructor of the class
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->model('home_model');
		
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
           
            $this->global['pageTitle'] = 'Fiesttech  : Homepage Listing';
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
            
            
           
            $data['allData'] = $this->home_model->getHome();
            
            $this->global['pageTitle'] = 'Finecore : Edit Home Page';
            
            $this->loadViews("admin/home/editHome", $this->global, $data, NULL);
        }
    }
    
	
	
	
	
    /**
     * This function is used to edit the user information
     */
    function editHome()
    {
           
       if( $this->input->post('submit')!==NULL){
                // upload sec1_image 
                if (!empty($_FILES["sec1_image"]['name'])) {
					$config = array(
						'upload_path' => "./uploads/home/",
						'allowed_types' => "jpg|PNG|png|gif|jpeg",
						'overwrite' => FALSE,
						'max_size' => "9000000", // Can be set to particular file size , here it is 0.5 MB(548 Kb)
					);
                                  
                    $this->load->library('upload', $config);					
                   					
					if ( !$this->upload->do_upload('sec1_image'))
					{
						$this->session->set_flashdata('error',$this->upload->display_errors());
                       
					}
					else
					{
						$sec1_image = $_FILES["sec1_image"]['name'];
						
					}
                }else{
					
					$sec1_image = $this->db->get_where('tbl_home_page', array('id'=>1))->row_array()['sec1_image'];
				}  
				
				
				
				
				// upload sec2_image 
                if (!empty($_FILES["sec2_image"]['name'])) {
					$config = array(
						'upload_path' => "./uploads/home/",
						'allowed_types' => "jpg|PNG|png|gif|jpeg",
						'overwrite' => FALSE,
						'max_size' => "9000000", // Can be set to particular file size , here it is 0.5 MB(548 Kb)
					);
                                
                    $this->load->library('upload', $config);					
                   					
					if ( !$this->upload->do_upload('sec2_image'))
					{
						$this->session->set_flashdata('error',$this->upload->display_errors());
                        
					}
					else
					{
						$sec2_image = $_FILES["sec2_image"]['name'];
						
					}
                }else{
					
					$sec2_image = $this->db->get_where('tbl_home_page', array('id'=>1))->row_array()['sec2_image'];
				}  
                
                
				
				
				// upload sec3_image 
                if (!empty($_FILES["sec3_image"]['name'])) {
					$config = array(
						'upload_path' => "./uploads/home/",
						'allowed_types' =>   "jpg|PNG|png|gif|jpeg",
						'overwrite' => FALSE,
						'max_size' => "9000000", // Can be set to particular file size , here it is 0.5 MB(548 Kb)
					);
                                  
                    $this->load->library('upload', $config);					
                   					
					if ( !$this->upload->do_upload('sec3_image'))
					{
						$this->session->set_flashdata('error',$this->upload->display_errors());
                       
					}
					else
					{
						$sec3_image = $_FILES["sec3_image"]['name'];
						
					}
                }else{
					
					$sec3_image = $this->db->get_where('tbl_home_page', array('id'=>1))->row_array()['sec3_image'];
				}  
                
				
				
				   // upload pro1_image 
                if (!empty($_FILES["pro1_image"]['name'])) {
					$config = array(
						'upload_path' => "./uploads/home/",
						'allowed_types' => "jpg|PNG|png|gif|jpeg",
						'overwrite' => FALSE,
						'max_size' => "9000000", // Can be set to particular file size , here it is 0.5 MB(548 Kb)
					);
                                  
                    $this->load->library('upload', $config);					
                   					
					if ( !$this->upload->do_upload('pro1_image'))
					{
						$this->session->set_flashdata('error',$this->upload->display_errors());
                       
					}
					else
					{
						$pro1_image = $_FILES["pro1_image"]['name'];
						
					}
                }else{
					
					$pro1_image = $this->db->get_where('tbl_home_page', array('id'=>1))->row_array()['pro1_image'];
				}  
				
				
				
				
				// upload pro2_image 
                if (!empty($_FILES["pro2_image"]['name'])) {
					$config = array(
						'upload_path' => "./uploads/home/",
						'allowed_types' => "jpg|PNG|png|gif|jpeg",
						'overwrite' => FALSE,
						'max_size' => "9000000", // Can be set to particular file size , here it is 0.5 MB(548 Kb)
					);
                                
                    $this->load->library('upload', $config);					
                   					
					if ( !$this->upload->do_upload('pro2_image'))
					{
						$this->session->set_flashdata('error',$this->upload->display_errors());
                        
					}
					else
					{
						$pro2_image = $_FILES["pro2_image"]['name'];
						
					}
                }else{
					
					$pro2_image = $this->db->get_where('tbl_home_page', array('id'=>1))->row_array()['pro2_image'];
				}  
                
                
				
				
				// upload pro3_image 
                if (!empty($_FILES["pro3_image"]['name'])) {
					$config = array(
						'upload_path' => "./uploads/home/",
						'allowed_types' =>   "jpg|PNG|png|gif|jpeg",
						'overwrite' => FALSE,
						'max_size' => "9000000", // Can be set to particular file size , here it is 0.5 MB(548 Kb)
					);
                                  
                    $this->load->library('upload', $config);					
                   					
					if ( !$this->upload->do_upload('pro3_image'))
					{
						$this->session->set_flashdata('error',$this->upload->display_errors());
                       
					}
					else
					{
						$pro3_image = $_FILES["pro3_image"]['name'];
						
					}
                }else{
					
					$pro3_image = $this->db->get_where('tbl_home_page', array('id'=>1))->row_array()['pro3_image'];
				}  
                
				
				
				// upload pro4_image 
          /*      if (!empty($_FILES["pro4_image"]['name'])) {
					$config = array(
						'upload_path' => "./uploads/home/",
						'allowed_types' =>   "jpg|PNG|png|gif|jpeg",
						'overwrite' => FALSE,
						'max_size' => "9000000", // Can be set to particular file size , here it is 0.5 MB(548 Kb)
					);
                                  
                    $this->load->library('upload', $config);					
                   					
					if ( !$this->upload->do_upload('pro4_image'))
					{
						$this->session->set_flashdata('error',$this->upload->display_errors());
                       
					}
					else
					{
						$pro4_image = $_FILES["pro4_image"]['name'];
						
					}
                }else{
					
					$pro4_image = $this->db->get_where('tbl_home_page', array('id'=>1))->row_array()['pro4_image'];
				}  *
                
				// upload indus_img 
           /*     if (!empty($_FILES["indus_img"]['name'])) {
					$config = array(
						'upload_path' => "./uploads/home/",
						'allowed_types' => "jpg|PNG|png|gif|jpeg",
						'overwrite' => FALSE,
						'max_size' => "9000000", // Can be set to particular file size , here it is 0.5 MB(548 Kb)
					);
                           
                    $this->load->library('upload', $config);					
                   					
					if ( !$this->upload->do_upload('indus_img'))
					{
						$this->session->set_flashdata('error',$this->upload->display_errors());
                        //redirect('admin/gallery/addNew');
					}
					else
					{
						$indus_img = $_FILES["indus_img"]['name'];
						
					}
                }else{
					
					$indus_img = $this->db->get_where('tbl_home_page', array('id'=>1))->row_array()['indus_img'];
				} 
                
                // upload career_img 
                if (!empty($_FILES["career_img"]['name'])) {
					$config = array(
						'upload_path' => "./uploads/home/",
						'allowed_types' => "jpg|PNG|png|gif|jpeg",
						'overwrite' => FALSE,
						'max_size' => "9000000", // Can be set to particular file size , here it is 0.5 MB(548 Kb)
					);
                          
                    $this->load->library('upload', $config);					
                   					
					if ( !$this->upload->do_upload('career_img'))
					{
						$this->session->set_flashdata('error',$this->upload->display_errors());
                        
					}
					else
					{
						$career_img = $_FILES["career_img"]['name'];
						
					}
                }else{
					
					$career_img = $this->db->get_where('tbl_home_page', array('id'=>1))->row_array()['career_img'];
				}  
				
				// upload test_img 
                if (!empty($_FILES["test_img"]['name'])) {
					$config = array(
						'upload_path' => "./uploads/home/",
						'allowed_types' => "jpg|PNG|png|gif|jpeg",
						'overwrite' => FALSE,
						'max_size' => "9000000", // Can be set to particular file size , here it is 0.5 MB(548 Kb)
					);
                      
                    $this->load->library('upload', $config);					
                   					
					if ( !$this->upload->do_upload('test_img'))
					{
						$this->session->set_flashdata('error',$this->upload->display_errors());
                       
					}
					else
					{
						$test_img = $_FILES["test_img"]['name'];
						
					}
                }else{
					
					$test_img = $this->db->get_where('tbl_home_page', array('id'=>1))->row_array()['test_img'];
				}  
               
				
				
				
				// upload banner_image 
                if (!empty($_FILES["banner_image"]['name'])) {
					$config = array(
						'upload_path' => "./uploads/home/",
						'allowed_types' => "jpg|PNG|png|gif|jpeg",
						'overwrite' => FALSE,
						'max_size' => "9000000", // Can be set to particular file size , here it is 0.5 MB(548 Kb)
					);
                      
                    $this->load->library('upload', $config);					
                   					
					if ( !$this->upload->do_upload('banner_image'))
					{
						$this->session->set_flashdata('error',$this->upload->display_errors());
                       
					}
					else
					{
						$banner_image = $_FILES["banner_image"]['name'];
						
					}
                }else{
					
					$banner_image = $this->db->get_where('tbl_home_page', array('id'=>1))->row_array()['banner_image'];
				}  */
               
				
				$homeInfo = 
				array(
				   
				   
				   
				   
				   //'client' =>$this->input->post('client'),
				   
				   'sec1_title'=>$this->input->post('sec1_title'),
				   'sec1_des' =>$this->input->post('sec1_des'),
				    'sec1_url'=>$this->input->post('sec1_url'),
				   'sec1_image'=>$sec1_image,
				   
				   
				    'sec2_title'=>$this->input->post('sec2_title'),
				   
				   'sec2_des' =>$this->input->post('sec2_des'),
				   'sec2_url'=>$this->input->post('sec2_url'),
				   'sec2_image'=>$sec2_image,
				   
				    'sec3_title'=>$this->input->post('sec3_title'),
				   
				   'sec3_des' =>$this->input->post('sec3_des'),
				   'sec3_url'=>$this->input->post('sec3_url'),
				   'sec3_image'=>$sec3_image,
				   
				   
				     'pro1_title'=>$this->input->post('pro1_title'),
				   
				   'pro1_des' =>$this->input->post('pro1_des'),
				      'pro1_url'=>$this->input->post('pro1_url'),
				   'pro1_image'=>$pro1_image,
				   
				    'pro2_title'=>$this->input->post('pro2_title'),
				   
				   'pro2_des' =>$this->input->post('pro2_des'),
				     'pro2_url'=>$this->input->post('pro2_url'),
				   'pro2_image'=>$pro2_image,
				    'pro3_title'=>$this->input->post('pro3_title'),
				   
				   'pro3_des' =>$this->input->post('pro3_des'),
				    'pro3_url'=>$this->input->post('pro3_url'),
				   'pro3_image'=>$pro3_image,
				/*    'pro4_title'=>$this->input->post('pro4_title'),
				   
				  // 'pro4_des' =>$this->input->post('pro4_des'),
				   //'pro4_image'=>$pro4_image,
				   
				   
				   'team_title' =>$this->input->post('team_title'),
				   'team_des' =>$this->input->post('team_des'),
				   'team1_title' =>$this->input->post('team1_title'),
				   'team1_des' =>$this->input->post('team1_des'),
				   'team2_title' =>$this->input->post('team2_title'),
				   'team2_des' =>$this->input->post('team2_des'),
				   'team3_title' =>$this->input->post('team3_title'),
				   'team3_des' =>$this->input->post('team3_des'),
				   'team4_title' =>$this->input->post('team4_title'),
				   'team4_des' =>$this->input->post('team4_des'),
				   'team5_title' =>$this->input->post('team5_title'),
				   'team5_des' =>$this->input->post('team5_des'),
				   'team6_title' =>$this->input->post('team6_title'),
				   'team6_des' =>$this->input->post('team6_des'),
				   
				   
				   /*'sec1_title'=>$this->input->post('sec1_title'),
				   'sec1_des'=>$this->input->post('sec1_des'),
				   'l_des'=>$this->input->post('l_des'),
				   'sec1_title'=>$this->input->post('sec1_title'),
				   'sec1_des' =>$this->input->post('sec1_des'),
				   'des1'=>$this->input->post('des1'),
				   'title2'=>$this->input->post('title2'),
				   'des2'=>$this->input->post('des2'),
				   'title3'=>$this->input->post('title3'),
				   'des3'=>$this->input->post('des3'), 
				   'support_title'=>$this->input->post('support_title'),
				   'support_img'=>$support_img,
				   'train_title'=>$this->input->post('train_title'),
				   'train_des'=>$this->input->post('train_des'),
				   'below_title1'=>$this->input->post('below_title1'),
				   'below_title2'=>$this->input->post('below_title2'), 
				   'below_title3'=>$this->input->post('below_title3'),
				   'below_des1'=>$this->input->post('below_des1'),
				   'below_des2'=>$this->input->post('below_des2'),
				   'below_des3'=>$this->input->post('below_des3'),
				   'learn_title'=>$this->input->post('learn_title'),
				   'learn_subtitle'=>$this->input->post('learn_subtitle'),
				   'univ_title'=>$this->input->post('univ_title'),
				   'univ_des'=>$this->input->post('univ_des'),
				   'univ_img'=>$univ_img,
				   'sup_title'=>$this->input->post('sup_title'),
				   'sup_des'=>$this->input->post('sup_des'), 
				   'sup_img'=>$sup_img, 
				   'indus_title'=>$this->input->post('indus_title'), 
				   'indus_des'=>$this->input->post('indus_des'),
				   'indus_img'=>$indus_img,
				   'career_title'=>$this->input->post('career_title'),
				   'career_des'=>$this->input->post('career_des'), 
				   'career_img'=>$career_img, 
				   'test_img'=>$test_img, 
				   'brands_title'=>$this->input->post('brands_title'),
				   'contact_title'=>$this->input->post('contact_title'),
				   'contact_subtitle'=>$this->input->post('contact_subtitle')*/
				
			
				
				
				
				
				);
                
                $result = $this->home_model->editHome($homeInfo,1);
                
                if($result == true)
                {
                    $this->session->set_flashdata('success', 'HOME updated successfully');
                }
                else
                {
                    $this->session->set_flashdata('error', 'Home updation failed');
                }
                
                redirect('admin/home/edit');
            }
			 redirect('admin/home/edit');
	}
    

   
}

?>