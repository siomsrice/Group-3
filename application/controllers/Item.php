<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class Item extends CI_Controller 
{

        function __construct()
        {
        parent::__construct();
            //Load cart library
            $this->load->library('cart');
        }

        public function list($id)
        {
            $this->load->model('Item_model');
            $items = $this->Item_model->getItems($id);

            $this->load->model('Supplier_model');
            $sup = $this->Supplier_model->getSupplier($id);

            $data['items'] = $items;
            $data['sup'] = $sup;

            $this->load->view('front/item', $data);
        }

        public function addToCart($id)
        {
            $this->load->model('Item_model');
            $items = $this->Item_model->getSingleItem($id);
            $data = array (
                'id'    => $items['itemId'],
                's_id'  => $items['supplierId'],
                'qty'   =>1,
                'price' => $items['price'],
                'name' => $items['itemName'],
                'file_name' => $items['file_name']
            );

            //file_name = images
            $this->cart->insert($data);
            redirect(base_url().'cart/index');
        }

}