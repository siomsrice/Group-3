<?php 
class supplier_admin extends CI_Controller 
{
	public function __construct()
	{
	
		parent::__construct();
		$this->load->helper('url');
		$this->load->library('session');
		$this->load->database();

		$this->load->model('sup_model'); 
	}

	public function addSupplier()
	{
		$data = array(); 
		$errorUploadType = $statusMsg = ''; 
		$this->load->helper('url');
		$this->load->helper('html');
	
		/*Check submit button */
		if($this->input->post('save'))
		{
			// If files are selected to upload 
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
					
					// File upload configuration 
					$uploadPath = 'uploads/files/'; 
					$config['upload_path'] = $uploadPath; 
					$config['allowed_types'] = 'jpg|jpeg|png|gif'; 
					//$config['max_size']    = '100'; 
					//$config['max_width'] = '1024'; 
					//$config['max_height'] = '768'; 
					
					// Load and initialize upload library 
					$this->load->library('upload', $config); 
					$this->upload->initialize($config); 
					
					// Upload file to server 
					if($this->upload->do_upload('file'))
					{ 
						// Uploaded file data 
						$fileData = $this->upload->data(); 
						$uploadData[$i]['sup_name']=$this->input->post('sup_name');
						$uploadData[$i]['sup_email']=$this->input->post('sup_email');
						$uploadData[$i]['sup_url']=$this->input->post('sup_url');
						$uploadData[$i]['category']=$this->input->post('sup_url');
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
					// Insert files data into the database 
					$insert = $this->sup_model->insert($uploadData); 
					$statusMsg = $insert?'Files uploaded successfully!'.$errorUploadType:'Some problem occurred, please try again.'; 
                }
                else
				{ 
                    $statusMsg = "Sorry, there was an error uploading your file.".$errorUploadType; 
                } 
			}else{ 
                $statusMsg = 'Please select image files to upload.'; 
			
			}
		}
		$data['crud'] = $this->sup_model->getRows(); 
         
        // Pass the files data to view 
        $data['statusMsg'] = $statusMsg; 
        $this->load->view('admin/supplier_board', $data); 
	}

}

?>