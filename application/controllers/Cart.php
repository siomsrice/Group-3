<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class Cart extends CI_Controller {


    public function index(){
        $this->load->library('cart');
        $this->load->model('Item_model');
        
        $data['cartItems'] = $this->cart->contents();
        $this->load->view('front/cart', $data);
    }

    public function updateCartItemQty(){
        $this->load->library('cart');
        $this->load->model('Item_model');
        $update = 0;

        #Get cart item info
        $rowid = $this->input->get('rowid');
        $qty = $this->input->get('qty');

        if(!empty($rowid) && !empty($qty)){
            $data = array (
                'rowid' => $rowid,
                'qty' => $qty
            );

            $update = $this->cart->update($data);
        }
        echo $update ? 'ok':'error';
    }

    public function removeItem($id){
        $this->load->library('cart');
        $this->load->model('Item_model');

        $remove = $this->cart->remove($id);

        redirect(base_url().'cart');
    }


}