<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Class : Testimonial_model (User Model)
 * Testimonial model class to get to handle Testimonial related data 
 * @author : Kishor Mali
 * @version : 1.1
 * @since : 15 November 2016
 */
class Syllabus_model extends CI_Model
{
    
     
    function testimonialListing()
    {

		$this->db->where('status', 'Active');
		$this->db->from('tbl_syllabus');
		$query = $this->db->get();
			return $query;
       
    }
    
    
    function getUserRoles()
    {
        $this->db->select('roleId, role');
        $this->db->from('tbl_roles');
        $this->db->where('roleId !=', 1);
         $query = $this->db->get();
       
       return $query->result();
    }

  

    function getUser($userid){
        $this->db->where('id',$userid);
        return $user = $this->db->get('tbl_syllabus')->row_array();
    }




    
     function inserttestimonial($forminput)
    {
        $this->db->insert("tbl_syllabus",$forminput);
    }

   function updatetestimonial($id,$formArray){
        $this->db->where('id',$id);
        $this->db->update('tbl_syllabus',$formArray);


   }

  function deleteTestimonial($tid, $serInfo)
    {
        $this->db->where('id', $tid);
        $this->db->update('tbl_syllabus', $serInfo);
        
        return $this->db->affected_rows();
    }
   
    function getTestbyId($id){
  
		
		return $this->db->get_where('tbl_syllabus', array( 'id' =>$id ) )->row_array();

   }
   
   public function testimonial_data() {		

        $this->load->library('datatable');	
	
		$SQL ="SELECT * FROM tbl_syllabus WHERE tbl_syllabus.status = 'Active'";			
		return $this->datatable->LoadJsona($SQL);
		
	}
  
   



}

 