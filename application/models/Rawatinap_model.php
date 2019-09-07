<?php 

/**
 * 
 */
class Rawatinap_model extends CI_model
{

	var $table = 'pendaftaran_rawat_inap'; //nama tabel dari database
    var $column_order = array('no_rawat','nam_pasien','kamar','tanggal','diagnosa_awal_masuk','foto'); //field yang ada di table user
    var $column_search = array('no_rawat','nam_pasien','kamar','tanggal','diagnosa_awal_masuk','foto'); //field yang diizin untuk pencarian 
    var $order = array('no_rawat' => 'asc'); // default order 
 
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
 
    private function _get_datatables_query()
    {
         
        $this->db->from($this->table);
 
        $i = 0;
     
        foreach ($this->column_search as $item) // looping awal
        {
            if($_POST['search']['value']) // jika datatable mengirimkan pencarian dengan metode POST
            {
                 
                if($i===0) // looping awal
                {
                    $this->db->group_start(); 
                    $this->db->like($item, $_POST['search']['value']);
                }
                else
                {
                    $this->db->or_like($item, $_POST['search']['value']);
                }
 
                if(count($this->column_search) - 1 == $i) 
                    $this->db->group_end(); 
            }
            $i++;
        }
         
        if(isset($_POST['order'])) 
        {
            $this->db->order_by($this->column_order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
        } 
        else if(isset($this->order))
        {
            $order = $this->order;
            $this->db->order_by(key($order), $order[key($order)]);
        }
    }
 
    function get_datatables()
    {
        $this->_get_datatables_query();
        if($_POST['length'] != -1)
        $this->db->limit($_POST['length'], $_POST['start']);
        $query = $this->db->get();
        return $query->result();
    }
 
    function count_filtered()
    {
        $this->_get_datatables_query();
        $query = $this->db->get();
        return $query->num_rows();
    }
 
    public function count_all()
    {
        $this->db->from($this->table);
        return $this->db->count_all_results();
    }

    
	public function getAll()

	{

		return $this->db->get('pendaftaran_rawat_inap');

	}
	public function coba(){
		return $this->db->get('pendaftaran_rawat_inap')->result();
	}
	public function insertOne($Rawatinap)
	{
		return $this->db->insert('pendaftaran_rawat_inap',$Rawatinap);
		# code...
	}
	public function hapusaku($id){
		$this->db->where('no_rawat',$id);
		return $this->db->delete('pendaftaran_rawat_inap');
	}
 //    function get_bayar_pemesanan($no_rawat)
 //    {
 //                 return $this->db->get_where('pendaftaran_rawat_inap' ,array('no_rawat'=>$no_rawat))->row_array();
 //    }


	// function update_bayar_pemesanan($no_rawat,$Rawatinap)
 //    {
 //        $this->db->where('no_rawat',$no_rawat);
 //        return $this->db->update('pendaftaran_rawat_inap',$Rawatinap);
 //    }

	public function update($Rawatinap){
		$this->db->where('no_rawat',$this->input->post('no_rawat'));
		return $this->db->update('pendaftaran_rawat_inap',$Rawatinap);
	}
	public function Getdetail($whare){

		
		return $this->db->get_where('pendaftaran_rawat_inap',['no_rawat'=> $whare]);
	}



   
	
	
}

?>