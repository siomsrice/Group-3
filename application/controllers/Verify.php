<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Verify extends CI_Controller 
{
    public function index(){
        $this->load->view('front/wait');
    }

}