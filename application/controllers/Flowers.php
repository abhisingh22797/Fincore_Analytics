<?php if(!defined('BASEPATH')) exit('No direct script access allowed');


/**
 * Class : Flowers (FlowersController)
 * Flowers Class to control Flowers Page.
 * @author : Amit Yadav
 * @version : 1.5
 * @since : 15 November 2019-20
 */
class Flowers extends CI_Controller
{
    /**
     * This is default constructor of the class
     */
    public function __construct()
    {
        parent::__construct();
		$this->load->model('frontend/flower_model');
    
    }
    
    /**
     * This function used to load the first screen
     */
    public function index()
    {
		
		
		$data['allSer']= $this->flower_model->flowerAllItems();
        $data['allCat'] = $this->flower_model->flowerCategory();   
        $data['title'] = 'Flower | Birjuflower Store';
		$data['layout'] = 'flower';
		$this->load->view('layout',$data);
      
       
    }
    
    

   
}

?>