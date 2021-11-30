<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

    private $table = "users";

    public function __construct(){
        parent::__construct();
    }

    public function createUser($data){
        if($this->checkUidExists($data['usersUid'])){
            #Set status data to active
            $data['usersPwd'] = md5($data['usersPwd']);
            $data['status'] = "Active";
            
            #Insert Data to DB
            $this->db->insert($this->table, $data);
        }

        return;
    }

    public function checkUidExists(){
        if(isset($usersUid) && $usersUid != null){
            $this->db->where('usersUid', $usersUid);
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

    public function login($usersUid, $usersPwd){
        $this->db->where('usersUid', $usersUid)
                ->where('usersPwd', md5($usersPwd));

        $query = $this->db->get($this->table);
        //echo $this->db->last_query(). '<br>';

        $return = $query->result_array();

        if(count($return) > 0)
            return $return;

        return false;
    }

    public function getUsers($usersid = null){
        if(isset($usersid) && $usersid != null)
            $this->db->where('usersid', $usersid);

        
        $query = $this->db->get($this->table);

        #Test if get is working
        //echo $this->db->last_query(). '<br>'; 

        return $query->result_array();
    }

    public function updateUser($data){
        $this->db->where('usersId', $data['usersId']);
        unset($data['usersId']);

        $this->db->update($this->table, $data);

        echo $this->db->last_query();
        exit;
    }

}