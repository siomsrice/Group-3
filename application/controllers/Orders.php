<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Orders extends CI_Controller {
 
    public function index() {
        $this->load->model('Order_model');
        $user = $this->session->userdata('user');
        $order = $this->Order_model->getUserOrder($user['usersId']);
        $data['orders'] = $order;
        $this->load->view('front/order', $data);
    }

    public function deleteOrder($id) {
        $this->load->model('Order_model');
        $order = $this->Order_model->getOrder($id);

        if(empty($order)) {
            $this->session->set_flashdata('error_msg', 'Order not found');
            redirect(base_url().'order');
        }

        $this->Order_model->deleteOrder($id);

        $this->session->set_flashdata('success_msg', 'Your order cancelled successfully');
        redirect(base_url().'order');

    }

    public function invoice($id) {
        $this->load->model('Order_model');
        $this->load->model('Supplier_model');
        $this->load->model('Item_model');

        $order = $this->Order_model->getOrderByUser($id);
        $data['order'] = $order;
        $usersId = $order['usersId'];
        $supplierId = $order['supplierId'];
        $itemId = $order['itemId'];
        $sup = $this->Supplier_model->getStore($supplierId);
        $data['sup'] = $sup;   
        $item = $this->Item_model->getSingleItem($itemId);
        $data['item'] = $item;
    
        $user = $this->session->userdata('user');
        if($usersId == $user['usersId']) {
            if($order['status'] == 'closed') {
                $this->load->view('front/invoice', $data);
            } else {
                $this->session->set_flashdata('error_msg', 'your order is not yet complete');
                redirect(base_url().'orders');
            }
        } else {
            $this->session->set_flashdata('error_msg', 'you are accessing wrong order data');
            redirect(base_url().'orders');
        }        
    }

}