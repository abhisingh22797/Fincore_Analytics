<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Class : Brands_model (User Model)

 * @author : Kishor Mali
 * @version : 1.1
 * @since : 15 November 2016
 */
class Funds_model extends CI_Model
{
     function insertfunds($forminput)  {
        $this->db->insert("tbl_funds",$forminput);
    }


  
    function getUser($userid){
        $this->db->where('id',$userid);
        return $user = $this->db->get('tbl_sliders')->row_array();
    }




    
   function updatefunds($id,$formArray){
        $this->db->where('id',$id);
        $this->db->update('tbl_funds',$formArray);


   }


 function deletefunds($bId, $userInfo)
    {
        $this->db->where('id', $bId);
        $this->db->update('tbl_funds', $userInfo);
        
        return $this->db->affected_rows();
    }
    
   
    function getfundsbyId($id){
  
        
        return $this->db->get_where('tbl_funds', array( 'id' =>$id ) )->row_array();

   }
   
   public function funds_data() {       

        $this->load->library('datatable');  
    
        $SQL ="SELECT * FROM tbl_funds WHERE tbl_funds.status = 'Active'";          
        return $this->datatable->LoadJsona($SQL);
        
    }
  
}


?>