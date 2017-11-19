</<?php 
/**
* 
*/
class Model_pesan extends CI_Model
{
	public $table_barang	= 'barang';
	public $id_barang		= 'id_barang';
	public $table_pesan		= 'pesan';
	public $id_beli			= 'id_pesan';
	public $table_member	= 'member';
	public $username		= 'username';
	
	
	function __construct()
	{
		parent::__construct();

	}

	function ambil_data($id_barang){
		$this->db->where($this->id_barang,$id_barang);
		return $this->db->get($this->table_barang)->row();
	}

	function tambahBeli($data){

		return $this->db->insert($this->table_pesan,$data);
	}


 
function lihatBeli($username){
	$this->db->select('barang.nama_barang , pesan.jumlah_barang ,
	 member.username, pesan.tanggal, barang.satuan_barang, pesan.status, member.nama_member');
	$this->db->from('pesan', 'barang', 'member');
	$this->db->join('barang', 'pesan.id_barang = barang.id_barang');
	$this->db->join('member', 'pesan.username  = member.username');
	$this->db->where('member.username',$username);
	
	 $query = $this->db->get(); 
        if ($query->num_rows() >0){ 
            foreach ($query->result() as $data) {
               
                $ListBarang[] = $data;
            }
        return $ListBarang;
        }
        else{
        	 $ListBarang = 'Anda Belum Pesan Barang';
        	return $ListBarang;
        }
	
}

function lihatPesanan(){
	$this->db->select('barang.nama_barang , pesan.jumlah_barang , member.username ,pesan.tanggal, barang.satuan_barang, pesan.status, member.nama_toko');
	$this->db->from('pesan', 'barang', 'member');
	$this->db->join('barang', 'pesan.id_barang = barang.id_barang');
	$this->db->join('member', 'pesan.username  = member.username');
	$this->db->group_by('member.username having count(member.username) >= 1');
	 $query = $this->db->get(); 
        if ($query->num_rows() >0){ 
            foreach ($query->result() as $data) {
               
                $pesan[] = $data;
            }
        return $pesan;
        }
	

}
	function cekRelasi($username)
	{
		$this->db->where('username', $username);
		
		return $this->db->get($this->table_pesan)->row();
	}

	function update($username, $data)
	{
		$this->db->where($this->username, $username);
		return $this->db->update($this->table_pesan,$data);
	}


	function getdatacount(){
		
		$query = $this->db->query("Select username,sum(jumlah_barang) as jumlah_barang  from pesan group by username");
		
		if($query->num_rows() > 0){
			foreach ($query->result() as $data) {
				$hasil[] = $data;
			}
			return $hasil;
		}

	}
}

?>