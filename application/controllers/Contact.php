<?php if(!defined('BASEPATH')) exit('No direct script access allowed');


/**
 * Class : Contact (HomeController)
 * Contact Class to control Contact Page.
 * @author : Amit Yadav
 * @version : 1.5
 * @since : 15 November 2019-20
 */
class Contact extends CI_Controller
{
    /**
     * This is default constructor of the class
     */
    public function __construct()
    {
        parent::__construct();
		$this->load->model('frontend/contact_model');
    $this->load->library('email');
    }
    
    /**
     * This function used to load the first screen
     */
    public function index()
    {
		$this->load->helper('form');
			$data['program'] =  $this->contact_model->allprogram();	
		 $data['contact'] = $this->contact_model->getAllContact();  
        $data['title'] = 'Fincore Analytics | Contact';
		$data['layout'] = 'contact';
		$this->load->view('layout',$data);
      
       
    }
	
	public function submitContact()
    {
		
		
		        $phone = $this->input->post('mobile');
                $email = $this->input->post('email');
                $fname = $this->input->post('fname');
                $lname = $this->input->post('lname');
                $msg = $this->input->post('message');
                
				
				
				$scontactInfo = array(
				
				'mobile'=>$phone,
				'email'=>$email,
				'fname'=>$fname,
				'lname'=>$lname,
				'message'=>$msg,
				'isDeleted'=>0,
				'status'=>'Active',
				'date'=>date('Y-m-d H:i:s'));
				
				$data = $this->security->xss_clean($scontactInfo);
                
                $result = $this->contact_model->submitContact($data);
                
                if($result == true)
                {
					
					   $htmlContent = '<h3>Name:'.$fname.' '.$lname.' </h3>';
                       $htmlContent .= '<h3>Email:'.$email.' </h3>';
                       $htmlContent .= '<h3>Phone:'.$phone.' </h3>';
                       $htmlContent .= '<h3>Message:'.$msg.' </h3>';
                       $htmlContent .= '<h3>IP:'.$_SERVER["HTTP_HOST"].' </h3>';
					
    
						$config['mailtype'] = 'html';
						$this->email->initialize($config);
						$this->email->from('admin@birjuflower.com', 'Birjuflower Store Admin');
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
    
    

   
}

?>