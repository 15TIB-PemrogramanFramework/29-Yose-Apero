<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Home_Distributor extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Model_pesan');        
    }

    public function index()
    {
		if(!$this->session->userdata('logined_dis') || $this->session->userdata('logined_dis') != true)
		{
			redirect('/');
		}

		$data['hasil']=$this->Model_pesan->getdatacount();
        $this->load->view('Distributor/Home',$data);
        
    } 
}