<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class Item_model extends CI_Model {

    private $table = "items";

    public function create($formArray){
        $this->db->insert($this->table, $formArray);
    }

    public function getItem(){
        $result = $this->db->get($this->table)->result_array();
        return $result;
    }

    public function getSingleItem($id){
        $this->db->where('ItemId', $id);
        $item = $this->db->get($this->table)->row_array();
        return $item;
    }

    public function update($id, $formArray){
        $this->db->where('ItemId', $id);
        $this->db->update($this->table, $formArray);
    }

    public function delete($id){
        $this->db->where('ItemId', $id);
        $this->db->delete($this->table);
    }

    public function countItem(){
        $query = $this->db->get($this->table);
        return $query->num_rows();
    }

    public function getItems($id){
        $this->db->where('supplierId', $id);
        $item = $this->db->get($this->table)->result_array();
        return $item;
    }
}