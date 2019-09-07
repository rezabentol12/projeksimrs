<?php 
/**
 * 
 */
class Igd_model extends CI_model
{
	
	public function getall()
	{

		return $this->db->get('pendaftaran_igd_ugd');
		# code...
	}

	public function insertone($igd){
         return $this->db->insert('pendaftaran_igd_ugd',$igd);

	}

	public function hapus($id){
	$this->db->where('no_rekap_medis',$id);
	return $this->db->delete('pendaftaran_igd_ugd');
	}

	public function get_igd($no_rekap_medis){
		return $this->db->get_where('pendaftaran_igd_ugd',array('no_rekap_medis' =>$no_rekap_medis))->row_array();
			} 


			public function update($no_rekap_medis,$igd){

				$this->db->where('no_rekap_medis',$no_rekap_medis);
				return $this->db->update('pendaftaran_igd_ugd',$igd);
		

	}





		}


		
		
		
		 ?>