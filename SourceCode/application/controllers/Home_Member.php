<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Home_Member extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Model_pesan');
        
    }

    public function index()
    {
		if(!$this->session->userdata('logined') || $this->session->userdata('logined') != true)
		{
			redirect('/');
		}
	
		$data['hasil']=$this->Model_pesan->getdatacount();
		$this->load->view('Member/Home',$data);
	
		
        
    } 


public function pesanan(){
	$this->load->view('Member/Pesanan');
}
	
}
	
