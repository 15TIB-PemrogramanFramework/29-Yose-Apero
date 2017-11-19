<?php
/**
* 
*/
class Member_Controller extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		
		$this->load->model('Model_member');
		$this->load->model('Model_barang');
	}
	

	public function Register(){
		$this->load->view('Member/Register');
	}

	
	public function barang()
	{
		if(!$this->session->userdata('logined') || $this->session->userdata('logined') != true)
		{
			redirect('/');
		}
		$data['barang'] = $this->Model_barang->listbarang();
		$this->load->view('Member/Pesanan',$data);
	}

	

	function tambah(){
		$data=array(
			'aksi' => site_url('Member_Controller/tambah_aksi'),
			'nama_member' => set_value('nama_member'),
			'username' => set_value('username'),
			'password' => set_value('password'),
			'nama_toko' => set_value('nama_toko'),
			'alamat_member' => set_value('alamat_member'),
			'button' => 'Register'
		);
		$this->load->view('Member/Register',$data);
	}

	

	function tambah_aksi()
	{
		$data = array(
			'nama_member' => $this->input->post('nama_member'),
			'username' => $this->input->post('username'),
			'password' => $this->input->post('password'),
			'nama_toko' => $this->input->post('nama_toko'),
			'alamat_member' => $this->input->post('alamat_member')

		);

		 $cek = $this->Model_member->cek_member($this->input->post('username'));
		if (!empty($cek)){
			$data['notif'] = 'Username Sudah Digunakan';
			$this->load->view('Member/Notifikasi',$data);
                       
                }else{
                        
			
			$this->Model_member->daftarmember($data);
			redirect(site_url('Home_Member/index'));
		}
		
	}
}



?>