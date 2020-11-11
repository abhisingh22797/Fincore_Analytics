<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Class : Home_model (Home Model)
 * Flower model class to get to handle user related data 
 * @author : Amit Yadav
 * @version : 1.1
 * @since : 15 November 2019
 */
class Gyan_model extends CI_Model
{
    
    /**
     * This function used to get user information by id
     * @param number $userId : This is user id
     * @return array $result : This is user information
     */
    function getAllSliders()
    {
        $this->db->select('*');
        $this->db->from('tbl_sliders');
        $this->db->where('isDeleted', 0);
		$this->db->where('status', 'Active');
        $this->db->order_by('id', 'DESC');
       // $this->db->limit(8);
        $query = $this->db->get();
        
        return $query->result();
    }
	
	 function getAbout()
    {
        $this->db->select('id, description,title');
        $this->db->from('tbl_about');
		$this->db->where('status', 'Active');
       
        $query = $this->db->get();
        
        return $query->row_array();
    }
		public function allprogram(){
	
	   $this->db->select('*');
        $this->db->from('tbl_course_category');
		$this->db->where('status', 'Active');
       
        $query = $this->db->get();
        
        return $query->result();
	}

 function getAboutTitle()
    {
        $this->db->select('about_title');
        $this->db->from('tbl_contact');
		$this->db->where('status', 'Active');
       
        $query = $this->db->get();
        
        return $query->row_array();
    }
	
	function getContact()
    {
        
        $query = $this->db->get('tbl_contact');
        
        return $query->row_array();
    }
    function getTestimonial()
    {
		
		$this->db->where('isDeleted', 0);
        $this->db->where('status', 'Active');
        $query = $this->db->get('tbl_testimonials');
        
        return $query->result();
    }
	function getHome()
    {
		
		//$this->db->where('isDeleted', 0);
        $this->db->where('id', 1);
        $query = $this->db->get('tbl_gyan');
        
        return $query->row_array();
    }
	 function allblogs(){
	
	   $this->db->select('*');
        $this->db->from('tbl_blogs');
		$this->db->where('status', 'Active');
       
        $query = $this->db->get();
        
        return $query->result();
	 }
	function getBrands()
    {
		
		$this->db->where('isDeleted', 0);
        $this->db->where('status', 'Active');
        $query = $this->db->get('tbl_brands');
        
        return $query->result();
    }
    function getPromos()
    {
		
		$this->db->where('isDeleted', 0);
        $this->db->where('status', 'Active');
        $query = $this->db->get('tbl_campain');
        
        return $query->row_array();
    }


   function getLearning()
    {
		$this->db->select('tbl_course_category.cat_name, COUNT(tbl_course_subcategory.subcat_name) as course');
		$this->db->from('tbl_course_category');
		$this->db->join('tbl_course_subcategory', 'tbl_course_category.id = tbl_course_subcategory.cat_id');
		$this->db->where('tbl_course_category.isDeleted', 0);
		$this->db->where('tbl_course_category.status', 'Active');
		$this->db->order_by('tbl_course_category.id','desc');
      
        $query = $this->db->get();
        
        return $query->result();
    }
	


   
}

  