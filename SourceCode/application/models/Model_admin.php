<?php 

/**
* 
*/
class Model_admin extends CI_Model
{
	public $nama_table	= 'admin';
	public $id			= 'username';
	public $order		= 'ASC';
	public $member_table = 'member';

	function __construct()
	{
		parent::__construct();
	}

	

	function ceklogin($username, $password)
	{
		$this->db->where('username_admin', $username);
		$this->db->where('password_admin',$password);
		return $this->db->get($this->nama_table)->row();
	}

	function daftarMember($data){

		return $this->db->insert($this->nama_table,$data);
	}

	function datamember(){

	$this->db->order_by($this->id,$this->order);
	return $this->db->get($this->member_table)->result();

	}
	

}

?>