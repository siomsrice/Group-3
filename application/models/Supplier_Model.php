<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class Supplier_model extends CI_Model {

    private $table = "supplier";

    public function create($formArray){
        $this->db->insert($this->table, $formArray);
    }

    public function getSuppliers(){
        $result = $this->db->get($this->table)->result_array();
        return $result;
    }

    public function getSupplier($id){
        $this->db->where('supplierId', $id);
        $supply= $this->db->get($this->table)->row_array();
        return $supply;
    }

    public function update($id, $formArray){
        $this->db->where('supplierId', $id);
        $this->db->update($this->table, $formArray);
    }

    public function delete($id){
        $this->db->where('supplierId', $id);
        $this->db->delete($this->table);
    }

    public function countSupplier(){
        $query = $this->db->get($this->table);
        return $query->num_rows();
    }

    public function getSupInfo(){
        $this->db->select('*');
        $this->db->from($this->table);
        $this->db->join('category', 'supplier.categoryId = category.categoryId');
        $result = $this->db->get()->result_array();
        return $result;
    }
    /* 
     * Fetch files data from the database 
     * @param id returns a single record if specified, otherwise all records 
     */ 
    public function getRows($id = '')
    { 
        $this->db->select('supplierId,categoryID,Name,Email,Url,Phone,Address,file_name'); 
        $this->db->from($this->table); 
        if($id)
        { 
            $this->db->where('supplierId',$id); 
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
    public function add($data = array())
    { 
        $insert = $this->db->insert_batch($this->table,$data); 
        return $insert?true:false; 
    } 
}
     

