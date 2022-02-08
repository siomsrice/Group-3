<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller 
{
    public function index(){
       redirect('admin/login');
    }
    public function login(){
        $data = array();
        $data = $this->input->post();

        if(isset($data) && $data != null)
        {
            $this->load->model('Test_model');

            $return = $this->Test_model->login($data['username'], $data['password']);
            if(is_bool($return))
            {
                echo "Login error";
            } else
            {
                $_SESSION['adminId'] = $return[0]['adminId'];
				$_SESSION['username'] = $return[0]['username'];
                redirect(base_url().'admin/dashboard');
            }
        }
        $this->load->view('admin/login');
    }

    public function dashboard() {
        $data['admin'] = $_SESSION['adminId'];
        if(isset($data['admin']) && $data['admin'] != null)
        {
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
		session_destroy();
		redirect(base_url().'admin/dashboard');
    }


    public function register(){
        $data = array();
  
        $data = $this->input->post();

        if(isset($data) && $data != null)
        {
            $this->load->model('user_model');
            $this->user_model->createUser($data);
        }
        $this->load->view('admin/user/addUser');
    }

    public function viewUser(){
        $this->load->model('user_model');
        $user = $this->user_model->getUsers($_SESSION['usersId']);
        
        $output['user'] = $user[0];

        $data = array();
        $data = $this->input->post();

        if(isset($data) && $data != null)
        {
            $this->load->model('user_model');
            $this->user_model->updateUser($data);
        }
        $this->load->view('front/viewUser', $output);
    }

    public function updateuser($uid){
        $this->load->helper('url');
		$this->load->library('session');
		$this->load->model('user_model'); 
        $reslt=$this->user_model->getuserdetail($uid);
        $this->load->view('admin/user/edit',['row'=>$reslt]);
    }

    public function deleteUser($id){
        $this->load->model('user_model');
        $user = $this->user_model->getUsers($id);

        if(empty($user)){
            echo "Error UserNotFound";
            redirect(base_url().'admin/manageuser');
        }

        $this->user_model->deletePerm($id);
        redirect(base_url().'admin/manageuser');
    }

	public function updateuserdetails() {
      if($this->input->post('updateuser'))
		{
			$usid=$this->input->post('userid');
			$usersUid=$this->input->post('usersUid');
            $firstName=$this->input->post('firstName');
			$lastName=$this->input->post('lastName');
            $phone=$this->input->post('phone');
            $usersEmail=$this->input->post('usersEmail');
			$address=$this->input->post('address');
            $usersPwd=$this->input->post('usersPwd');
            $pwdRepeat=$this->input->post('pwdRepeat');
			$this->load->model('user_model');
			$this->user_model->updateuserdetails
			(
                $usid,$firstName,$lastName,$usersUid,$phone,$usersEmail,$address,$usersPwd,$pwdRepeat
            );
			
		} 
		else 
		{
	       
		    redirect('admin/manageuser');
        }
     }

    public function manageuser() {
        $this->load->model('User_model');
        $users = $this->User_model->getUsers();
        $user_data['users'] = $users;
        $this->load->view('admin/user/list', $user_data);
    }

    public function manageitems() {
        $this->load->model('Item_model');
        $items = $this->Item_model->getItem();
        $item_data['items'] = $items;
        $this->load->view('admin/items/list', $item_data);
    }

    public function createitem() {
        $this->load->helper('url');
		$this->load->library('session');
		$this->load->model('Item_model'); 
        $this->load->model('Supplier_Model'); 
		$data = array(); 
		$errorUploadType = $statusMsg = ''; 
		if($this->input->post('save'))
		{
			if(!empty($_FILES['files']['name']) && count(array_filter($_FILES['files']['name'])) > 0)
			{ 
				$filesCount = count($_FILES['files']['name']); 
				for($i = 0; $i < $filesCount; $i++)
				{ 
					$_FILES['file']['name']     = $_FILES['files']['name'][$i]; 
					$_FILES['file']['type']     = $_FILES['files']['type'][$i]; 
					$_FILES['file']['tmp_name'] = $_FILES['files']['tmp_name'][$i]; 
					$_FILES['file']['error']    = $_FILES['files']['error'][$i]; 
					$_FILES['file']['size']     = $_FILES['files']['size'][$i]; 
					
					$uploadPath = 'public/uploads/items/'; 
					$config['upload_path'] = $uploadPath; 
					$config['allowed_types'] = 'jpg|jpeg|png|gif'; 
					
					$this->load->library('upload', $config); 
					$this->upload->initialize($config); 
					
					if($this->upload->do_upload('file'))
					{ 
						$fileData = $this->upload->data(); 
						$uploadData[$i]['supplierId']=$this->input->post('supplierId');
						$uploadData[$i]['itemName']=$this->input->post('itemName');
						$uploadData[$i]['itemBrand']=$this->input->post('itemBrand');
						$uploadData[$i]['itemType']=$this->input->post('itemType');
						$uploadData[$i]['price']=$this->input->post('price');
						$uploadData[$i]['file_name'] = $fileData['file_name']; 
						$uploadData[$i]['itemDesc']=$this->input->post('itemDesc');
						
					}
					else
					{  
						$errorUploadType .= $_FILES['file']['name'].' | ';  
					} 
				} 

                    $errorUploadType = !empty($errorUploadType)?'<br/>File Type Error: '.trim($errorUploadType, ' | '):''; 
                    if(!empty($uploadData))
                    { 
                        $addItem = $this->Item_model->addItem($uploadData); 
                        $statusMsg = $addItem?'Files uploaded successfully!'.$errorUploadType:'Some problem occurred, please try again.'; 
                    }
                    else
                    { 
                        $statusMsg = "Sorry, there was an error uploading your file.".$errorUploadType; 
                    } 
                }else{ 
                    $statusMsg = 'Please select image files to upload.'; 
			
			}
		}
		$data['supplier'] = $this->Supplier_Model->getRows(); 
         
        $data['statusMsg'] = $statusMsg; 
        $this->load->view('admin/items/add_item', $data); 
	}
    

    public function edititem($uid)  {
        $this->load->helper('url');
		$this->load->library('session');
		$this->load->model('Item_model'); 
        $this->load->model('Supplier_Model');
        $reslt=$this->Item_model->getuserdetail($uid);
        $data['supplier'] = $this->Supplier_Model->getRows(); 
        $this->load->view('admin/items/supplier_name',$data);
        $this->load->view('admin/items/edit',['row'=>$reslt]);
    }

    public function updateitemdetails() {
        if($this->input->post('updateitems'))
		{
            $usid=$this->input->post('userid');
			$supplierId=$this->input->post('supplierId');
            $itemName=$this->input->post('itemName');
			$itemBrand=$this->input->post('itemBrand');
            $itemType=$this->input->post('itemType');
            $itemDesc=$this->input->post('itemDesc');
			$price=$this->input->post('price');
			$this->load->model('item_model');
			$this->item_model->updateitemdetails
			(
				$supplierId,$usid,$itemName,$itemBrand,$itemType,$itemDesc,$price
            );
			
		} 
		else 
		{
	        $this->session->set_flashdata('error', 'Wrong input !!');
		    redirect('admin/dashboard');
        }
    }

    public function deleteitem($id) {
        $this->load->model('item_model');
        $items = $this->item_model->getItemId($id);

        if(!empty($items)) 
        {
           $this->item_model->deleteItem($id);
           $this->session->set_flashdata('itemdel_success', 'Item Deleted successfully');
           redirect(base_url().'admin/manageitems');
            
        }
        $this->session->set_flashdata('error', 'Item not found');
        redirect(base_url().'admin/dashboard'); 
    }

    public function category() {
        $this->load->model('Category_model');
        $cats = $this->Category_model->getCategory();
        $cats_data['cats'] = $cats;

        $this->load->view('admin/category/list', $cats_data);
    }

    public function createcategory() {
        $this->load->model('Category_model');
        $this->load->library('form_validation');
        $this->form_validation->set_rules('category', 'Category', 'trim|required');

        if($this->form_validation->run() == true)
        {
            $cat['categoryName'] = $this->input->post('category');
            $this->Category_model->createCategory($cat);

            $this->session->set_flashdata('cat_success', 'Category added successfully');
            redirect(base_url().'admin/category');
        } else
        {
            $this->load->view('admin/category/add_cat');
        }
    }


    public function supplier()  {
        $this->load->model('Supplier_model');
        $supplier = $this->Supplier_model->getSuppliers();
        $supply_data['supplier'] = $supplier;
        
        $this->load->view('admin/supplier/list', $supply_data);
    }

    public function createsupplier()    {
        $this->load->helper('url');
		$this->load->library('session');
		$this->load->model('Supplier_Model'); 
        $data = array(); 
		$errorUploadType = $statusMsg = ''; 
		if($this->input->post('save'))
		{
			if(!empty($_FILES['files']['name']) && count(array_filter($_FILES['files']['name'])) > 0)
			{ 
				$filesCount = count($_FILES['files']['name']); 
				for($i = 0; $i < $filesCount; $i++)
				{ 
					$_FILES['file']['name']     = $_FILES['files']['name'][$i]; 
					$_FILES['file']['type']     = $_FILES['files']['type'][$i]; 
					$_FILES['file']['tmp_name'] = $_FILES['files']['tmp_name'][$i]; 
					$_FILES['file']['error']    = $_FILES['files']['error'][$i]; 
					$_FILES['file']['size']     = $_FILES['files']['size'][$i]; 
					
					$uploadPath = 'public/uploads'; 
					$config['upload_path'] = $uploadPath; 
					$config['allowed_types'] = 'jpg|jpeg|png|gif'; 
					
					$this->load->library('upload', $config); 
					$this->upload->initialize($config); 
					
					if($this->upload->do_upload('file'))
					{ 
						$fileData = $this->upload->data(); 
						$uploadData[$i]['Name']=$this->input->post('Name');
						$uploadData[$i]['Email']=$this->input->post('Email');
						$uploadData[$i]['Url']=$this->input->post('Url');
						$uploadData[$i]['Phone']=$this->input->post('Phone');
						$uploadData[$i]['Address']=$this->input->post('Address');
						$uploadData[$i]['file_name'] = $fileData['file_name']; 
						
					}
					else
					{  
						$errorUploadType .= $_FILES['file']['name'].' | ';  
					} 
				} 

                    $errorUploadType = !empty($errorUploadType)?'<br/>File Type Error: '.trim($errorUploadType, ' | '):''; 
                    if(!empty($uploadData))
                    { 
                        $add = $this->Supplier_Model->add($uploadData); 
                        $statusMsg = $add?'Files uploaded successfully!'.$errorUploadType:'Some problem occurred, please try again.'; 
                    }
                    else
                    { 
                        $statusMsg = "Sorry, there was an error uploading your file.".$errorUploadType; 
                    } 
                }else{ 
                    $statusMsg = 'Please select image files to upload.'; 
			
			}
		}
		$data['supplier'] = $this->Supplier_Model->getRows(); 
         
        $data['statusMsg'] = $statusMsg; 
        $this->load->view('admin/supplier/add_sup', $data); 
	}


    public function supplieredit($uid)  {
        $this->load->helper('url');
		$this->load->library('session');
        $this->load->model('Supplier_Model');
        $reslt=$this->Supplier_Model->getsupplierdetail($uid);
        $this->load->view('admin/supplier/edit',['row'=>$reslt]);
    }

    public function updatedesuppliertails() {
        if($this->input->post('updatesupplier'))
		{
                $usid=$this->input->post('userid');
                $Name=$this->input->post('Name');
                $Email=$this->input->post('Email');
                $Phone=$this->input->post('Url');
                $Address=$this->input->post('Phone');
                $Url=$this->input->post('Address');
                $this->load->model('supplier_model');
                $this->supplier_model->updatesupplierdetails
                (
                    $usid,$Name,$Email,$Phone,$Address,$Url
                );
                
            } 
            else 
            {
                
                redirect('admin/manageitems');
            }
         
     }

    public function supplierdelete($id) {
        $this->load->model('Supplier_Model');
        $supplier = $this->Supplier_Model->getSupplierId($id);
     

        if(empty($supplier)) 
        {
            $this->session->set_flashdata('error_supplier', 'Supplier Not Found');
            redirect(base_url().'admin/supplier');
        }
        $this->Supplier_Model->deleteSupplier($id);
        $this->session->set_flashdata('supplier_success', 'Supplier Deleted Successfully');
        redirect(base_url().'admin/supplier');
    }

    public function orders()    {
        $this->load->model('Order_model');
        $this->load->model('User_model');
        $this->load->helper('date');

        $order = $this->Order_model->getAllOrders();
        $data['orders'] = $order;
        $this->load->view('admin/orders/list', $data);
    }

    public function processOrder($uid)   {
        $this->load->model('Order_model');
        $this->load->helper('date');
        $reslt=$this->Order_model->getorderdetail($uid);
        $data['status'] = $this->Order_model->getRows(); 
        $data['user'] = $this->Order_model->getOrderByUser($uid); 
        $this->load->view('admin/items/supplier_name',$data);
        $this->load->view('admin/orders/processOrder', ['order'=>$reslt]);
    }

	// For data updation
	public function updateorderdetails() {
      if($this->input->post('updatestatus'))
		{
			$usid=$this->input->post('userid');
			$status=$this->input->post('status');
            $this->load->model('Order_model');
			$this->Order_model->updateorderdetails
			(
				$usid,$status
			);
			
		} 
		else 
		{
	        $this->session->set_flashdata('error', 'Wrong input !!');
		    redirect('admin/dashboard');
        }
    }

    public function deleteorder($id) {
        $this->load->model('order_model');
        $items = $this->order_model->getOrder($id);

        if(!empty($items)) 
        {
           $this->order_model->deleteOrder($id);
           $this->session->set_flashdata('itemdel_success', 'Item Deleted successfully');
           redirect(base_url().'admin/orders');
            
        }
        $this->session->set_flashdata('error', 'Item not found');
        redirect(base_url().'admin/dashboard'); 
    }

}

   