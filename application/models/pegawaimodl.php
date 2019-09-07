<?php 

/**
 * 
 */
class pegawaimodl extends CI_model
{
	
	
	public function getAll()

	{

		return $this->db->get('pegawai');
	}

	public function insertOne($Pegawai){
		return $this->db->insert('$pegawai',$Pegawai);

	}
}

 ?>