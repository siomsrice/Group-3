<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class Checkout extends CI_Controller {

    public function index() {
        $this->load->helper('date');
        $this->load->library('cart');
        $this->load->model('order_model');
        $this->load->model('user_model');
        $this->controller = 'checkout';

        $data = array();
        $data = $this->input->post();
        $user = $this->user_model->getUsers($_SESSION['usersId']);
        $output['user'] = $user[0];
            if($this->cart->total_items() <= 0)
            {
                redirect(base_url().'home');
            }
                $submit = $this->input->post('placeholder');
                $formArray['address'] = $this->input->post('address');
                $this->user_model->updateUser($data);
                $order = $this->placeOrder($_SESSION['usersId']);
                if($order) 
                {
                    $this->session->set_flashdata('success_msg', 'Thank You! Your order has been placed successfully!');
                    redirect(base_url().'orders');
                } else 
                {
                    $output['error_msg'] = "Order submission failed, please try again.";
                }
        $output['cartItems'] = $this->cart->contents();
        $this->load->view('front/checkout', $output);
    }

    public function placeOrder($usersId) {  
        $cartItems = $this->cart->contents();
        $i = 0;
        foreach($cartItems as $item) 
        {
            $orderData[$i]['usersId'] = $usersId; 
            $orderData[$i]['itemId'] = $item['id'];
            $orderData[$i]['supplierId'] = $item['s_id'];
            $orderData[$i]['itemName'] = $item['name'];
            $orderData[$i]['quantity'] = $item['qty'];
            $orderData[$i]['price'] = $item['subtotal'];
            $orderData[$i]['orderDate'] = date('Y-m-d H:i:s', now());
            $orderData[$i]['successDate'] = date('Y-m-d H:i:s', now());
            $i++;
        }

        if(!empty($orderData)) 
        {                
        $insertOrder = $this->order_model->insertOrder($orderData);
            if($insertOrder) 
            {
                $this->cart->destroy();
                return $insertOrder;
            }
        }   
    return false;
    }
}