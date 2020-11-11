<?php if(!defined('BASEPATH')) exit('No direct script access allowed');


/**
 * Class : Course (ServicesController)
 * Course Class to control Course Page.
 * @author : Amit Yadav
 * @version : 1.5
 * @since : 15 November 2019-20
 */
class Course extends CI_Controller
{
    /**
     * This is default constructor of the class
     */
    public function __construct()
    {
        parent::__construct();
		$this->load->model('frontend/course_model');
		$this->load->helper('url');
				$this->load->helper('form');
						$this->load->library('email');
    
    }
    
    /**
     * This function used to load the first screen
     */
    public function index()
    {
         $this->load->helper('my_helper');
		$subcat_id = $this->uri->segment(2);
	
		$c_id =$this->course_model->getCourseID($subcat_id);
	    $data['allData']  = $this->course_model->getCourseDetail($c_id);
	    $data['allTra']  = $this->course_model->getAllTaraining($c_id);
	    $data['allCert']  = $this->course_model->getAllCert($c_id);
        $data['allTest']  = $this->course_model->getAllTest();
        $data['allBen']  = $this->course_model->getAllBen($c_id);

     
        $data['title'] =    $data['allData']['c_title'].'| Fiesttech';
	//	$data['layout'] =   'course_details';
		$this->load->view('course_details',$data);
      
       
    }
    
    public function submitRequest()
    {
        
               $phone = $this->input->post('phone');
                $email = $this->input->post('email');
                $fname = $this->input->post('mname');
               
                $msg = $this->input->post('message');
                
				
				
				$scontactInfo = array(
				
				'mobile'=>$phone,
				'email'=>$email,
				'fname'=>$fname,
				
				'message'=>$msg,
				'isDeleted'=>0,
				'status'=>'Active',
				'date'=>date('Y-m-d H:i:s'));
				
				$data = $this->security->xss_clean($scontactInfo);
                
                $result = $this->course_model->submitContact($data);
                
                if($result == true)
                {
					
					   $htmlContent = '<h3>Name:'.$fname.'</h3>';
                       $htmlContent .= '<h3>Email:'.$email.' </h3>';
                       $htmlContent .= '<h3>Phone:'.$phone.' </h3>';
                       $htmlContent .= '<h3>Message:'.$msg.' </h3>';
                       $htmlContent .= '<h3>IP:'.$_SERVER['REMOTE_ADDR'].' </h3>';
					
    
						$config['mailtype'] = 'html';
						$this->email->initialize($config);
						$this->email->from('admin@fiesttech.com', 'Fiesttech');
					    $this->email->to('amityadavamy19@gmail.com');


					    $this->email->subject('Course Request');
						$this->email->message($htmlContent);
						$this->email->send();
					
					
					
					
					

					
			
					
					

                   
                    echo "Success";
                }
                else
                {
                    echo "Oops! Something went wrong. Please try again";
                }
                
        
        
        
        
        
    }
    
     public function currConvert()
     {
         $this->load->library('currConvert');
         if(isset($_POST['val']) && $_POST['val'] != ""){
		
		$val = explode('|', $_POST['val']);
		
		$crptCurr	= $val[0];
		$stdCurr	= $val[1];
		$amt		= $val[2];
		
		if($crptCurr!="" && $stdCurr!="" && $amt!=""){
			$curs= new CursConverter($crptCurr,$stdCurr,$amt);		
			$data = $curs->convert();		
			$result = array(
				'success'	=> true,
				'message'	=> 'Success',
				'data'		=> $data[$stdCurr]
			);
		}else{
			$result = array(
				'success' => false,
				'message' => 'Bad request!'
			);
		}
    	}else{
    		$result = array(
    			'success' => false,
    			'message' => 'Bad request!'
    		);
    	}
    	echo json_encode($result);
         
         
         
         
         
     }
    
    
    
    
    

   
}

?>