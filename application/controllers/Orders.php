<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Orders extends CI_Controller {
   
    function __construct(){
    parent::__construct();

        $user = $this->user_model->getUsers($_SESSION['usersId']);
            if(empty($user)){
                $this->session->set_flashdata('msg', 'Your session has been expired');
                redirect(base_url().'login/');
            }
        $this->load->model('Order_model');
    }

    public function index(){
        $user = $this->session->userdata('usersId');
        $order = $this->order_model->getUserOrder($user['usersId']);
        $data['orders'] = $order;
        $this->load->view('front/orders', $data);
    }

}