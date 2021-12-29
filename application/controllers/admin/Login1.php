<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class Login extends CI_Controller {

    public function index(){
        $this->load->view('admin/login');
    }

    public function authenticate(){
        $this->load->library('form_validation');
        $this->load->model('Admin_model');
        
        $this->form_validation->set_rules('username','Username', 'trim|required');
        $this->form_validation->set_rules('password','Password', 'trim|required');
    
         if($this->form_validation->run() == true) {
             $username = $this->input->post('username');
             $admin = $this->Admin_model->getByUsername($username);
             if(!empty($admin)) {
                $password = $this->input->post('password');
                if( password_verify($password, $admin['password']) == true) {
    
                    $adminArray['adminId'] = $admin['adminId'];
                    $adminArray['username'] = $admin['username'];
                    $this->session->set_userdata('admin', $adminArray);
                    redirect(base_url().'admin/home');
                } else {
                    $this->session->set_flashdata('msg', 'Either username or password is incorrect');
                    redirect(base_url().'admin/login/index');
                }
             } else {
                $this->session->set_flashdata('msg', 'Account does not exist.');
                redirect(base_url().'admin/login/index');
             }
             //success
         } else {
             //Error
            $this->load->view('admin/login');
            echo ("this error");
         }
    }

    public function signin(){
        $data = array();
        #Print Data
        $data = $this->input->post();

        if(isset($data) && $data != null){
            $this->load->model('admin_model');

            $return = $this->admin_model->login($data['username'], $data['password']);
            if(is_bool($return)){
                echo "Login error";
            } else{
                #print_r($return);
                $_SESSION['adminId'] = $return[0]['adminId'];
				$_SESSION['username'] = $return[0]['username'];
				#redirect('front/viewUser');
                #redirect('index.php/users/viewUser');
                redirect(base_url().'admin/dashboard');
            }

        }

        $this->load->view('admin/login');
    }

    public function logout(){
        session_unset('adminId');
		session_unset('username');
		session_destroy();
        redirect(base_url().'admin/login/index');
    }
}

/* CODE TESTING PURPOSES

public function authenticate(){
    $this->load->library('form_validation');
    $this->load->model('Admin_model');
    
    $this->form_validation->set_rules('username','Username', 'trim|required');
    $this->form_validation->set_rules('password','Password', 'trim|required');

     if($this->form_validation->run() == true) {
         $username = $this->input->post('username');
         $admin = $this->Admin_model->getByUsername($username);
         if(!empty($admin)) {
            $password = $this->input->post('password');
            if( password_verify($password, $admin['password']) == true) {

                $adminArray['adminId'] = $admin['adminId'];
                $adminArray['username'] = $admin['username'];
                $this->session->set_userdata('admin', $adminArray);
                redirect(base_url().'admin/home');
            } else {
                $this->session->set_flashdata('msg', 'Either username or password is incorrect');
                echo "Error1";
                redirect(base_url().'admin/login/index');
            }
         } else {
            $this->session->set_flashdata('msg', 'Either username or password is incorrect');
            echo "Error2";
            redirect(base_url().'admin/login/index');
         }
         //success
     } else {
         //Error
        $this->load->view('admin/login');
     }
}

 public function authenticate(){
        $data = array();
        #Print Data
        $data = $this->input->post();

        if(isset($data) && $data != null){
            $this->load->model('admin_model');

            $return = $this->admin_model->login($data['username'], $data['password']);
            if(is_bool($return)){
                echo "Login error";
            } else{
                print_r($return);
                $_SESSION['adminId'] = $return[0]['adminId'];
				$_SESSION['username'] = $return[0]['username'];
				#redirect('front/viewUser');
                #redirect('index.php/users/viewUser');
                #redirect(base_url().'admin/dashboard');
            }

        }

        $this->load->view('admin/login');
    }

ENDING TAG COMMENT */