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

    public function getItemss($itemId = null){
        if(isset($itemId) && $itemId != null){
            $this->db->where('itemId', $itemId);
        }
        
        $query = $this->db->get($this->table);

        //Test if get is working
        //echo $this->db->last_query(). '<br>'; 

        return $query->result_array();
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

    public function addItem($data = array()){ 
        $addItem = $this->db->insert_batch($this->table, $data); 
        return $addItem?true:false; 
    } 

    public function updateitemdetails(
        $usid,$supplierId,$itemName,$itemBrand,$itemType,$itemDesc,$price
        )
    {
        $data=array(
                    
                    'itemName' =>$itemName,
                    'supplierId' =>$supplierId,
                    'itemBrand' =>$itemBrand,
                    'itemType' =>$itemType,
                    'price' =>$price,
                    'itemDesc' =>$itemDesc
                    
                );
        
            $sql_query=$this->db->where('itemId', $usid)
                        ->update($this->table, $data); 

            if($sql_query)
            {
                $this->session->set_flashdata('success', 'Record updated successful');
                redirect('admin/manageitems');
            }
            else
            {
                $this->session->set_flashdata('error', 'Somthing went worng. Error!!');
                redirect('admin/manageitems');
            }
    
    }
    public function getuserdetail($uid)
    {
        $ret=$this->db->select
        (
        'itemId,itemName,itemBrand,itemType,itemDesc,price'
        )
        ->where('itemId',$uid)
        ->get($this->table);
        return $ret->row();    
    }
    
    public function getItemId($id) 
    {
        $this->db->where('itemId', $id);
        $items = $this->db->get($this->table)->row_array();
        return $items;
    }
   

    public function deleteItem($id) 
		{
			$this->db->where('itemId',$id);
			$this->db->delete(($this->table));
        }
}