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
        #$this->load->view('templates/header');
        $this->load->view('users/addUser');
        #$this->load->view('templates/footer');
    }

    public function login(){
        $data = array();
        #Print Data
        $data = $this->input->post();

        if(isset($data) && $data != null){
            $this->load->model('user_model');

            $return = $this->user_model->login($data['usersUid'], $data['usersPwd']);
            if(is_bool($return)){
                echo "Login error";
            } else{
                #print_r($return);
                $_SESSION['usersId'] = $return[0]['usersId'];
				$_SESSION['usersUid'] = $return[0]['usersUid'];
				redirect('users/viewUser');
            }

        }

        $this->load->view('users/login');
    }

    public function viewUser(){
        #Connection to BackEnd
        $this->load->model('user_model');
        $user = $this->user_model->getUsers($_SESSION['usersId']);
        
        $output['user'] = $user[0];

        $data = array();
        $data = $this->input->post();

        if(isset($data) && $data != null){
            $this->load->model('user_model');
            $this->user_model->updateUser($data);
        }
        #Connection to FrontEnd
        $this->load->view('users/viewUser', $output);
    }

    public function updateUser(){
        #Connection to BackEnd
        $this->load->model('user_model');
        $user = $this->user_model->getUsers($_SESSION['usersId']);

        $output['user'] = $user[0];

        $data = array();
        $data = $this->input->post();

        if(isset($data) && $data != null){
            $this->load->model('user_model');
            $this->user_model->updateUser($data);
        }
        #Connection to FrontEnd
        $this->load->view('users/updateUser', $output);
    }

    public function deleteUser(){
        $data = array();
        $data = $this->input->post();
        if(isset($data) && $data != null){
            $this->load->model('user_model');
            $return = $this->user_model->deleteUser($data['pwdRepeat'], $data['usersId']);

            if($return == true){
                session_unset('usersId');
                session_unset('usersUid');
                session_destroy();
                redirect(base_url());
            }
            else{
                echo "WrongPwd";
            }
        }
        $this->load->view('users/deleteUser');
    }

    public function logout(){
        session_unset('usersId');
		session_unset('usersUid');
		session_destroy();
		redirect(base_url());
    }

    public function profile(){
            #Connection to Front End
            $this->load->view('users/userProfile');
    }   

}

   