<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rent extends CI_Controller {

    function __construct()
    {
	parent::__construct();
	$this->load->helper(array('form', 'url')); 
    }
    public function index()
    { 
	$this->load->view('common/head');
	$this->load->view('common/nav');
	$this->load->view('rent/body');
	$this->load->view('common/footer');
    }
    public function do_upload() { 
         $config['upload_path']   = './uploads/'; 
         $config['allowed_types'] = 'gif|jpg|png'; 
         $config['max_size']      = 100000; 
         $config['max_width']     = 5024; 
         $config['max_height']    = 7068;  
         $this->load->library('upload', $config);
			
         if ( ! $this->upload->do_upload('userfile')) {
            $error = array('error' => $this->upload->display_errors()); 
            $this->load->view('common/upload_form', $error); 
         }
			
         else { 
            $data = array('upload_data' => $this->upload->data()); 
            $this->load->view('upload_success', $data); 
         } 
    }
}
