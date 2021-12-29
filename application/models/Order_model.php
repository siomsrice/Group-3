<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class Order_model extends CI_Model {
    
    private $table = "order";

    public function __construct(){
        parent::__construct();
    }

    public function getOrders() {
        $this->db->order_by('orderId','DESC');
        $result = $this->db->get($this->table)->result_array();
        return $result;
    }

    public function getOrder($id){
        $this->db->where('orderId', $id);
        $result = $this->db->get($this->table)->row_array();
        return $result;
    }

    public function getUserOrder($id){
        $this->db->where('usersId', $id);
        $this->db->order_by('orderId', 'DESC');
        $result = $this->db->get($this->table)->result_array();
        return $result;
    }

    public function update($id, $status){
        $this->db->where('orderId', $id);
        $this->db->where($this->table);
    }

    public function deleteOrder($id){
        $this->db->insert_batch($this->table, $id);
        $this->db->delete($this->table);
    }

    public function insertOrder($orderData){
        $this->db->insert_batch($this->table, $orderData);
        return $this->db->insert_id();
    }

    public function countOrder(){
        $query = $this->db->get($this->table);
        return $query->num_rows();
    }

    public function countPendingOrders(){
        $this->db->where('status', 'closed');
        $query = $this->db->get($this->table);
        return $query->num_rows();
    }

    public function countDeliveredOrders(){
        $this->db->where('status', 'closed');
        $query = $this->db->get($this->table);
        return $query->num_rows();
    }

    public function countRejectOrders(){
        $this->db->where('status', 'rejected');
        $query = $this->db->get($this->table);
        return $query->num_rows();
    }

    public function getAllOrders($id){
        $this->db->order_by('OrderId','DESC');
        $this->db->select('OrderId, itemId, quantity, price, status, orderDate, usersUid, address');
        $this->db->from($this->table);
        $this->db->join('users', 'users.usersId = orders.usersId');
        $this->db->where('OrderId', $id);
        $result = $this->db->get()->row_array();
        return $result;
    }
    


}