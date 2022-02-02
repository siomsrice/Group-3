<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Supplier extends CI_Controller 
{
	public function index()
	{
		$this->load->model('Supplier_model');
		$stores= $this->Supplier_model->getSupInfo();
		$data['stores'] = $stores;
		$this->load->view('front/supplier',$data);
	}

}
