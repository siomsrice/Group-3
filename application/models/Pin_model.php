<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pin_Model extends CI_Model {

	private $table = "pin";

    public function addPin($id, $pin){

        $pinnum['pin']=$pin;
        $pinnum['usersId']=$id;

        $this->db->insert($this->table, $pinnum);
        return $this->db->insert_id();
    }

    public function getPin($id=null){
        if(isset($id) && $id != null){
			$this->db->where('pinId', $id);
		}

		$query = $this->db->get($this->table);
		
		return $query->result_array();

    }
}