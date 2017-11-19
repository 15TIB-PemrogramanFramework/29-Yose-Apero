<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Home_Admin extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        
    }

    public function index()
    {
		if(!$this->session->userdata('loginadmin') || $this->session->userdata('loginadmin') != true)
		{
			redirect('loginadmin');
		}

		$this->load->view('Admin/Home');
        
    } 


	
}
	
