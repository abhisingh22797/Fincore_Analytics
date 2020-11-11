<?php if(!defined('BASEPATH')) exit('No direct script access allowed');


/**
 * Class : Gallery (GalleryController)
 * Gallery Class to control Gallery Page.
 * @author : Amit Yadav
 * @version : 1.5
 * @since : 15 November 2019-20
 */
class Gallery extends CI_Controller
{
    /**
     * This is default constructor of the class
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->model('frontend/gallery_model');
    }
    
    /**
     * This function used to load the first screen
     */
    public function index()
    {
		
		
		
		$data['allCat'] = $this->gallery_model->galleryCategory();
		$data['allItem'] = $this->gallery_model->galleryAllItems();
		
        $data['title'] = 'Gallery | Birjuflower Store';
		$data['layout'] = 'gallery';
		$this->load->view('layout',$data);
      
       
    }
    
    

   
}

?>