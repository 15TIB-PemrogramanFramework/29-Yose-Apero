<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_Controller extends CI_Controller {

	function __construct()
	{
		parent::__construct();

		$this->load->model('Model_admin');
		$this->load->model('Model_distributor');
		$this->load->model('Model_barang');
		$this->load->model('Model_pesan');
		$this->load->model('Model_member');
		$this->load->model('Model_pengiriman');
	}

	public function member()
	{
		if(!$this->session->userdata('loginadmin') || $this->session->userdata('loginadmin') != true)
		{
			redirect('loginadmin');
		}
		$data['member'] = $this->Model_admin->datamember();
		$this->load->view('Admin/Datamember',$data);
	}
	
	function delete_member($username)
	{
		$this->Model_member->hapus_member($username);
		redirect('Admin_Controller/member');
	}



//Bagian Barang
	public function barang()
	{
		if(!$this->session->userdata('loginadmin') || $this->session->userdata('loginadmin') != true)
		{
			redirect('loginadmin');
		}

		$data['barang'] = $this->Model_barang->listbarang();
		$this->load->view('Admin/databarang',$data);
	}
	function tambah_barang(){
		$data=array(
			'aksi' => site_url('Admin_Controller/tambah_aksi'),
			'nama_barang' => set_value('nama_barang'),
			'harga_barang' => set_value('harga_barang'),
			'satuan_barang' => set_value('satuan_barang'),
			'id_barang' => set_value('id_barang'),
			'button' => 'Tambah'
		);
		$this->load->view('Admin/FormBarang',$data);
	}

	function tambah_aksi(){
		$data=array(
			
			'nama_barang' => $this->input->post('nama_barang'),
			'harga_barang' => $this->input->post('harga_barang'),
			'satuan_barang' => $this->input->post('satuan_barang'),
			
		);
		$this->Model_barang->tambah_barang($data);
		redirect('Admin_Controller/barang');

	}
	function delete_barang($id)
	{
		$this->Model_barang->hapus_barang($id);
		redirect('Admin_Controller/barang');
	}



//Bagian Pemesanan
	public function dataPesanan(){
		if(!$this->session->userdata('loginadmin') || $this->session->userdata('loginadmin') != true)
		{
			redirect('loginadmin');
		}
		$data['pesan'] = $this->Model_pesan->lihatPesanan();
		$this->load->view('Admin/Datapesan',$data);
	}
	
	public function lihatbarang($username)
	{
		if(!$this->session->userdata('loginadmin') || $this->session->userdata('loginadmin') != true)
		{
			redirect('loginadmin');
		}
		$nama=$this->Model_member->ambil_data($username);
		$data=array(
			'nama_member' => set_value('nama_member',$nama->nama_member),
		);
		$data['ListBarang'] = $this->Model_pesan->lihatBeli($username);
		$this->load->view('Admin/Daftarbarang', $data);

	}


	
	
	

	

	


//Bagian Relasi Pengiriman
	function ambil_distribusi($username){
		$member = $this->Model_member->ambil_data($username);
		$data=array(
			'aksi' => site_url('Admin_Controller/tambah_distribusi'),
			'username' => $this->Model_member->get_option($username),
			'nama_member' => set_value('nama_member',$member->nama_member),
			'nama_dis' => $this->Model_distributor->get_option(),
			'username_dis' => $this->Model_distributor->get_option(),
			'button' => 'Kirim'
		);
		$this->load->view('Admin/FormKirim',$data);
	}

	function tambah_distribusi(){
		$data=array(
			
			'username' => $this->input->post('username'),
			'username_dis' => $this->input->post('username_dis'),
			'status_pengiriman' => 'Belum Dikirim',
			'tgl_pengiriman' => date("Y-m-d")
		);
		$this->Model_pengiriman->tambah_kirim($data);
		redirect('Admin_Controller/dataPesanan');

	}

	function dataPengiriman(){
		if(!$this->session->userdata('loginadmin') || $this->session->userdata('loginadmin') != true)
		{
			redirect('loginadmin');
		}
		$data['kirim'] = $this->Model_pengiriman->lihatPengiriman();
		$this->load->view('Admin/DataPengiriman',$data);

	}

	

//Bagian Distributor
	public function distributor(){
		if(!$this->session->userdata('loginadmin') || $this->session->userdata('loginadmin') != true)
		{
			redirect('loginadmin');
		}
		$data['distributor'] = $this->Model_distributor->datadistributor();
		$this->load->view('Admin/Datadistributor', $data);
	}

	function tambah_distributor()
	{
		$data=array(
			'aksi' => site_url('Admin_Controller/aksi_distributor'),
			'nama_dis' => set_value('nama_dis'),
			'username_dis' => set_value('username_dis'),
			'password_dis' => set_value('password_dis'),
			'nohp_dis' => set_value('nohp_dis'),
			'button' => 'Tambah'
		);
		$this->load->view('Admin/FormDistributor',$data);
	}

	function aksi_distributor(){
		$data=array(
			
			'nama_dis' => $this->input->post('nama_dis'),
			'username_dis' => $this->input->post('username_dis'),
			'password_dis' => $this->input->post('password_dis'),
			'nohp_dis' => $this->input->post('nohp_dis'),
			
		);
		$this->Model_distributor->tambah_distributor($data);
		redirect('Admin_Controller/distributor');

	}
	function delete_distributor($username_dis)
	{
		$this->Model_distributor->hapus_distributor($username_dis);
		redirect('Admin_Controller/distributor');
	}



#Bagian Chart
	function tampil_chart(){
		$data['hasil']=$this->Model_pesan->getdatacount();
		$this->load->view('Admin/Home',$data);
	}
}
