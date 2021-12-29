<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test_model extends CI_Model {

    private $table = "admin";

    public function __construct(){
        parent::__construct();
    }

    public function checkUidExists($username){
        if(isset($username) && $username != null){
            $this->db->where('username', $username);
        }

        $query = $this->db->get($this->table);
        $return = $query->result_array();

        if(count($return) > 0)
            return true;

        return false;

        /*$this->db->select('*')
                ->from($this->table)
                ->where('usersUid', $usersUid);
        
        $this->db->get();*/

    }

    public function checkEmailExists($email){
        if(isset($email) && $email != null){
            $this->db->where('email', $email);
        }

        $query = $this->db->get($this->table);
        $return = $query->result_array();

        if(count($return) > 0){
            return true;
        }

        return false;

    }



    public function login($username, $password){
        $this->db->where('username', $username)
                ->where('password', $password)
                ->or_where('email', $username)
                ->where('password', $password);

        $query = $this->db->get($this->table);
        echo $this->db->last_query(). '<br>';

        $return = $query->result_array();

        if(count($return) > 0){
            return $return;
        }
        echo "UserNoLongerExists";
        return false;
    }

    public function getUsers($adminId = null){
        if(isset($adminId) && $adminId != null){
            $this->db->where('adminId', $adminId);
        }
        
        $query = $this->db->get($this->table);

        #Test if get is working
        //echo $this->db->last_query(). '<br>'; 

        return $query->result_array();
    }
}