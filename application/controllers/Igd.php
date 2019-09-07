<?php 
/** 	
 * 
 */
class Igd extends CI_Controller
{
	
public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->model('Igd_model');

		# code...
	}


	public function index(){
       $data['page']='view';
       $data['list']= $this->Igd_model->getAll();
         $this->rederIgd($data);



         	# code...
         
	}

	public function rederIgd($data){
		$this->load->view('igdd/header');
			$this->load->view('igdd/maincontent',$data);
				$this->load->view('igdd/footer');


	}

	public function form_tampil(){
		$data['titlr']='form input';
		$data['page']='input';
		 $this->rederIgd($data);
		
	}
	public function proses_simpan(){
		$no_rekap=$this->input->post('no_rekap_medis');
		$nama_pasien=$this->input->post('nama_pasien');
		$jkl=$this->input->post('jenis_kelamin');
		$gol=$this->input->post('gol_darah');
		$tmp=$this->input->post('tmp_tgl_lahir');
		$umur=$this->input->post('umur');
		$nama_ibu=$this->input->post('nama_ibu');
		$nama_ayah=$this->input->post('nama_ayah');
		$penanggung=$this->input->post('penanggung_jawab');
		$alamat_penanggungjawab=$this->input->post('alamat_penanggung_jawab');
		$no_antrian=$this->input->post('no_antrian');
		$agama=$this->input->post('agama');
		$akes_asuransi=$this->input->post('askes_asuransi');
		$no_telepon=$this->input->post('no_telpon');
		$pertama_mendaftar=$this->input->post('pertama_mendaftar');
		$pekerjaan=$this->input->post('pekerjaan');
		$no_ktp=$this->input->post('no_ktp');
		$alamat=$this->input->post('alamat');
		$pekerjaan_penanggung_jawab=$this->input->post('pekerjaan_penanggung_jawab');
		

		$datasimpan=array('no_rekap_medis'=>$no_rekap,'nama_pasien'=>$nama_pasien,'jenis_kelamin'=>$jkl,'gol_darah'=>$gol,'tmp_tgl_lahir'=>$tmp,'umur'=>$umur,'nama_ibu'=>$nama_ibu,'nama_ayah'=>$nama_ayah,'penanggung_jawab'=>$penanggung,'alamat_penanggung_jawab'=>$alamat_penanggungjawab,'no_antrian'=>$no_antrian,'agama'=>$agama,'askes_asuransi'=>$akes_asuransi,'no_telpon'=>$no_telepon,'pertama_daftar'=>$pertama_mendaftar,'pekerjaan'=>$pekerjaan,'no_ktp'=>$no_ktp,'alamat'=>$alamat,'pekerjaan_penanggung_jawab'=>$pekerjaan_penanggung_jawab);



	  	$save=$this->Igd_model->insertOne($datasimpan);
	      if ($save==TRUE) {
	      	  redirect('Igd/index');
	      	# code...
	     
	      }
	      else{
	      	echo "galgal di simpan";
	      }
	  }


     public function hapus($id){
     	$this->Igd_model->hapus($id);
     	redirect('Igd/index');
     }

 function edit($no_rekap_medis)

    {    
        // check if the bayar_pemesanan exists before trying to edit it
        $data['pendaftaran_igd_ugd'] = $this->Igd_model->get_Igd($no_rekap_medis);
        
        if(isset($data['pendaftaran_igd_ugd']['no_rekap_medis']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $igd = array(
		'no_rekap_medis'=> $this->input->post('no_rekap_medis'),
		'nama_pasien'=> $this->input->post('nama_pasien'),
		'jenis_kelamin'=> $this->input->post('jenis_kelamin'),
		'gol_darah'=> $this->input->post('gol_darah'),
		'umur'=> $this->input->post('umur'),
		'nama_ibu'=> $this->input->post('nama_ibu'),
		'nama_ayah'=> $this->input->post('nama_ayah'),
		'penanggung_jawab'=> $this->input->post('penanggung_jawab'),
		'alamat_penanggung_jawab'=> $this->input->post('alamat_penanggung_jawab'),
		'no_antrian'=> $this->input->post('no_antrian'),
		'agama'=> $this->input->post('agama'),
		'askes_asuransi'=> $this->input->post('askes_asuransi'),
		'no_telpon'=> $this->input->post('no_telpon'),
		'pertama_daftar'=> $this->input->post('pertama_daftar'),
		'pekerjaan'=> $this->input->post('pekerjaan'),
		'no_ktp'=> $this->input->post('no_ktp'),
		'alamat'=> $this->input->post('alamat'),
		'pekerjaan_penanggung_jawab'=> $this->input->post('pekerjaan_penanggung_jawab'),
					
                );

               

           $anu=$this->Igd_model->update($no_rekap_medis,$igd);          
                redirect('Igd/index');
            }
            else
            {     
           $data['title']='listdokter';
           $data['page']='update';
           $data['_view'] = '$igd/update';
               $this->rederigd($data);
                
                  // $this->load->view('layouts/main',$data);
                   
                  

                
 
            }
        }
        else
           echo "gagal";
    } 


}


 ?>