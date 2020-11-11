<?php if(!defined('BASEPATH')) exit('No direct script access allowed');


/**
 * Class : Home (HomeController)
 * Home Class to control Home Page.
 * @author : Abhishek singh
 * @version : 1.5
 * @since : 15 November 2019-20
 */
class Category extends CI_Controller
{
    /**
     * This is default constructor of the class
     */
    public function __construct()
    {
        parent::__construct();
    $this->load->model('frontend/Category_model');
	$this->load->helper('form');
	$this->load->library('email');
    }
    
    /**
     * This function used to load the first screen
     */
    public function index()
    {    
	$url = $this->uri->segment(2);
	
	//    $data['test'] =  $this->home_model->getTestimonial();
		$data['contact'] =  $this->Category_model->getContact();
		   $data['allPro'] = $this->Category_model->getProByUrl($url);
	//	$data['abt'] = $this->home_model->getAboutTitle();
	//	$data['allSlider'] = $this->home_model->getAllSliders(); 
     //   $data['aboutInfo'] = $this->home_model->getAbout();	
      //  $data['allHome'] = $this->home_model->getHome();	
      //  $data['allBarnds'] = $this->home_model->getBrands();
       // $data['promos'] = $this->home_model->getPromos();
       // $data['learnPath'] = $this->home_model->getLearning();
        		$data['program'] =  $this->Category_model->allprogram();
			$data['syllabus'] =  $this->Category_model->allSyllabus();				
        $data['title'] = 'Fincore Analytics | Financial';
		$data['layout'] = 'Category';
		$this->load->view('layout',$data);
      
       
    }
	
	/* public function gQuery()
    {
		
		        $phone = $this->input->post('phone');
                $fname = $this->input->post('myname');
               
                
				
				
				$scontactInfo = array(
				
				'mobile'=>$phone,
				'fname'=>$fname,
				'isDeleted'=>0,
				'status'=>'Active',
				'date'=>date('Y-m-d H:i:s'));
				
				$data = $this->security->xss_clean($scontactInfo);
                $this->load->model('frontend/contact_model');
                $result = $this->contact_model->submitContact($data);
                $this->load->library('email');
                if($result == true)
                {
					
					   $htmlContent = '<h3>Name:'.$fname.' </h3>';
                       $htmlContent .= '<h3>Phone:'.$phone.' </h3>';
                       $htmlContent .= '<h3>IP:'.$_SERVER["HTTP_HOST"].' </h3>';
					
    
						$config['mailtype'] = 'html';
						$this->email->initialize($config);
						$this->email->from('admin@fiesttech.com', 'Birjuflower Store Admin');
					    $this->email->to('amityadavamy19@gmail.com');


					    $this->email->subject('Contact Query');
						$this->email->message($htmlContent);
						$this->email->send();
					
					
                   
                    echo "Success";
                }
                else
                {
                    echo "Oops! Something went wrong. Please try again";
                }
      
       
    }
    
	
	
	public function hquery()
    {
		
		        $phone = $this->input->post('phone');
                $fname = $this->input->post('fname');
                $email = $this->input->post('email');
                $msg = $this->input->post('message');
               
                
				
				
				$scontactInfo = array(
				
				'mobile'=>$phone,
				'fname'=>$fname,
				'email'=>$email,
				'message'=>$msg,
				'isDeleted'=>0,
				'status'=>'Active',
				'date'=>date('Y-m-d H:i:s'));
				
				$data = $this->security->xss_clean($scontactInfo);
                $this->load->model('frontend/contact_model');
                $result = $this->contact_model->submitContact($data);
                $this->load->library('email');
                if($result == true)
                {
					
					   $htmlContent = '<h3>Name:'.$fname.' </h3>';
					   $htmlContent = '<h3>Email:'.$email.' </h3>';
					   $htmlContent = '<h3>Mobile:'.$phone.' </h3>';
                       $htmlContent .= '<h3>Message:'.$msg.' </h3>';
                       $htmlContent .= '<h3>IP:'.$_SERVER["HTTP_HOST"].' </h3>';
					
    
						$config['mailtype'] = 'html';
						$this->email->initialize($config);
						$this->email->from('admin@fiesttech.com', 'Birjuflower Store Admin');
					    $this->email->to('amityadavamy19@gmail.com');


					    $this->email->subject('Contact Query');
						$this->email->message($htmlContent);
						$this->email->send();
					
					
                   
                    echo "Success";
                }
                else
                {
                    echo "Oops! Something went wrong. Please try again";
                }
      
       
    }*/
	   public function request()
    {
        
        
            $name = $this->input->post('name');
			 $email =  $this->input->post('email');
            $phone =  $this->input->post('phone');
           
            $training =  $this->input->post('training');
             $message =  $this->input->post('message');
            
$htmlContent = '<h3>Name: ' . $name . ' </h3>';


$htmlContent .= '<h3>Email: ' . $email . ' </h3>';
$htmlContent .= '<h3>mobile: ' . $phone . ' </h3>';
$htmlContent .= '<h3>training: ' . $training . ' </h3>';
$htmlContent .= '<h3>Message: ' . $message . ' </h3>';

$config['mailtype'] = 'html';
$this->email->initialize($config);
$this->email->from('abhishek.singh@insydin.com', 'ASK ME');
$this->email->to('abhi.singh22797@gmail.com');
$this->email->subject('Contact Query');
$this->email->message($htmlContent);
$this->email->send();
 echo "Success";
}
    

   
}

?>