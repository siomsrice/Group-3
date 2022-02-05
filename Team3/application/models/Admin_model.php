<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class Admin_model extends CI_Model {

    private $table = "admin";

    public function getByUsername($username) {
        $this->db->where('username', $username);
        $admin = $this->db->get($this->table)->row_array();
        return $admin;
    }
    
    public function getAllOrders() {
        $this->db->order_by('orderId','DESC');
        $this->db->select('orderId, itemName, quantity, price, status, orderDate, usersName, address');
        $this->db->from('order');
        $this->db->join('users', 'users.usersId = order.usersId');
        $result = $this->db->get()->result_array();
        return $result;
    }

    public function getSupReport() {
        $this->db->group_by('u.supplierId');
        $this->db->select('u.supplierId, Name, price, successDate');
        $this->db->select_sum('price');
        $this->db->from('order as u');
        $this->db->join('supplier as r', 'r.supplierId = u.supplierId');
        $result = $this->db->get()->result();
        return $result;
    }

    public function mostOrderItem() {
        $sql = 'SELECT u.supplierId, r.Name, u.price, u.itemName, 
        MAX(u.quantity) AS quantity, 
        SUM(price) AS total
        FROM order AS u
        INNER JOIN supplier as r
        ON u.supplierId = r.supplierId
        GROUP BY u.supplierId';

        $query = $this->db->query($sql);
        return $query->result();
    }
}