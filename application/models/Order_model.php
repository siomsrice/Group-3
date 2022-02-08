<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class Order_model extends CI_Model {
    
    private $table = "order";
    private $tabl = "users";

    public function __construct(){
        parent::__construct();
    }

    public function getAllOrders(){
        $this->db->order_by('OrderId', 'DESC');
        $this->db->select('*');
        $this->db->from('order');
        $this->db->join('users', 'order.usersId = users.usersId');
        $result = $this->db->get()->result_array();
        return $result;
    }

    public function getOrdr($OrderId = null){
        if(isset($OrderId) && $OrderId != null){
            $this->db->where('OrderId', $OrderId);
        }
        
        $query = $this->db->get($this->table);
        $this->db->select('OrderId, itemName, quantity, price, status, orderDate, usersUid, address');
        $this->db->from($this->table);
        $this->db->join($this->tabl, 'users.usersId = order.usersId');
        return $query->result_array();
    }

    public function getOrders() {
        $this->db->order_by('OrderId','DESC');
        $result = $this->db->get($this->table)->result_array();
        return $result;
    }

    public function getOrder($id){
        $this->db->where('OrderId', $id);
        $result = $this->db->get($this->table)->row_array();
        return $result;
    }

    public function getUserOrder($id){
        $this->db->where('usersId', $id);
        $this->db->order_by('OrderId', 'DESC');
        $result = $this->db->get($this->table)->result_array();
        return $result;
    }

    public function update($id, $status){
        $this->db->where('OrderId', $id);
        $this->db->where($this->table, $status);
    }

    public function deleteOrder($id){
        $this->db->where('OrderId', $id);
        $this->db->delete($this->table);
    }
    
    public function insertOrder($orderData){
        $this->db->insert_batch($this->table, $orderData);
        return $this->db->insert_id();
    }

    public function countOrder(){
        $query = $this->db->get('order');
        return $query->num_rows();
    }

    public function countPendingOrders(){
        $this->db->where('status', 'in process');
        $query = $this->db->get($this->table);
        return $query->num_rows();
    }

    public function countDeliveredOrders(){
        $this->db->where('status', 'closed/delivered');
        $query = $this->db->get($this->table);
        return $query->num_rows();
    }

    public function countRejectOrders(){
        $this->db->where('status', 'rejected');
        $query = $this->db->get($this->table);
        return $query->num_rows();
    }
    
   
    public function getOrderByUser($id) {
        $this->db->select('*');
        //$this->db->select('OrderId, supplierId, itemId, users.usersId, itemName, quantity, price, status, firstName, lastName, order.orderDate, users.usersEmail, users.phone, successDate, usersUid, address');
        $this->db->from('order');
        $this->db->join('users', 'users.usersId = order.usersId');
        $this->db->where('OrderId', $id);
        $result = $this->db->get()->row_array();
        return $result;
    }

    public function getorderdetail($uid) {
        $ret=$this->db->select
        (
        'OrderId,usersId,itemName, supplierId, itemId, quantity, price, status, successDate'
        )
        ->where('OrderId',$uid)
        ->get($this->table);
        return $ret->row();    
    }
  
    public function updateorderdetails(
        $usid,$status
        )
    {
        $data=array(
                    
                  
                    'status'=>$status
                    
                );
        
            $sql_query=$this->db->where('orderId', $usid)
                        ->update($this->table, $data); 

            if($sql_query)
            {
                $this->session->set_flashdata('success', 'Record updated successful');
                redirect('admin/orders');
            }
            else
            {
                $this->session->set_flashdata('error', 'Somthing went worng. Error!!');
                redirect('admin/dashboard');
            }
    
    }
    public function getRows($id = '')
    { 
       $this->db->select('status,statusId'); 
        $this->db->from('status'); 
        if($id)
        { 
            $this->db->where('statusId',$id); 
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

}