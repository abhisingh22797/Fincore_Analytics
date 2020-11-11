<?php if(!defined('BASEPATH')) exit('No direct script access allowed');


/**
 * Class : Checkout (CheckoutController)
 * Checkout Class to control Course Page.
 * @author : Amit Yadav
 * @version : 1.5
 * @since : 15 November 2019-20
 */
class Checkout extends CI_Controller
{
    /**
     * This is default constructor of the class
     */
    public function __construct()
    {
        parent::__construct();
		$this->load->model('frontend/checkout_model');
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->library('email');
		$this->load->helper('string');
    
    }
    
    /**
     * This function used to load the first screen
     */
    public function index()
    {
		$c_id = $this->uri->segment(2);
	    $data['allData']  = $this->checkout_model->getTrainOpt(1);
	    $data['course']  = $this->checkout_model->getCourse($data['allData']['cat_id'],$data['allData']['subcat_id'],$data['allData']['subcat2_id']);
	    $data['logo']  = $this->checkout_model->getLogo();
        $data['title'] =    'Checkout | Fiesttech';
		$data['layout'] =   'checkout';
		$this->load->view('layout',$data);
      
       
    }
    
     public function success()
     {
         
         
         $this->load->view('success');
         
         
     } 
      
    public  function json()
     {
         
         
        $hash=hash('sha512', $_POST['key'].'|'.$_POST['txnid'].'|'.$_POST['amount'].'|'.$_POST['pinfo'].'|'.$_POST['fname'].'|'.$_POST['email'].'|||||'.$_POST['udf5'].'||||||'.$_POST['salt']);
		$json=array();
		//$json['success'] = $hash;
    	echo json_encode($hash);
           
         
         
     } 
    
   
    
     
    
    
    
    
    

   
}

?>