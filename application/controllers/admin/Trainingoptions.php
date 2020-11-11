<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';


class Trainingoptions extends BaseController{
       public function __construct()
    {
        parent::__construct();
        $this->load->model('training_model');
     
        $this->isLoggedIn();  
        $this->load->helper('url', 'form');
      
    }
    

  function index(){

    $this->load->model("training_model");
    $data["fetch_data"]= $this->training_model->trainingListing();
	
	 //$this->addTestimonials();       
    }

 

  public function uploadfilesamenames($file,$tem)
  {
	$file=$file;
	$tmp=$tem;
	$test=strpos($file,'.');
	$ext=substr($file,$test);
	//$file=substr(self::uuid(), 1, 7);
	$attach=$file.$ext;         
	$destN="./uploads/training/".$file;
	move_uploaded_file($tmp,$destN);
	return $file;
  } 
	

  public function viewtrainingoptions(){
     
        if($this->isAdmin() == TRUE)
        {
            $this->loadThis();
        }
        else
        {        

            $this->global['pageTitle'] = 'fiesttech :training options';

            
            $this->loadViews("admin/training_options/viewtrainingoptions", $this->global, NULL, NULL);
        }
  }



  public function addtrainingoptions()
    {
        if($this->isAdmin() == TRUE)
        {
            $this->loadThis();
        }
        else

        {
          $data['roles'] = $this->training_model->getcategory();
        //  $data['role'] = $this->training_model->getsubcategory();
            
          //    $data['rol'] = $this->training_model->getsubcategory2();

         
            
            $this->global['pageTitle'] = 'fiesttech :sub category';

            $this->loadViews("admin/training_options/addtrainingoptions", $this->global, $data, NULL);

        
          if(  $this->input->post('submit')!==NULL)
          {

  $image = $this->uploadfilesamenames($_FILES["timage"]['name'],$_FILES["timage"]['tmp_name']);
            $forminput = array(

             "cat_id"=>$this->input->post('role'),  
       //      "subcat_id"=>  $this->input->post('subcatid'), 
      //       "subcat2_id"=>  $this->input->post('subcatid2'), 
             "c_title"=>  $this->input->post('title'), 
			    "feature" => $this->input->post('feature'),
              "c_description" => $this->input->post('description'),
            "image" =>  $image,   
             "status" => 'Active',
             "date_created"=>date('Y-m-d H:i:s'),
             "date_updated"=>date('Y-m-d H:i:s')
              );  
             
            // print_r($forminput);
            $this->training_model->inserttraining($forminput);
            $this->session->set_flashdata('success','record added successfully');
             redirect(base_url().'admin/trainingoptions/viewtrainingoptions');    
          } 
        }  
    }



  public function edittrainingoptions(){


      $id = $this->uri->segment(4);
    //echo $id;
     // exit;
    if($this->isAdmin() == TRUE)
      {
        $this->loadThis();
      }
   else{ 
       $this->global['pageTitle'] = 'fiesttech :training options';
     $data['training_data'] = $this->training_model->gettrainingById($id); 
      $data['cat_data'] = $this->training_model->getAllCat();
       $data['subcat_data'] = $this->training_model->getAllsub();
        $data['subcat2_data'] = $this->training_model->getAllsub2();
       
       
          $this->loadViews("admin/training_options/edittrainingoptions", $this->global, $data, NULL);
        }

       if( $this->input->post('submit')!==NULL)

    {
            $id = $this->input->post('id');
       
        $formArray = array();
       
        $formArray['cat_id']=$this->input->post('role');
    //    $formArray['subcat_id']= $this->input->post('subcatid'); 
      //  $formArray['subcat2_id']= $this->input->post('subcatid2'); 
        $formArray['c_title']= $this->input->post('title'); 
		$formArray['c_description']= $this->input->post('description'); 
        $formArray['feature']= $this->input->post('feature'); 
       // $formArray['c_price']= $this->input->post('price');                      
        $formArray['date_updated']= date('Y-m-d H:i:s');
		  
      if (!empty($_FILES["timage"]['name'])) {
        $image1 = $this->uploadfilesamenames($_FILES["timage"]['name'], $_FILES["timage"]['tmp_name']);
      } else {

        $image1 = $this->db->get_where('tbl_training_options', array('id' => $id))->row_array()['image'];
      }
                
        $formArray['image']= $image1;
        
          
       $this->training_model->updatetraining($this->input->post('id'),$formArray);
        $this->session->set_flashdata('success','record updated successfully');
           redirect(base_url().'admin/trainingoptions/viewtrainingoptions');
      }
     
  }

  public function deletetrainingoptions(){
     
           if($this->isAdmin() == TRUE)
             {
               echo(json_encode(array('status'=>'access')));
             }
             else
              {
               $tId = $this->input->post('tid');
                $userInfo = array('isDeleted'=>1, 'date_updated'=>date('Y-m-d H:i:s'),'status'=>'Inactive');
            
                $result = $this->training_model->deletetraining($tId, $userInfo);
            
               if ($result > 0) { echo(json_encode(array('status'=>TRUE))); }
                else { echo(json_encode(array('status'=>FALSE))); }
                }
        }




     public function subcatdata()
        {
      
      $catid=$this->input->post('catid');
            $res = $this->training_model->subcat_data($catid);
      
      echo "<option>--select--</option>";
      foreach($res as $r)
      {
         echo "<option value='".$r['id']."'> ".$r['subcat_name']."</option>";
      }
      
           

 
    }



     public function subcatdata2()
        {
      
      $subcatid=$this->input->post('subcatid');
            $rese = $this->training_model->subcat2_data($subcatid);
      
      echo "<option>--select--</option>";
      foreach($rese as $re)
      {
         echo "<option value='".$re['id']."'> ".$re['subcat2_name']."</option>";
      }
      
           

 
    }




 




 public function datatable_json(){ 
   $records = $this->training_model->training_data();


  
   $data = array();    
   foreach ($records['data']  as $row) 
     {  
           
        $data[]= array(

         $username = $row['cat_name'],
    //    $row['subcat_name'],
   //     $row['subcat2_name'],
        $row['c_title'],
    //    $row['c_description'],
     
        // $row['c_price'],
         $row['date_created'], 
         $row['date_updated'],
         $row['status'],
    
         '<a title="Edit/View" class="update btn btn-primary" href="'.base_url().'admin/trainingoptions/edittrainingoptions/'.$row['id'].'"> <i class="fa fa-pencil-square-o"></i></a>|<a class="btn btn-sm btn-danger deletetraining" href="#" data-sid="'. $row['id'].'" title="Delete"><i class="fa fa-trash"></i></a>',             
        );
       }
    
      $records['data']=$data;
      echo json_encode($records);           
  }




}


?>