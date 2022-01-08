<?php  
defined('BASEPATH') OR exit('No direct script access allowed'); 
 
class sup_model extends CI_Model{ 
    function __construct() 
    { 
        $this->tableName = 'supplier_db'; 
    } 
     
    /* 
     * Fetch files data from the database 
     * @param id returns a single record if specified, otherwise all records 
     */ 
    public function getRows($id = '')
    { 
        $this->db->select('id,sup_name,sup_email,sup_url,file_name'); 
        $this->db->from('supplier_db'); 
        if($id)
        { 
            $this->db->where('id',$id); 
            $query = $this->db->get(); 
            $result = $query->row_array(); 
        }
        else
        { 
           
            $query = $this->db->get(); 
            $result = $query->result_array(); 
        } 
        return !empty($result)?$result:false; 
    } 
     
    /* 
     * Insert file data into the database 
     * @param array the data for inserting into the table 
     */ 
    public function insert($data = array())
    { 
        $insert = $this->db->insert_batch('supplier_db',$data); 
        return $insert?true:false; 
    } 
}