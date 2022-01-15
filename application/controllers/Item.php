<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class Item extends CI_Controller {

        function __construct(){
        parent::__construct();
            #Load cart library
            $this->load->library('cart');
        }

        public function list($id){
            $this->load->model('Item_model');
            $item = $this->Item_model->getItems($id);

            $this->load->model('Supplier_model');
            $sup = $this->Supplier_model->getSupplier($id);

            $data['items'] = $item;
            $data['res'] = $sup;

            $this->load->view('front/login', $data);
        }

        public function addToCart($id){
            $this->load->model('Item_model');
            $items = $this->Item_model->getSingleItem($id);
            $data = array (
                'id'    => $items['ItemId'],
                'r_id'  => $items['supplierId'],
                'qty'   =>1,
                'price' => $items['itemPrice'],
                'name' => $items['itemName'],
                'image' => $items['itemImg'],
                'stock' => $items['itemStock'],
            );
            $this->cart->insert($data);
            redirect(base_url().'cart/index');
        }

}