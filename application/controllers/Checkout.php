<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class Checkout extends CI_Controller {

    public function index() {
        $this->load->helper('date');
        $this->load->library('form_validation');
        $this->load->library('cart');
        $this->load->model('order_model');
        $this->load->model('user_model');
        $this->controller = 'checkout';

        $loggedUser = $this->session->userdata('user');
        $usersId = $loggedUser['user_id'];
        $user = $this->user_model->getUser($usersId);


        /*$user = $this->user_model->getUsers($_SESSION['usersId']);
        
        $output['user'] = $user[0];

        $data = array();
        $data = $this->input->post();*/

        if(isset($data) && $data != null){
            $this->load->model('user_model');
            $this->user_model->updateUser($data);
        }

            if($this->cart->total_items() <= 0) {
                redirect(base_url().'home');
            }
                $submit = $this->input->post('placeholder');

                if($this->form_validation->run() == true) { 
                    $formArray['address'] = $this->input->post('address');
                    
                    //insert data into customer table and get last inserted custid
                    $this->User_model->update($usersId,$formArray);
                    $order = $this->placeOrder($usersId);
                    if($order) {
                        $this->session->set_flashdata('success_msg', 'Thank You! Your order has been placed successfully!');
                        redirect(base_url().'orders');
                    } else {
                        $data['error_msg'] = "Order submission failed, please try again.";
                    }
                }

        $data['user'] = $user;

        $data['cartItems'] = $this->cart->contents();
        $this->load->view('front/checkout',$data);

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
        $this->load->view('front/updateUser', $output);
    }


    public function placeOrder($usersId) {  
        $cartItems = $this->cart->contents();
        $i = 0;
        foreach($cartItems as $item) {
            $orderData[$i]['usersId'] = $usersId; 
            $orderData[$i]['itemId'] = $item['id'];
            $orderData[$i]['supplierId'] = $item['r_id'];
            $orderData[$i]['itemName'] = $item['name'];
            $orderData[$i]['quantity'] = $item['qty'];
            $orderData[$i]['price'] = $item['subtotal'];
            $orderData[$i]['orderDate'] = date('Y-m-d H:i:s', now());
            $orderData[$i]['successDate'] = date('Y-m-d H:i:s', now());
            $i++;
        }

        if(!empty($orderData)) {                
        $insertOrder = $this->order_model->insertOrder($orderData);
            if($insertOrder) {
                $this->cart->destroy();
                //return order id
                return $insertOrder;
            }
        }   
    return false;
    }
}