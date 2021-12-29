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

    public function itemReport() {
        $query = $this->db->query('SELECT itemId, itemName, 
        SUM(quantity) AS qty
        FROM order
        GROUP BY itemId
        ORDER BY SUM(quantity) DESC');
        return $query->result();
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

/*CODE TESTING

public function login($username, $password){
        $this->db->where('username', $username)
                ->where('password', md5($password))
                ->or_where('email', $password)
                ->where('password', md5($password));

        $query = $this->db->get($this->table);
        //echo $this->db->last_query(). '<br>';

        $return = $query->result_array();

        if(count($return) > 0){
            return $return;
        }
        echo "UserNoLongerExists";
        return false;
    }

    public function getAdmin($adminId = null){
    
        if(isset($adminId) && $adminId != null){
                $this->db->where('adminId', $adminId);
        }
            
        $query = $this->db->get($this->table);
    
        #Test if get is working
        //echo $this->db->last_query(). '<br>'; 
    
        return $query->result_array();

    }
    

    public function getByUsername($username){
        $this->db->where('username', $username);
        $admin = $this->db->get($this->table)->row_array();
        return $admin;
    }

    public function getAllOrders(){
        $this->db->order_by('OrderId','DESC');
        $this->db->select('OrderId, itemName, quantity, price, status, date, usersName, address');
        $this->db->from('order');
        $this->db->join('users', 'users.usersId = order.usersId');
        //pass id from users to order
        $result = $this->db->get()->result_array();
        return $result;
    }
 
    public function getSupReport(){
        $this->db->group_by('o.supplierId');
        $this->db->select('o.supplierId, Name, price, successDate');
        $this->db->select_sum('price');
        //Para d malito
        $this->db->from('order as o');
        $this->db->join('supplier as s', 's.supplierId = o.supplierId');
        $result = $this->db->get()->result();
        return $result;
    }

    public function itemReport(){
        $query = $this->db->query('SELECT itemId, itemName,
        SUM(quantity) AS qty
        FROM order
        GROUP BY itemId
        ORDER BY SUM(quantity) DESC');
        return $query->result();
    }

    public function mostOrderedItem(){
        $sql = 'SELECT o.supplierId, s.Name, o.price, o.itemName,
        MAX(o.quantity) AS quantity,
        SUM(itemPrice) AS total
        FROM order AS o
        INNER JOIN supplier as s
        ON o.supplierId = s.supplierId
        GROUP BY o.supplierId';

        //set order as o para d na kaylngan baguhin lahat

        $query = $this->db->query($sql);
        return $query->result();
    }

COMMENT END*/