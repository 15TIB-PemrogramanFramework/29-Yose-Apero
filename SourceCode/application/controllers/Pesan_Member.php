<?php

/**
* 
*/
class Pesan_Member extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		
		$this->load->model('Model_pesan');
	}

	function ambil($id_barang){
		$barang=$this->Model_pesan->ambil_data($id_barang);
		$data=array(
			'aksi' => site_url('Pesan_Member/Tambah'),
			'nama_barang' => set_value('nama_barang',$barang->nama_barang),
			'id_barang' => set_value('id_barang',$barang->id_barang),
			'button' => 'Tambah'
		);
		$this->load->view('Member/Form_beli',$data);
	}

	function tambah(){
		$data=array(
			
			'jumlah_barang' => $this->input->post('jumlah_barang'),
			'id_barang' => $this->input->post('id_barang'),
			'username' => $this->input->post('username'),
			'tanggal' =>  date("Y-m-d"),
			'status' => $this->input->post('status')
		);

		$this->Model_pesan->tambahBeli($data);
		
		redirect(site_url('Member_Controller/barang'));
	}
	

	function listBeli($username){
		if(!$this->session->userdata('logined') || $this->session->userdata('logined') != true)
		{
			redirect('/');
		}
		
		$cekRelasi = $this->Model_pesan->cekRelasi($username);
		if(!empty($cekRelasi))
		{
			$data['ListBarang'] = $this->Model_pesan->lihatBeli($username);
			$this->load->view('Member/Daftarpesan',$data);
		}
		else{
			$data['notif']='Anda Belum Memesan Barang, Silahkan Pesan!';
			$this->load->view('Member/Notifikasi', $data);
		}
		
		
		
	}


}




?>
