<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class Category extends CI_Controller {
    
    public function __construct(){
        parent::__construct();
        $admin = $this->session->userdata('admin');
        if(empty($admin)) {
            $this->session->set_flashdata('msg', 'Your session has been expired');
            redirect(base_url().'admin/login/index');
        }
    }

    public function index(){
        $this->load->model('Category_model');
        $cats = $this->Category_model->getCategory();
        $cats_data['cats'] = $cats;
        $this->load->view('admin/category/list', $cats_data);
    }
}