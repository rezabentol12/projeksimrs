<?php 
/** 	
 * 
 */
class Rawat_jalan extends CI_Controller
{
	
public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->model('Rawatjalan_model');

		# code...
	}


	public function index(){
       $data['page']='view';
       $data['list']= $this->Rawatjalan_model->getAll();
         $this->rederrawatjalan($data);



         	# code...
         
	}

	public function rederrawatjalan($data){
		$this->load->view('rawatjalann/header');
			$this->load->view('rawatjalann/maincontent',$data);
				$this->load->view('rawatjalann/footer');


	}

	public function form_tampil(){
		$data['titlr']='form input';
		$data['page']='input';
		 $this->rederrawatjalan($data);
		
	}
	public function proses_simpan(){
		$no_rekap=$this->input->post('no_rekap_medis');
		$nama_pasien=$this->input->post('nama_pasien');
		$jkl=$this->input->post('janis_kelamin');
		$gol=$this->input->post('gol_darah');
		$tmp=$this->input->post('tmp_tgl_lahir');
		$umur=$this->input->post('umur');
		$nama_ibu=$this->input->post('nama_ibu');
		$nama_ayah=$this->input->post('nama_ayah');
		$penanggung=$this->input->post('penanggung_jawab');
		$alamat_penanggungjawab=$this->input->post('alamat_penanggung_jawab');
		$no_antrian=$this->input->post('no_antrian');
		$agama=$this->input->post('agama');
		$akes_asuransi=$this->input->post('akes_asuransi');
		$no_telepon=$this->input->post('no_telpon');
		$pertama_mendaftar=$this->input->post('pertama_mendaftar');
		$pekerjaan=$this->input->post('pekerjaan');
		$no_ktp=$this->input->post('no_ktp');
		$alamat=$this->input->post('alamat');
		$pekerjaan_penanggung_jawab=$this->input->post('pekerjaan_penanggung_jawab');
		

		$datasimpan=array('no_rekap_medis'=>$no_rekap,'nama_pasien'=>$nama_pasien,'janis_kelamin'=>$jkl,'gol_darah'=>$gol,'tmp_tgl_lahir'=>$tmp,'umur'=>$umur,'nama_ibu'=>$nama_ibu,'nama_ayah'=>$nama_ayah,'penanggung_jawab'=>$penanggung,'alamat_penanggung_jawab'=>$alamat_penanggungjawab,'no_antrian'=>$no_antrian,'agama'=>$agama,'akes_asuransi'=>$akes_asuransi,'no_telpon'=>$no_telepon,'pertama_mendaftar'=>$pertama_mendaftar,'pekerjaan'=>$pekerjaan,'no_ktp'=>$no_ktp,'alamat'=>$alamat,'pekerjaan_penanggung_jawab'=>$pekerjaan_penanggung_jawab);



	  	$save=$this->Rawatjalan_model->insertOne($datasimpan);
	      if ($save==TRUE) {
	      	  redirect('Rawat_jalan/index');
	      	# code...
	     
	      }
	      else{
	      	echo "galgal di simpan";
	      }
	  }


     public function hapus($id){
     	$this->Rawatjalan_model->hapus($id);
     	redirect('Rawat_jalan/index');
     }

 function edit($no_rekap_medis)

    {    
        // check if the bayar_pemesanan exists before trying to edit it
        $data['pendaftaran_rawat_jalan'] = $this->Rawatjalan_model->get_rawat_jalan($no_rekap_medis);
        
        if(isset($data['pendaftaran_rawat_jalan']['no_rekap_medis']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $Rawatjalan = array(
		'no_rekap_medis'=> $this->input->post('no_rekap_medis'),
		'nama_pasien'=> $this->input->post('nama_pasien'),
		'janis_kelamin'=> $this->input->post('janis_kelamin'),
		'gol_darah'=> $this->input->post('gol_darah'),
		'umur'=> $this->input->post('umur'),
		'nama_ibu'=> $this->input->post('nama_ibu'),
		'nama_ayah'=> $this->input->post('nama_ayah'),
		'penanggung_jawab'=> $this->input->post('penanggung_jawab'),
		'alamat_penanggung_jawab'=> $this->input->post('alamat_penanggung_jawab'),
		'no_antrian'=> $this->input->post('no_antrian'),
		'agama'=> $this->input->post('agama'),
		'akes_asuransi'=> $this->input->post('akes_asuransi'),
		'no_telpon'=> $this->input->post('no_telpon'),
		'pertama_mendaftar'=> $this->input->post('pertama_mendaftar'),
		'pekerjaan'=> $this->input->post('pekerjaan'),
		'no_ktp'=> $this->input->post('no_ktp'),
		'alamat'=> $this->input->post('alamat'),
		'pekerjaan_penanggung_jawab'=> $this->input->post('pekerjaan_penanggung_jawab'),
					
                );

               

           $anu=$this->Rawatjalan_model->update($no_rekap_medis,$Rawatjalan);          
                redirect('Rawat_jalan/index');
            }
            else
            {     
           $data['title']='listdokter';
           $data['page']='update';
           $data['_view'] = '$rawatjalan/update';
               $this->rederrawatjalan($data);
                
                  // $this->load->view('layouts/main',$data);
                   
                  

                
 
            }
        }
        else
           echo "gagal";
    } 


}


 ?>