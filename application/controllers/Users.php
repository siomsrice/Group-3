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
            $userdata = $this->user_model->createUser($data);
            $user = $this->user_model->getUsers($userdata);
            $_SESSION['user'] = $user[0];
            if (is_int($userdata)) {
                redirect('users/mail/' . $userdata);
            } 
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


    public function mail($id=null){
        $email['protocol'] = 'smtp';
        $email['smtp_host'] = 'smtp.gmail.com';
        $email['smtp_user'] = "jaimehanzs@gmail.com";
        $email['smtp_pass'] = 'tljukbvvxgpbluzd';
        $email['smtp_port'] = '587';
        $email['smtp_crypto'] = 'tls';

        $this->load->library('email', $email);

        $this->email->set_newline("\r\n");

        $this->load->model('user_model');
        $user = $this->user_model->getUsers($id);

        $email = $user[0]['usersEmail'];

        $this->email->set_mailtype('html');
        $this->email->subject('Account Verification');
        $this->email->to($email);
        $this->email->from('jaimehanzs@gmail.com');
        $this->email->message('Your account has been successfully created! Please <strong> <a href="' . base_url() . 'users/login/' . $email . '/' . '">click here</a></strong> to activate your account');
        $this->email->send();

        redirect('verify');
    }

    public function ForgotPassword($id) {
        $email['protocol'] = 'smtp';
        $email['smtp_host'] = 'smtp.gmail.com';
        $email['smtp_user'] = "jaimehanzs@gmail.com";
        $email['smtp_pass'] = 'tljukbvvxgpbluzd';
        $email['smtp_port'] = '587';
        $email['smtp_crypto'] = 'tls';

        $this->load->library('email', $email);

        $this->email->set_newline("\r\n");

        $this->load->model('user_model');
        $user = $this->user_model->getUsers($id);

        //$pwd = $this->user_model->

        $email = $user[0]['usersPwd'];

        $this->email->set_mailtype('html');
        $this->email->subject('Account Verification');
        $this->email->to($email);
        $this->email->from('jaimehanzs@gmail.com');
        $this->email->message('Please edit it as soon as possible. This is your account password: ' );
        $this->email->send();

        redirect('home/verify');
    }

	
}

   