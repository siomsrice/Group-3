<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Orders extends CI_Controller 
{
    public function index() 
    {
        $this->load->model('user_model');
        $this->load->model('Order_model');
        $this->load->model('Item_model');

        $data = array();
       
        $data = $this->input->post();
        $user = $this->user_model->getUsers($_SESSION['usersId']);

        $order = $this->Order_model->getUserOrder($_SESSION['usersId']);

        $items = $this->Item_model->getItem();
        
        $output['user'] = $user[0];
        $data['items'] = $items;
        $data['orders'] = $order;
        $this->load->view('front/orders', $data);
    }

    public function deleteorder($id) {
        $this->load->model('order_model');
        $items = $this->order_model->getOrder($id);

        if(!empty($items)) 
        {
           $this->order_model->deleteOrder($id);
           $this->session->set_flashdata('itemdel_success', 'Item Deleted successfully');
           redirect(base_url().'orders');
            
        }
        $this->session->set_flashdata('error', 'Item not found');
        redirect(base_url().'users/viewUser'); 
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