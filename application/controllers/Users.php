<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller 
{
    public function register() {
        $data = array();
       
        $data = $this->input->post();

        if(isset($data) && $data != null)
        {
            $this->load->model('user_model');
            $this->user_model->createUser($data);
        }
        $this->load->view('front/addUser');
    }

    public function login() {
        $data = array();
        
        $data = $this->input->post();

        if(isset($data) && $data != null)
        {
            $this->load->model('user_model');

            $return = $this->user_model->login($data['usersUid'], $data['usersPwd']);
            if(is_bool($return))
            {
                $this->session->set_flashdata('error', 'Login Error');
            } else
            {
                $_SESSION['usersId'] = $return[0]['usersId'];
				$_SESSION['usersUid'] = $return[0]['usersUid'];
                redirect(base_url().'users/viewUser');
            }

        }
        $this->load->view('front/login');
    }

    public function viewUser() {
        $this->load->model('user_model');
        $user = $this->user_model->getUsers($_SESSION['usersId']);
        
        $output['user'] = $user[0];

        $data = array();
        $data = $this->input->post();

        if(isset($data) && $data != null)
        {
            $this->load->model('user_model');
            $this->user_model->updateUser($data);
        }
        $this->load->view('front/viewUser', $output);
    }

    public function updateUser() {
        $this->load->model('user_model');
        $user = $this->user_model->getUsers($_SESSION['usersId']);

        $output['user'] = $user[0];

        $data = array();
        $data = $this->input->post();

        if(isset($data) && $data != null)
        {
            $this->load->model('user_model');
            $this->user_model->updateUser($data);
        }
        $this->load->view('front/updateUser', $output);
    }

    public function deleteUser() {
        $this->load->model('user_model');
        $user = $this->user_model->getUsers($_SESSION['usersId']);
  
        $output['user'] = $user[0];

        $data = array();
        $data = $this->input->post();
        if(isset($data) && $data != null)
        {
            $this->load->model('user_model');
            $return = $this->user_model->deleteUser($data['pwdRepeat'], $data['usersId']);

            if($return == true)
            {
                session_unset('usersId');
                session_unset('usersUid');
                session_destroy();
                redirect(base_url());
            }
            else
            {
                $this->session->set_flashdata('error', 'Wrong Password');
            }
        }
        $this->load->view('front/deleteUser');
    }

    public function logout() {
		session_destroy();
		redirect('/');
    }

    public function profile() {
            $this->load->view('front/userProfile');
    }   

    
}

   