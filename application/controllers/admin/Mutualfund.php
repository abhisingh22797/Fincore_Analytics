<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';


class Mutualfund extends BaseController{
       public function __construct()
    {
        parent::__construct();
        $this->load->model('Funds_model');
   
        $this->isLoggedIn();  
        $this->load->helper('url', 'form');
      
    }
    

function index(){

    $this->load->model("Funds_model");
    $data["fetch_data"]= $this->Funds_model->FundssListing();
    
    //$this->addTestimonials();       
}

 


function viewFunds(){
     
        if($this->isAdmin() == TRUE)
        {
            $this->loadThis();
        }
        else
        {          
            $this->global['pageTitle'] = 'Mutual Funds';

            
            $this->loadViews("admin/Funds/listfunds", $this->global, NULL, NULL);
        }
    }



    function addfunds()
    {
        if($this->isAdmin() == TRUE)
        {
            $this->loadThis();
        }
        else

        {
             $this->load->model('Funds_model');

       //   $data['roles'] = $this->Brands_model->getUserRoles();
            
            $this->global['pageTitle'] = 'Mutual Funds';

            $this->loadViews("admin/Funds/addfunds", $this->global, NULL, NULL);

     
    if(  $this->input->post('submit')!==NULL){

       
   // upload Image 
                if (!empty($_FILES["image"]['name'])) {
                    $config = array(
                        'upload_path' => "./uploads/funds/",
                        'allowed_types' => "jpg|PNG|png|gif|jpeg|JPEG|JPG",
                        'overwrite' => TRUE,
                        'max_size' => "9000000", // Can be set to particular file size , here it is 0.5 MB(548 Kb)
                    );
                    $config['file_name'] = $_FILES["image"]['name'];                  
                    $this->load->library('upload', $config);                    
                                    
                    if ( !$this->upload->do_upload('image'))
                    {
                        $this->session->set_flashdata('error',$this->upload->display_errors());
                        redirect('admin/funds/listfunds');
                        
                    }
                    else
                    {
                        $file_data = array('upload_data' => $this->upload->data());
                        $image = $_FILES["image"]['name'];
                        
                    }
                }
        

                $forminput = array(
				
                 "title" => $this->input->post('title'),
                 "type" => $this->input->post('type'),
                 "tenure" => $this->input->post('tenure'),
                 "returns" => $this->input->post('returns'),
                 "investors" => $this->input->post('investors'),
                 "desc" => $this->input->post('desc'),
                 "provider" => $this->input->post('provider'),
                 "image" =>  $image,     
                 "status" => 'Active',
                 "date"=>date('Y-m-d H:i:s'),
                 "date_updated"=>date('Y-m-d H:i:s')
                 
                

               
          );  
             
             //print_r($forminput);
            $this->Funds_model->insertfunds($forminput);
            $this->session->set_flashdata('success','record added successfully');
             redirect(base_url().'admin/mutualfund/viewFunds');
            
            
            }

           
  }   }



  function editfunds($id =NULL ){

     if($this->isAdmin() == TRUE)
        {
            $this->loadThis();
        }
        else{

                
              $this->load->model("Funds_model");
              $this->global['pageTitle'] = 'Mutual Funds';
              $data['user'] = $this->Funds_model->getfundsbyId($id);
          
          $this->loadViews("admin/funds/editfunds", $this->global, $data, NULL);

     if( $this->input->post('submit')!==NULL)

    {
        $id = $this->input->post('id');
        $title = $this->input->post('title');
        $type = $this->input->post('type');
        $tenure = $this->input->post('tenure');
        $returns = $this->input->post('returns');
        $investors = $this->input->post('investors');
        $desc = $this->input->post('desc');
        $provider = $this->input->post('provider');
		
		
		
        $formArray = array();
       
		$formArray['title'] = $title;
		$formArray['type'] = $type;
		$formArray['tenure'] = $tenure;
		$formArray['returns'] = $returns;
		$formArray['investors'] = $investors;
		$formArray['desc'] = $desc;
		$formArray['provider'] = $provider;                     
        $formArray['date_updated']= date('Y-m-d H:i:s');
        
        // upload Image 
                if (!empty($_FILES["image"]['name'])) {
                    $config = array(
                        'upload_path' => "./uploads/funds/",
                        'allowed_types' => "jpg|PNG|png|gif|jpeg|JPEG|JPG",
                        'overwrite' => TRUE,
                        'max_size' => "9000000", // Can be set to particular file size , here it is 0.5 MB(548 Kb)
                    );
                    $config['file_name'] = $_FILES["image"]['name'];                  
                    $this->load->library('upload', $config);                    
                                    
                    if ( !$this->upload->do_upload('image'))
                    {
                        $this->session->set_flashdata('error',$this->upload->display_errors());
                        redirect('admin/brands/addNew');
                        
                    }
                    else
                    {
                        $file_data = array('upload_data' => $this->upload->data());
                        $image = $_FILES["image"]['name'];
                        
                    }
                }else{
                    
                    $image = $this->db->get_where('tbl_funds', array('id'=>$id))->row_array()['image'];
                }

        $formArray['image']= $image;
        
        
        $this->Funds_model->updatefunds($id,$formArray);
        $this->session->set_flashdata('success','record updated successfully');
             redirect(base_url().'admin/mutualfund/viewfunds');
   }
}
}

function deletefund(){
     
           if($this->isAdmin() == TRUE)
        {
            echo(json_encode(array('status'=>'access')));
        }
        else
        {
            $bId = $this->input->post('bid');
            $userInfo = array('isDeleted'=>1, 'date_updated'=>date('Y-m-d H:i:s'),'status'=>'Inactive');
        
          $result = $this->Funds_model->deletefunds($bId, $userInfo);
            
           if ($result > 0) { echo(json_encode(array('status'=>TRUE))); }
            else { echo(json_encode(array('status'=>FALSE))); }
        }
}

 




      public function datatable_json(){         
        $records = $this->Funds_model->funds_data();
        $data = array();    
        foreach ($records['data']  as $row) 
        {  
            $image = '<img src="'.base_url().'uploads/funds/'.$row['image'].'" width="100" height="80">';
            $data[]= array(
              
			  
				$row['title'],
				$row['type'],
                $image,
				$row['tenure'],
				$row['returns'],
				$row['investors'],
				$row['desc'],
				$row['provider'],
              
                 $row['date_updated'],
               
                
                '<a title="Edit/View" class="update btn btn-primary" href="'.base_url().'admin/mutualfund/editfunds/'.$row['id'].'"> <i class="fa fa-pencil-square-o"></i></a>|<a class="btn btn-sm btn-danger deletefunds" href="#" data-bid="'. $row['id'].'" title="Delete"><i class="fa fa-trash"></i></a>',             
                
                
            );
        }
    
        $records['data']=$data;
        echo json_encode($records);         
        
    }
   


}


?>