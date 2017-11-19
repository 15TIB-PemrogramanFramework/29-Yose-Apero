<?php

class Model_barang extends CI_Model
{
	public $nama_table	= 'barang';
	public $id			= 'id_barang';
	public $order		= 'ASC';

	function __construct()
	{
		parent::__construct();
	}

	function listbarang(){
	$this->db->order_by($this->id,$this->order);
	return $this->db->get($this->nama_table)->result();

}
function tambah_barang($data)
{
	return $this->db->insert($this->nama_table,$data);
}

function hapus_barang($id)
{
	$this->db->where($this->id,$id);
	return $this->db->delete($this->nama_table);
}

}

?>