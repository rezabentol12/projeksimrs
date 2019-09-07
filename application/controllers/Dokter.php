<?php 

/**
 * 
 */
class Dokter extends CI_controller
{
	
	public function __construct()
	{
		parent::__construct();

		$this->load->database();
		$this->load->model('dokter_model');
		$this->load->model('pegawaimodl');

		# code...
	}
	publiC function index(){
		$data['title']='listdokter';
		$data['page']='viewdokter';
		$data['list']=$this->dokter_model->getAll();
		$this->renderDokter($data);
		

	}
	public function renderDokter($data){
		$this->load->view('partical/header');
		$this->load->view('	partical/maincontent',$data);
		$this->load->view('partical/footer');

	}
	
	public function form_tampil(){
		$data['title']='from imput dokter';
		$data['page']='inputdokter';
	    $data['pegawai']=$this->pegawaimodl->getAll()->result_array();
		$data['title']='from input dokter';
		$this->renderDokter($data);
	}
	public function proses_simpan (){
		$kd=$this->input->post('kd_dokter');
		$name=$this->input->post('nm_dokter');
		$jkl=$this->input->post('jkl');
		$tgllahir=$this->input->post('tgl_lahir');
		$goldarah=$this->input->post('gol_darah');
		$agama=$this->input->post('agama');
		$notelp=$this->input->post('nomor_telpon');
		$stnikah=$this->input->post('status_nikah');
		// $kdsps=$this->input->post('kode_sps');
		$alumni=$this->input->post('alumni');	
		$noijin=$this->input->post('no_ijn_praktek');
		$status=$this->input->post('status');
		$datasimpan= array('kd_dokter'=>$kd,'nm_dokter'=>$name,'jk'=>$jkl,'tgl_lahir'=>$tgllahir,'gol_drh'=>$goldarah,'agama'=>$agama,'no_telp'=>$notelp,'stts_nikah'=>$stnikah,'alumni'=>$alumni,'no_ijn_praktek'=>$noijin,'status'=>$status);

		$save=$this->dokter_model->insertOne($datasimpan);
		if ($save==TRUE) {
			echo "data berhasil di simpan";
			# code...
		}
		else{
			echo "data gagal di simpan";
		}
		
	}
	public function hapus($id){
		$this->dokter_model->hapusaku($id);
	}
}

 ?>