<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Distributor_Controller extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('Model_distributor');
		$this->load->model('Model_barang');
		$this->load->model('Model_pesan');
		$this->load->model('Model_member');
		$this->load->model('Model_pengiriman');
	}

	function status($username_dis){
		if(!$this->session->userdata('logined_dis') || $this->session->userdata('logined_dis') != true)
		{
			redirect('/');
		}


		$data['kirim'] = $this->Model_pengiriman->listPengiriman($username_dis);
		$this->load->view('Distributor/DataPengiriman', $data);
	}

	function ambil_data($username)
	{
		$member = $this->Model_member->ambil_data($username);
		$data=array(
			'aksi' => site_url('Distributor_Controller/update_pengiriman'),
			'username' => $this->Model_member->get_option($username),
			'button' => 'Update'
		);
		$this->load->view('Distributor/FormStatus',$data);
	}

	function update_pengiriman()
	{
		$data1 = array(
			'status_pengiriman' => $this->input->post('status_pengiriman')

		);
		$data2 = array(
			'status' => $this->input->post('status_pengiriman')
		);
		$username = $this->input->post('username');

		$this->Model_pengiriman->update($username, $data1);
		$this->Model_pesan->update($username,$data2);
		redirect('Home_Distributor/index');
	}
	
}