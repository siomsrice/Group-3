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
        $this->db->join('brandCategory', 'supplier.brandID = brandCategory.brandID');
        $result = $this->db->get()->result_array();
        return $result;
    }

}