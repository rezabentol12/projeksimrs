<?php 

/**
 * 
 */
class dokter_model extends CI_model
{
	
	public function getAll()

	{

		return $this->db->get('dokter');
	}
	public function insertOne($dokter){
		return $this->db->insert('dokter',$dokter);
	}

	public function hapusaku($id){
		$this->db->where('kd_dokter',$id);
		return $this->db->delete('dokter');
	}
}
 ?>