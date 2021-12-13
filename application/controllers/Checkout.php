<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class Checkout extends CI_Controller {

    function __construct() {
        parent::__construct();

        $user = $this->user_model->getUsers($_SESSION['usersId']);
        if(empty($user)) {
            $this->session->set_flashdata('msg', 'Your session has been expired');
            redirect(base_url().'login/');
        }

        $this->load->helper('date');
        $this->load->library('form_validation');
        $this->load->library('cart');
        $this->load->model('Order_model');
        $this->load->model('User_model');
        $this->controller = 'checkout';
    }

    public function index(){
        $user = $this->user_model->getUsers($_SESSION['usersId']);
        $usersId = $user['user_id'];
        $user = $this->User_model->getUser('usersId');

        if($this->cart->total_items() <= 0){
            redirect(base_url().'Supplier');
        }

        $submit = $this->input->post('placeholder');
        $this->form_validation->set_error_delimiters('<p class="invalid-feedback">, </p>');
        $this->form_validation->set_rules('address', 'Address', 'trim|required');

        if($this->form_validation->run() == true){
            $formArray['address'] = $this->input->post('address');

            $this->User_model->update($usersId, $formArray);
            $order = $this->placeOrder($usersId);

            if($order){
                $this->session->set_flashdata('success_msg', 'Thank you! Order has been placed successfully!');
                redirect(base_url().'orders');
            } else{
                $data['error_msg'] = "Order submission failed, please try again.";
            }
        }

        $data['user'] = $user;
        $data['cartItems'] = $this->cart->contents();
        $this->load->view('front/checkout', $data);
    }

    public function placeOrder(){
        
    }
}