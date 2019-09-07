w<?php 
/**
 * 
 */
class Rawatjalan_model extends CI_model
{
	
	public function getall()
	{

		return $this->db->get('pendaftaran_rawat_jalan');
		# code...
	}

	public function insertone($Rawatjalan){
         return $this->db->insert('pendaftaran_rawat_jalan',$Rawatjalan);

	}

	public function hapus($id){
	$this->db->where('no_rekap_medis',$id);
	return $this->db->delete('pendaftaran_rawat_jalan');
	}

	public function get_rawat_jalan($no_rekap_medis){
		return $this->db->get_where('pendaftaran_rawat_jalan',array('no_rekap_medis' =>$no_rekap_medis))->row_array();
			} 


			public function update($no_rekap_medis,$Rawatjalan){

				$this->db->where('no_rekap_medis',$no_rekap_medis);
				return $this->db->update('pendaftaran_rawat_jalan',$Rawatjalan);
		

	}





		}


		
		
		
		 ?>