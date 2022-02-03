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
    
    public function updatesupplierdetails(
        $usid,$Name,$Email,$Url,$Phone,$Address
        )
    {
        $data=array(
                    
                    'Name' =>$Name,
                    'Email' =>$Email,
                    'Url' =>$Url,
                    'Phone' =>$Phone,
                    'Address' =>$Address
                    
                );
        
            $sql_query=$this->db->where('SupplierId', $usid)
                        ->update($this->table, $data); 

            if($sql_query)
            {
                $this->session->set_flashdata('success', 'Record updated successful');
                redirect('admin/supplier');
            }
            else
            {
                $this->session->set_flashdata('error', 'Somthing went worng. Error!!');
                redirect('admin/manageitems');
            }
    
    }
    public function getsupplierdetail($uid)
    {
        $ret=$this->db->select
        (
        'SupplierId,Name,Email,Url,Phone,Address'
        )
        ->where('SupplierId',$uid)
        ->get($this->table);
        return $ret->row();    
    }
    
    public function getSupplierId($id) 
    {
        $this->db->where('SupplierId', $id);
        $supplier = $this->db->get($this->table)->row_array();
        return $supplier;
    }
   

    public function deleteSupplier($id) 
		{
			$this->db->where('SupplierId',$id);
			$this->db->delete(($this->table));
        }

}