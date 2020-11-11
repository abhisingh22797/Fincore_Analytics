<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';


class Blogs extends BaseController{
       public function __construct()
    {
        parent::__construct();
        $this->load->model('Blogs_model');
        $this->load->model('user_model');
        $this->isLoggedIn();  
        $this->load->helper('url', 'form');
      
    }
    

function index(){

    $this->load->model("Blogs_model");
    $data["fetch_data"]= $this->Blogs_model->testimonialListing();
	
	//$this->addTestimonials();
}
 function addTestimonials()
    {
        if($this->isAdmin() == TRUE)
        {
            $this->loadThis();
        }
        else

        {
             $this->load->model('Blogs_model');

            $data['roles'] = $this->Blogs_model->getUserRoles();
            
            $this->global['pageTitle'] = 'Fincore: Add blog';

            $this->loadViews("admin/blogs/add", $this->global, $data, NULL);

         //   $this->inserttestinonial();
 


    
    if(  $this->input->post('submit')!==NULL){

       
   // upload Image 
          /*      if (!empty($_FILES["timage"]['name'])) {
					$config = array(
						'upload_path' => "./uploads/testimonial/",
						'allowed_types' => "jpg|PNG|png|gif|jpeg|JPEG|JPG",
						'overwrite' => TRUE,
						'max_size' => "9000000", // Can be set to particular file size , here it is 0.5 MB(548 Kb)
					);
                    $config['file_name'] = $_FILES["timage"]['name'];                  
                    $this->load->library('upload', $config);					
                   					
					if ( !$this->upload->do_upload('timage'))
					{
						$this->session->set_flashdata('error',$this->upload->display_errors());
                        redirect('admin/service/addNew');
						
					}
					else
					{
						$file_data = array('upload_data' => $this->upload->data());
						$image = $_FILES["timage"]['name'];
						
					}
                }*/
		

                $forminput = array(
                 
            //     "image" =>  $image,   
                 "title"=>  $this->input->post('title'),  
                 "content"=> $this->input->post('content'),  
           //      "designation" => $this->input->post('designation'),
                 "status" => 'Active',
                 "date_modified"=>date('Y-m-d H:i:s'),
                "date"=>date('Y-m-d')

               
          );  
             
            $this->Blogs_model->inserttestimonial($forminput);
             $this->session->set_flashdata('success','record added successfully');
             redirect(base_url().'admin/Blogs/viewtestimonials');
            
            
            }

           
  }   }

function viewtestimonials(){
     
        if($this->isAdmin() == TRUE)
        {
            $this->loadThis();
        }
        else
        {        
           $searchText = $this->security->xss_clean($this->input->post('searchText'));
           $data['searchText'] = $searchText;
            
            $this->load->library('pagination');
          
            $this->global['pageTitle'] = 'Fincore :blogs';


            $this->load->model("Blogs_model");
            $data["fetch_data"]= $this->Blogs_model->testimonialListing();
    
            
            $this->loadViews("admin/blogs/view", $this->global, $data, NULL);
        }
    }

function editTestimonials($id =NULL ){

     if($this->isAdmin() == TRUE)
        {
            $this->loadThis();
        }
        else{

                
			  $this->load->model("Blogs_model");
			  $this->global['pageTitle'] = 'Fincore :blogs';
              $data['user'] = $this->Blogs_model->getTestbyId($id);
          
          $this->loadViews("admin/blogs/edit", $this->global, $data, NULL);

     if( $this->input->post('submit')!==NULL)

    {
        $id = $this->input->post('id');
        $formArray = array();
       

        $formArray['title']= $this->input->post('title');
        $formArray['content']= $this->input->post('content');
  //      $formArray['designation']= $this->input->post('designation');
                             
        $formArray['date_modified']= date('Y-m-d H:i:s');
		
		// upload Image 
          /*      if (!empty($_FILES["timage"]['name'])) {
					$config = array(
						'upload_path' => "./uploads/testimonial/",
						'allowed_types' => "jpg|PNG|png|gif|jpeg|JPEG|JPG",
						'overwrite' => TRUE,
						'max_size' => "9000000", // Can be set to particular file size , here it is 0.5 MB(548 Kb)
					);
                    $config['file_name'] = $_FILES["timage"]['name'];                  
                    $this->load->library('upload', $config);					
                   					
					if ( !$this->upload->do_upload('timage'))
					{
						$this->session->set_flashdata('error',$this->upload->display_errors());
                        redirect('admin/service/addNew');
						
					}
					else
					{
						$file_data = array('upload_data' => $this->upload->data());
						$image = $_FILES["timage"]['name'];
						
					}
                }else{
					
					$image = $this->db->get_where('tbl_testimonials', array('id'=>$id))->row_array()['image'];
				}
		
		
		
		
		
		
		
		
		
		
		
		
		$formArray['image']= $image;*/
		
		
        $this->Blogs_model->updatetestimonial($id,$formArray);
        $this->session->set_flashdata('success','record updated successfully');
             redirect(base_url().'admin/blogs/viewtestimonials');
   }
}
}

function deleteTestimonials (){
     
        if($this->isAdmin() == TRUE)
        {
            echo(json_encode(array('status'=>'access')));
        }
        else
        {
            $tid = $this->input->post('tid');
            $serviceInfo = array('isDeleted'=>1, 'date_modified'=>date('Y-m-d H:i:s'),'status'=>'Inactive');
            
            $result = $this->Blogs_model->deleteTestimonial($tid, $serviceInfo);
            
            if ($result > 0) { echo(json_encode(array('status'=>TRUE))); }
            else { echo(json_encode(array('status'=>FALSE))); }
        }
}




      public function datatable_json(){			
		$records = $this->Blogs_model->testimonial_data();
		$data = array();	
		foreach ($records['data']  as $row) 
		{  
			//$image = '<img src="'.base_url().'uploads/testimonial/'.$row['image'].'" width="100" height="80">';
			$data[]= array(
				$username = $row['title'],
				//$image,
				$row['content'],
			//	$row['designation'],
				$row['status'],
				$row['date'],
				
				'<a title="Edit/View" class="update btn btn-primary" href="'.base_url().'admin/Blogs/editTestimonials/'.$row['id'].'"> <i class="fa fa-pencil-square-o"></i></a>|<a class="btn btn-sm btn-danger deleteTestimonial" href="#" data-tid="'. $row['id'].'" title="Delete"><i class="fa fa-trash"></i></a>',				
				
				
			);
		}
	/*<a title="Delete" class="delete btn btn-danger" data-href="'.base_url('admin/delete_celebs/'.$row['id']).'" data-toggle="modal" data-target="#deletemodal"> <i class="fa fa-trash-o"></i></a> */
		$records['data']=$data;
		echo json_encode($records);			
		
	}
   

}

?>