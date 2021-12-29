<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class Category_model extends CI_Model {
  
    private $table = "brand";

    public function createCategory($cat){
        $this->db->insert($this->table, $cat);
    }

    public function getCategory(){
        $cats_result = $this->db->get($this->table)->result_array();
        return $cats_result;
    }

    public function getCat($id){
        $this->db->where('brandID', $id);
        $cat = $this->db->get($this->table)->row_array();
        return $cat;
    }

    public function countCategory(){
        $query = $this->db->get($this->table);
        return $query->num_rows();
    }

    public function update($id, $cat){
        $this->db->where('brandID', $id);
        $this->db->update($this->table, $cat);
    }

    public function delete($id){
        $this->db->where('brandID', $id);
        $this->db->delete($this->table);
    }

}
    