<?php 

/**
* 
*/
class Model_member extends CI_Model
{
	public $nama_table	= 'member';
	public $username		= 'username';
	public $order		= 'ASC';

	function __construct()
	{
		parent::__construct();
	}

	

	function ceklogin($username, $password)
	{
		$this->db->where('username', $username);
		$this->db->where('password',$password);
		return $this->db->get($this->nama_table)->row();
	}

	function daftarMember($data){

			return $this->db->insert($this->nama_table,$data);
		
	}

	function ambil_data($username){
		$this->db->where($this->username,$username);
		return $this->db->get($this->nama_table)->row();
	}

	function hapus_member($username)
	{
		$this->db->where($this->username,$username);
		return $this->db->delete($this->nama_table);
	}

	function get_option($username){
		$this->db->select('*');
		$this->db->from('member');
		$this->db->where($this->username,$username);
		$query = $this->db->get();
		return $query->result();
	}

	function cek_member($username)
	{
		$this->db->where('username', $username);
		return $this->db->get($this->nama_table)->row();
	}
}




?>