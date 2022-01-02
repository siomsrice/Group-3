<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function index(){
		#$this->load->view('front/login');
	}

    public function login(){
        $data = array();
        #Print Data
        $data = $this->input->post();

        if(isset($data) && $data != null){
            $this->load->model('Test_model');

            $return = $this->Test_model->login($data['username'], $data['password']);
            if(is_bool($return)){
                echo "Login error";
            } else{
                #print_r($return);
                $_SESSION['adminId'] = $return[0]['adminId'];
				$_SESSION['username'] = $return[0]['username'];
				#redirect('front/viewUser');
                #redirect('index.php/users/viewUser');
                redirect(base_url().'admin/dashboard');
            }
        }
        $this->load->view('admin/login');
    }

    public function createUser(){
        $data = array();
        #Print Data
        $data = $this->input->post();

        if(isset($data) && $data != null){
            $this->load->model('user_model');
            $this->user_model->createUser($data);
        }
        #$this->load->view('templates/header');
        $this->load->view('admin/user/addUser');
        #$this->load->view('templates/footer');
    }

    public function dashboard(){
        $data['admin'] = $_SESSION['adminId'];
        if(isset($data['admin']) && $data['admin'] != null){

            $this->load->model('Admin_model');
            $this->load->model('Supplier_model');
            $this->load->model('Item_model');
            $this->load->model('User_model');
            $this->load->model('Order_model');
            $this->load->model('Category_model');

            $data['countSupplier'] = $this->Supplier_model->countSupplier();
            $data['countItem'] = $this->Item_model->countItem();
            $data['countUser'] = $this->User_model->countUser();
            $data['countOrders'] = $this->Order_model->countOrder();
            $data['countCategory'] = $this->Category_model->countCategory();
            $data['countPendingOrders'] = $this->Order_model->countPendingOrders();
            $data['countDeliveredOrders'] = $this->Order_model->countDeliveredOrders();
            $data['countRejectedOrders'] = $this->Order_model->countRejectOrders();

            $supReport = $this->Admin_model->getSupReport();
            $data['supReport'] = $supReport; 
            
            /*
            $itemReport = $this->Admin_model->itemReport();
            $data['itemReport'] = $itemReport; */
            $this->load->view('admin/dashboard', $data);
        }
    }

    public function supReport() {
        $supReport = $this->Admin_model->getSupReport();
        $data['supReport'] = $supReport;
        $this->load->view('admin/reports/sup_report', $data);
    }
    
    public function itemReport() {
        $itemReport = $this->Admin_model->itemReport();
        $data['itemReport'] = $itemReport;
        $this->load->view('admin/reports/item_report', $data);
    }

    public function usersReport() {
        echo "user";
    }

    public function ordersReport() {
        $supReport = $this->Admin_model->getSupReport();
        $data['supReport'] = $supReport;
        $this->load->view('admin/reports/res_report', $data);
    }

    public function logout(){
        session_unset('adminId');
		session_unset('username');
		session_destroy();
		redirect(base_url().'admin/dashboard');
    }


    public function register(){
        $data = array();
        #Print Data
        $data = $this->input->post();

        if(isset($data) && $data != null){
            $this->load->model('user_model');
            $this->user_model->createUser($data);
        }
        #$this->load->view('templates/header');
        $this->load->view('admin/user/addUser');
        #$this->load->view('templates/footer');
    }

    public function viewUser(){
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
        $this->load->view('front/viewUser', $output);
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

    public function deleteUser(){
        $data = array();
        $data = $this->input->post();
        if(isset($data) && $data != null){
            $this->load->model('user_model');
            $return = $this->user_model->deleteUser($data['usersId']);
            if($return == true){
                session_unset('usersId');
                session_unset('usersUid');
                session_destroy();
                redirect(base_url());
            }
            else{
                echo "WrongPwd";
            }
        }
        $this->load->view('admin/deleteUser');
    }

    public function manageuser(){
        $this->load->model('User_model');
        $users = $this->User_model->getUsers();
        $data['users'] = $users;
        $this->load->view('admin/user/list', $data);
    }

    public function manageitems(){
        $this->load->model('Item_model');
        $items = $this->Item_model->getItem();
        $data['items'] = $items;
        $this->load->view('admin/items/list', $data);
    }

    public function createitem(){
        $this->load->helper('common_helper');
        $this->load->model('Supplier_model');
        $supplier = $this->Supplier_model->getSuppliers();

        $config['upload_path'] = './public/uploads/items/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';

        #$config['encrypt_name'] = true;

        $this->load->library('upload', $config);

        $this->load->library('form_validation');

        $this->form_validation->set_error_delimiters('<p class="invalid-feedback">','</p>');
        $this->form_validation->set_rules('name', 'Item name','trim|required');
        $this->form_validation->set_rules('about', 'About','trim|required');
        $this->form_validation->set_rules('price', 'Price','trim|required');
        $this->form_validation->set_rules('sname', 'Supplier name','trim|required');

        if($this->form_validation->run() == true){
            if(!empty($_FILES['image']['name'])){
                #image is selected
                if($this->upload->do_upload('image')){
                    #upload file successfully
                    $data = $this->upload->data();

                    #resize the image
                    resizeImage($config['upload_path'].$data['file_name'], $config['upload_path'].'thumb/'.$data['file_name'], 300,270);

                    resizeImage($config['upload_path'].$data['file_name'], $config['upload_path'].'front_thumb/'.$data['file_name'], 1120,270);

                    $formArray['itemImg'] = $data['file_name'];
                    $formArray['itemName'] = $this->input->post('name');
                    $formArray['itemDesc'] = $this->input->post('about');
                    $formArray['price'] = $this->input->post('price');
                    $formArray['supplierId'] = $this->input->post('sname');

                    $this->Item_model->create($formArray);

                    $this->session->set_flashdata('item_success', 'Item added successfully');
                    redirect(base_url().'admin/manageitems');
                }

                else{
                    $error = $this->upload->display_errors("<p class='invalid-feedback'>","</p>");
                    $data['errorImageUpload'] = $error; 
                    $data['supply'] = $supplier;
                    $this->load->view('admin/items/add_item', $data);
                }
            } else {
                #add item data w/out img
                $formArray['itemName'] = $this->input->post('name');
                $formArray['itemDesc'] = $this->input->post('about');
                $formArray['price'] = $this->input->post('price');
                $formArray['supplierId'] = $this->input->post('sname');

                $this->Item_model->create($formArray);

                $this->session->set_flashdata('item_success', 'Item added successfully');
                redirect(base_url().'admin/manageitems');
            }

        } else{
            $supply_data['supply'] = $supplier;
            $this->load->view('admin/items/add_item', $supply_data);
        }
    }

    public function edititem(){

    }

    public function deleteitem(){

    }

    public function category(){
        $this->load->model('Category_model');
        $cats = $this->Category_model->getCategory();
        $cats_data['cats'] = $cats;

        $this->load->view('admin/category/list', $cats_data);
    }

    public function createcategory(){
        $this->load->model('Category_model');
        $this->load->library('form_validation');
        $this->form_validation->set_rules('category', 'Category', 'trim|required');

        if($this->form_validation->run() == true){
            $cat['categoryName'] = $this->input->post('category');
            $this->Category_model->createCategory($cat);

            $this->session->set_flashdata('cat_success', 'Category added successfully');
            redirect(base_url().'admin/category');
        } else{
            $this->load->view('admin/category/add_cat');
        }
    }

    public function editcategory($id){

    }

    public function deletecategory($id){

    }

    public function supplier(){
        $this->load->model('Supplier_model');
        $supplier = $this->Supplier_model->getSuppliers();
        $supply_data['supplier'] = $supplier;
        
        #connection to front end
        $this->load->view('admin/supplier/list', $supply_data);
    }

    public function createsupplier(){
        $this->load->model('Category_model');
        $cat = $this->Category_model->getCategory();
        
        $this->load->helper('common_helper');

        $config['upload_path']          = './public/uploads/restaurant/';
        $config['allowed_types']        = 'gif|jpg|png|jpeg';
        #$config['encrypt_name']         = true;

        $this->load->library('upload', $config);

        $this->load->model('Supplier_model');
        $this->load->library('form_validation');

        $this->form_validation->set_error_delimiters('<p class="invalid-feedback">','</p>');
        $this->form_validation->set_rules('sup_name', 'Supplier name','trim|required');
        $this->form_validation->set_rules('email', 'Email','trim|required');
        $this->form_validation->set_rules('phone', 'Phone','trim|required');
        $this->form_validation->set_rules('url', 'URL','trim|required');
        $this->form_validation->set_rules('categoryName', 'category','trim|required');
        $this->form_validation->set_rules('address', 'Address','trim|required');

        if($this->form_validation->run() == true){
            
            if(!empty($_FILES['image']['name'])){
                #image is seleceted
                if($this->upload->do_upload('image')){
                    #file uploaded successfully
                    $data = $this->upload->data();

                    resizeImage($config['upload_path'].$data['file_name'],$config['upload_path'].'thumb/'.$data['file_name'], 300, 270);

                    #resizeImage()

                    $formArray['Img'] = $data['file_name'];
                    $formArray['Name'] = $this->input->post('sup_name');
                    $formArray['Email'] = $this->input->post('email');
                    $formArray['Phone'] = $this->input->post('phone');
                    $formArray['Url'] = $this->input->post('url');
                    $formArray['categoryId'] = $this->input->post('categoryName');
                    $formArray['address'] = $this->input->post('address');

                    $this->Supplier_model->create($formArray);

                    $this->session->set_flashdata('sup_success','Supplier added successfully');
                    redirect(base_url().'admin/supplier');

                } else {
                    #error
                    $error = $this->upload->display_errors("<p class='invalid-feedback'>","</p>");
                    $data['errorImageUpload'] = $error;
                    $data['cats'] = $cat;
                    $this->load->view('admin/supplier/add_sup', $data);
                } 
            } else {
                 #add supplier data w/out img
                 $formArray['Name'] = $this->input->post('sup_name');
                 $formArray['Email'] = $this->input->post('Email');
                 $formArray['Phone'] = $this->input->post('Phone');
                 $formArray['Url'] = $this->input->post('Url');
                 $formArray['categoryId'] = $this->input->post('categoryName');
                 $formArray['address'] = $this->input->post('Address');

                 $this->Supplier_model->create($formArray);

                 $this->session->set_flashdata('sup_success', 'Supplier added successfully');
                 redirect(base_url().'admin/supplier');
            } 
        } else {
            $data['cats'] = $cat;
            $this->load->view('admin/supplier/add_sup', $data);
        }   
    }

    public function supplieredit(){

    }

    public function supplierdelete(){

    }

}

   