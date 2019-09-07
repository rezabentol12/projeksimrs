<?php 
/**

 * 
 */
class rawatinap extends CI_Controller 
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->database();

		$this->load->model('Rawatinap_model');
		

		# code...
	}
	public function index(){
		
		
		$data['page']='view_rawatinap';
		$data['list']=$this->Rawatinap_model->getAll();
		$this->renderrawatinap($data);
		
	}
	public function renderrawatinap($data){

		
		
		$this->load->view('rawatinapp/sidebar');
		$this->load->view('rawatinapp/header');
		$this->load->view('rawatinapp/maincontent',$data);
		$this->load->view('rawatinapp/footer');



	}
	public function form_tampil(){
		$data['title']='from register';
		$data['page']='input_inap';
		$data['anuu']= $this->Rawatinap_model->getAll()->result_array();
		$this->renderrawatinap($data);

		// $this->load->view('rawatinap/input_inap',$data);
	}

	public function proses_simpan(){
		$no_rawat=$this->input->post('no_rawat');
		$nam_pasien=$this->input->post('nam_pasien');
		$kamar=$this->input->post('kamar');
		$tanggal=$this->input->post('tanggal');
		$diagnosa=$this->input->post('diagnosa_awal_masuk');
		$foto=$_FILE['foto'];
		if ($foto='') {}else{
			$config['upload_path']   ='./assets/foto';
			$config['allowed_types']  ='jpg|png|jpeg';

			$this->load->library('upload',$config);
				if (!$this->upload->do_upload('foto')) {
					echo "upload gagal"; die();
					# code...
				}else {
					$foto=$this->upload->data('file_name');
					# code...
				}
			# code...
		
		}

		$datasimpan=array('no_rawat'=>$no_rawat,'nam_pasien'=>$nam_pasien,'kamar'=>$kamar,
			'tanggal'=>$tanggal,'diagnosa_awal_masuk'=>$diagnosa,'foto'=>$foto);
		$save=$this->Rawatinap_model->insertOne($datasimpan);
		if ($save==TRUE) {
			redirect('rawatinap/index');
	      	# code...
			
		}
		else{
			echo "galgal di simpan";
		}
	}

	
	public function hapus($id){

		$this->Rawatinap_model->hapusaku($id);
		redirect('rawatinap/index');

	}

	public function edit_data($whare){
		$data['title']='from register';
		$data['page']='input_update';
		$data['list']=$this->Rawatinap_model->Getdetail($whare);

	    $this->renderrawatinap($data);
		
	}


	public function edit(){    
  
		$no_rawat=$this->input->post('no_rawat');
		$nam_pasien=$this->input->post('nam_pasien');
		$kamar=$this->input->post('kamar');
		$tanggal=$this->input->post('tanggal');
		$diagnosa=$this->input->post('diagnosa_awal_masuk');
		$foto= $_FILE['foto'];
		if ($foto='') {}else{
			$config['upload_path']   ='./assets/foto';
			$config['allowed_types']  ='jpg|png|jpeg';

			$this->load->library('upload',$config);
				if (!$this->upload->do_upload('foto')) {
					echo "upload gagal"; die();
					# code...
				}else {
					$foto=$this->upload->data('file_name');
					# code...
				}
			# code...
		
		}

		$datasimpann=array('no_rawat'=>$no_rawat,'nam_pasien'=>$nam_pasien,'kamar'=>$kamar,
			'tanggal'=>$tanggal,'diagnosa_awal_masuk'=>$diagnosa,'foto'=>$foto);
		$savee=$this->Rawatinap_model->update($datasimpann);

		if ($savee==TRUE) {
			redirect('rawatinap/index');
	      	# code...
			
		}
		else{
			echo "galgal di simpan";
		}

		





	} 



	function json(){
		$this->load->library('datatables');
		$this->datatables->select('no_rawat,nam_pasien,kamar,tanggal,diagnosa_awal_masuk,foto');

		$this->datatables->add_column('edit',anchor('Rawatinap/edit/$1','Edit',array('class'=>'btn btn-danger btn-sm')),'no_rawat');

		$this->datatables->add_column('hapus',anchor('rawatinap/hapus/$1','Hapus',array('class'=>'btn btn-primary btn-sm')),'no_rawat');
		$this->datatables->from('pendaftaran_rawat_inap');

		return print_r($this->datatables->generate());
	}

	function insert_dumy(){
        // jumlah data yang akan di insert
		$jumlah_data = 100;
		for ($i=1;$i<=$jumlah_data;$i++){
			$data   =   array(
				"no_rawat"=>"1212121".$i,
				"nam_pasien"=>"reza",
				"kamar"=>'kamar',
				"tanggal"=>"08-65-67",
				"diagnosa_awal_masuk"=>"sakit"
			);
			
			$this->db->insert('pendaftaran_rawat_inap',$data); 
		}
		echo $i.' Data Berhasil Di Insert';
	}


	public function Export_rawatinap(){

		header("Content-type: application/vnd-ms-excel");
		header("Content-Disposition: attachment; filename=Data2.xls");

		$data['list']=$this->Rawatinap_model->getAll();
		$this->load->view('exportrawatinap/export_excel',$data);

		
	}


	public function export(){
		
		$data['list']=$this->Rawatinap_model->getAll();
		$this->load->view('exportrawatinap/export_rawatinap',$data);

	}	


	public function cetak_pdf(){
		ob_start();
		$data['list'] = $this->Rawatinap_model->coba();
		$this->load->view('exportrawatinap/view', $data);
		$html = ob_get_contents();
		ob_end_clean();
		
		require_once('./assets/html2pdf/html2pdf.class.php');
		$pdf = new HTML2PDF('P','A4','en');
		$pdf->WriteHTML($html);
		$pdf->Output('Data Siswa.pdf', 'D');
	}

	 function get_data_user()
    {
        $list = $this->Rawatinap_model->get_datatables();
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $field) {
            $no++;
            $row = array();
            $row[] = $no;
            $row[] = $field->no_rawat;
            $row[] = $field->nam_pasien;
            $row[] = $field->kamar;
            $row[] = $field->tanggal;
            $row[] = $field->diagnosa_awal_masuk;
            $row[] = $field->foto;


 
            $data[] = $row;
        }
 
        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->Rawatinap_model->count_all(),
            "recordsFiltered" => $this->Rawatinap_model->count_filtered(),
            "data" => $data,
        );
        //output dalam format JSON
        echo json_encode($output);
    }
}

?>
