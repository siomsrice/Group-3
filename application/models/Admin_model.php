<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class Admin_model extends CI_Model {

    public function getByUsername($username){
        $this->db->where('username', $username);
        $admin = $this->db->get('admin')->row_array();
        return $admin;
    }

    public function getAllOrders(){
        $this->db->order_by('OrderId','DESC');
        $this->db->select('OrderId, itemName, quantity, itemPrice, status, date, usersName, address');
        $this->db->from('order');
        $this->db->join('users', 'users.usersId = order.usersId');
        $result = $this->db->get()->result_array();
        return $result;
    }
 
    public function getSupReport(){
        $this->db->group_by('u.supplierId');
        $this->db->select('u.supplierId, name, itemPrice, successDate');
        $this->db->select_sum('price');
        $this->db->from('order as u');
        $this->db->join('supplier as r', 'r.supplierId = u.supplierId');
        $result = $this->db->get()->result;
        return $result;
    }

    public function itemReport(){
        $query = $this->db->query('SELECT itemId, itemName,
        SUM(quantity) AS qty
        FROM orders
        GROUP BY itemId
        ORDER BY SUM(quantity) DESC');
        return $query->result();
    }

    public function mostOrderedItem(){
        $sql = 'SELECT u.supplierId, r.name, u.itemPrice, u.itemName,
        MAX(u.quantity) AS quantity,
        SUM(itemPrice) AS total
        FROM order AS u
        INNER JOIN supplier as r
        ON u.supplierId = r.supplierId
        GROUP BY u.supplierId';

        $query = $this->db->query($sql);
        return $query->result();
    }
}