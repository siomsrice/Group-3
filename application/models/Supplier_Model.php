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
       $this->db->select('Name,supplierId'); 
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
     
    /* 
     * Insert file data into the database 
     * @param array the data for inserting into the table 
     */ 
    public function add($data = array()){ 
        $add = $this->db->insert_batch($this->table, $data); 
        return $add?true:false; 
    } 
    
    function get_users($where_arr){
    /* all the queries relating to the data we want to retrieve will go in here. */

    $this->db->where($where_arr);
    $this->db->select('categoryID,Name');
    $q = $this->db->get('supplier');

    /* after we've made the queries from the database, we will store them inside a variable called $data, and return the variable to the controller */
    if($q->num_rows() > 0)
    {
      // we will store the results in the form of class methods by using $q->result()
      // if you want to store them as an array you can use $q->result_array()
      foreach ($q->result_array() as $row)
      {
        $data[] = $row;
      }
      return $data;
    }
  }


}