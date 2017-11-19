<?php

class Model_distributor extends CI_Model
{
	public $nama_table	= 'distributor';
	public $id			= 'username_dis';
	public $order		= 'ASC';

	function __construct()
	{
		parent::__construct();
	}
	function ceklogin_distributor($id, $password)
	{
		$this->db->where('username_dis', $id);
		$this->db->where('password_dis',$password);
		return $this->db->get($this->nama_table)->row();
	}
	function datadistributor(){
		$this->db->order_by($this->id,$this->order);
		return $this->db->get($this->nama_table)->result();

	}
	function tambah_distributor($data)
	{
		return $this->db->insert($this->nama_table,$data);
	}

	function hapus_distributor($id)
	{
		$this->db->where($this->id,$id);
		return $this->db->delete($this->nama_table);
	}

	function get_option(){
		$this->db->select('*');
		$this->db->from('distributor');
		$query = $this->db->get();
		return $query->result();
	}
	
}

?>