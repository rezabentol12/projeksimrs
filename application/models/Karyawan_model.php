<?php 
/**
 * 
 */
class Karyawan_model extends CI_model
{
	
public function insertOne($Rawatinap)
	{
        return $this->db->insert('karyawan',$Rawatinap);
		# code...
	}
}


 ?>