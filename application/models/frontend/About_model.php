<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Class : About_model (About Model)
 * About model class to get to handle user related data 
 * @author : Amit Yadav
 * @version : 1.1
 * @since : 15 November 2019
 */
class About_model extends CI_Model
{
    /**
     * This function is used to get the About 
     * @param string $searchText : This is optional search text
     * @return number $count : This is row count
     */ 
	 
    function getAllItems()
	{
		$alldata =  $this->db->get('tbl_about');
		
        return $alldata->row_array();
    }
	
		public function allprogram(){
	
	   $this->db->select('*');
        $this->db->from('tbl_course_category');
		$this->db->where('status', 'Active');
       
        $query = $this->db->get();
        
        return $query->result();
	}
	
	
   

}

  