<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class Supplier_model extends CI_Model {

    private $table = "supplier_db";

    public function create($formArray){
        $this->db->insert($this->table, $formArray);
    }

    public function getSuppliers(){
        $result = $this->db->get($this->table)->result_array();
        return $result;
    }

    public function getSupplier($id){
        $this->db->where('id', $id);
        $supply= $this->db->get($this->table)->row_array();
        return $supply;
    }

    public function update($id, $formArray){
        $this->db->where('id', $id);
        $this->db->update($this->table, $formArray);
    }

    public function delete($id){
        $this->db->where('id', $id);
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
        $this->db->select('id,sup_name,sup_email,sup_url,sup_phone,file_name'); 
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
        $insert = $this->db->insert_batch($this->table, $data); 
        return $insert?true:false; 
    } 


}