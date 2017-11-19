<?php
class Model_pengiriman extends CI_Model
{
	public $table_pengiriman 	= 'pengiriman';
	public $id_barang		  	= 'id_barang';
	public $table_member	  	= 'member';
	public $username		  	= 'username';
	public $table_distributor	= 'distributor';
	public $username_dis	  	= 'username_dis';
	
	
	function __construct()
	{
		parent::__construct();

	}

	function tambah_kirim($data){

		return $this->db->insert($this->table_pengiriman,$data);
	}

	function lihatPengiriman(){
	$this->db->select('member.nama_member , pengiriman.status_pengiriman ,pengiriman.tgl_pengiriman, distributor.nama_dis');
	$this->db->from('pengiriman', 'member', 'distributor');
	$this->db->join('distributor', 'pengiriman.username_dis = distributor.username_dis');
	$this->db->join('member', 'pengiriman.username  = member.username');
	$this->db->group_by('member.username having count(member.username) >= 1');
	 $query = $this->db->get(); 
        if ($query->num_rows() >0){ 
            foreach ($query->result() as $data) {
               
                $kirim[] = $data;
            }
        return $kirim;
        }
	}

	function listPengiriman($username_dis)
	{
	$this->db->select('member.nama_member , member.username , pengiriman.status_pengiriman ,pengiriman.tgl_pengiriman, distributor.nama_dis');
	$this->db->from('pengiriman', 'member', 'distributor');
	$this->db->join('distributor', 'pengiriman.username_dis = distributor.username_dis');
	$this->db->join('member', 'pengiriman.username  = member.username');
	$this->db->where('distributor.username_dis',$username_dis);
	 $query = $this->db->get(); 
        if ($query->num_rows() >0){ 
            foreach ($query->result() as $data) {
               
                $kirim[] = $data;
            }
        return $kirim;
        }
	}

	function update($username, $data)
	{
		$this->db->where($this->username, $username);
		return $this->db->update($this->table_pengiriman,$data);
	}
}