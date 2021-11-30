<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

	public function index(){
		$this->load->view('welcome_message');
	}

    public function register(){
        $data = array();
        #Print Data
        $data = $this->input->post();

        if(isset($data) && $data != null){
            $this->load->model('user_model');
            $this->user_model->createUser($data);
        }

        $this->load->view('users/addUser');
    }

    public function login(){
        $data = array();
        #Print Data
        $data = $this->input->post();

        if(isset($data) && $data != null){
            $this->load->model('user_model');

            $return = $this->user_model->login($data['usersU '], $data['usersPwd']);
            if(is_bool($return)){
                echo "login error";
            } else{
                print_r($return);
            }

        }

        $this->load->view('users/login');
    }

    public function viewUser($usersid = null){
        #Connection to BackEnd
        $this->load->model('user_model');

        $user = $this->user_model->getUsers($usersid);
        
        $output['user'] = $user[0];

        #Connection to Front End
        $this->load->view('users/viewUser', $output);
    }

    public function updateUser($usersid = null){
        $data = array();
        #Print Data
        $data = $this->input->post();

        #Connection to BackEnd
        $this->load->model('user_model');

        $user = $this->user_model->getUsers($usersid);
         
        $output['user'] = $user[0];
 
        #Connection to Front End
        $this->load->view('users/updateUser', $output);

        if(isset($data) && $data != null){
            $this->load->model('user_model');
            
            $this->user_model->updateUser($data);
        }
    }


}