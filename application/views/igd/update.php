<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>

	<style type="text/css">

	::selection { background-color: #E13300; color: white; }
	::-moz-selection { background-color: #E13300; color: white; }

	body {
		background-color: #fff;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
	}

	h1 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}

	#body {
		margin: 0 15px 0 15px;
	}

	p.footer {
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}

	#container {
		margin: 10px;
		border: 1px solid #D0D0D0;
		box-shadow: 0 0 8px #D0D0D0;
	}
	</style>
</head>
<body>


<div id="container">


<?php echo form_open('Igd/edit/'.$pendaftaran_igd_ugd['no_rekap_medis'],array("class"=>"form-horizontal")); ?>


<div class="card">
                  <div class="card-header">
                  
                  </div>
                  <div class="card-body">
                    
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nomor REKAP</label>
                      <div class="col-sm-12 col-md-7">
                    <input type="number" name="no_rekap_medis"class="form-control" value="<?php echo ($this->input->post('no_rekap_medis') ? $this->input->post('no_rekap_medis') : $pendaftaran_igd_ugd['no_rekap_medis']); ?>">
                      
                      </div>
                    </div>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nama pasien</label>
                      <div class="col-sm-12 col-md-7">
                      		<input type="text" name="nama_pasien" class="form-control" value="<?php echo ($this->input->post('nama_pasien') ? $this->input->post('nama_pasien') : $pendaftaran_igd_ugd['nama_pasien']); ?>">
                       
                      </div>
                    </div>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Jenis kelamin</label>
                      <div class="col-sm-12 col-md-7">
                     <input type="text" name="jenis_kelamin" class="form-control" value="<?php echo ($this->input->post('jenis_kelamin') ? $this->input->post('jenis_kelamin') : $pendaftaran_igd_ugd['jenis_kelamin']); ?>">
                      </div>
                    </div>

                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Tanggal</label>
                      <div class="col-sm-12 col-md-4">
                        <input type="date" name="gol_darah" class="form-control" value="<?php echo ($this->input->post('gol_darah') ? $this->input->post('gol_darah') : $pendaftaran_igd_ugd['gol_darah']); ?>">
                        
                      </div>
                  </div>
                       <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Tempat tanggal lahir</label>
                      <div class="col-sm-12 col-md-4">
                      <input type="text" name="tmp_tgl_lahir" class="form-control" value="<?php echo ($this->input->post('tmp_tgl_lahir') ? $this->input->post('tmp_tgl_lahir') : $pendaftaran_igd_ugd['tmp_tgl_lahir']); ?>">
                      
                        
                      </div>
                  </div>

                      <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">umur</label>
                      <div class="col-sm-12 col-md-4">
                      <input type="text" name="umur" class="form-control" value="<?php echo ($this->input->post('umur') ? $this->input->post('umur') : $pendaftaran_igd_ugd['umur']); ?>">
                      
                        
                      </div>
                  </div>
          

<div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">nama ibu</label>
                      <div class="col-sm-12 col-md-4">
                      <input type="text" name="nama_ibu" class="form-control"value="<?php echo ($this->input->post('nama_ibu') ? $this->input->post('nama_ibu') : $pendaftaran_igd_ugd['nama_ibu']); ?>">
                       
                        
                      </div>
                  </div>
          

<div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">nama ayah</label>
                      <div class="col-sm-12 col-md-4">
                      <input type="text" name="nama_ayah" class="form-control"value="<?php echo ($this->input->post('nama_ayah') ? $this->input->post('nama_ayah') : $pendaftaran_igd_ugd['nama_ayah']); ?>">
                      
                        
                      </div>
                  </div>
          

<div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">penanggung jawab</label>
                      <div class="col-sm-12 col-md-4">
                      <input type="text" name="penanggung_jawab" class="form-control" value="<?php echo ($this->input->post('penanggung_jawab') ? $this->input->post('penanggung_jawab') : $pendaftaran_igd_ugd['penanggung_jawab']); ?>">
                      
                        
                      </div>
                  </div>
          

<div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">alamat penanggung jawab</label>
                      <div class="col-sm-12 col-md-4">
                      <input type="text" name="alamat_penanggung_jawab" class="form-control" value="<?php echo ($this->input->post('alamat_penanggung_jawab') ? $this->input->post('alamat_penanggung_jawab') : $pendaftaran_igd_ugd['alamat_penanggung_jawab']); ?>">
                      
                        
                      </div>
                  </div>
          

<div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">no anrian </label>
                      <div class="col-sm-12 col-md-4">
                      <input type="text" name="no_antrian" class="form-control" value="<?php echo ($this->input->post('no_antrian')? $this->input->post('no_antrian') : $pendaftaran_igd_ugd['no_antrian']); ?>">
                      
                        
                      </div>
                  </div>
          

<div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">agama</label>
                      <div class="col-sm-12 col-md-4">

                      <input type="text" name="agama" class="form-control"value="<?php echo ($this->input->post('agama') ? $this->input->post('agama') : $pendaftaran_igd_ugd['agama']); ?>">
                      
                        
                      </div>
                  </div>
          

<div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">akes_asuransi</label>
                      <div class="col-sm-12 col-md-4">
                      <input type="text" name="askes_asuransi" class="form-control"value="<?php echo ($this->input->post('askes_asuransi') ? $this->input->post('askes_asuransi') : $pendaftaran_igd_ugd['askes_asuransi']); ?>">
                      
                        
                      </div>
                  </div>
          

<div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">nomot Telepon</label>
                      <div class="col-sm-12 col-md-4">
                      <input type="text" name="no_telpon" class="form-control"value="<?php echo ($this->input->post('no_telpon') ? $this->input->post('no_telpon') : $pendaftaran_igd_ugd['no_telpon']); ?>">
                      
                        
                      </div>
                  </div>
          

<div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">pertama daftar</label>
                      <div class="col-sm-12 col-md-4">
                      <input type="text" name="pertama_daftar" class="form-control"value="<?php echo ($this->input->post('pertama_daftar') ? $this->input->post('pertama_daftar') : $pendaftaran_igd_ugd['pertama_daftar']); ?>">
                      
                        
                      </div>
                  </div>
          

<div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Pekerjaan</label>
                      <div class="col-sm-12 col-md-4">
                      <input type="text" name="pekerjaan" class="form-control"value="<?php echo ($this->input->post('pekerjaan') ? $this->input->post('pekerjaan') : $pendaftaran_igd_ugd['pekerjaan']); ?>">
                      
                        
                      </div>
                  </div>
          

<div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">no ktp</label>
                      <div class="col-sm-12 col-md-4">
                      <input type="text" name="no_ktp" class="form-control"value="<?php echo ($this->input->post('no_ktp') ? $this->input->post('no_ktp') : $pendaftaran_igd_ugd['no_ktp']); ?>">
                      
                        
                      </div>
                  </div>
          

<div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Diagnosa awal masuk</label>
                      <div class="col-sm-12 col-md-4">
                      <input type="text" name="alamat" class="form-control"value="<?php echo ($this->input->post('alamat') ? $this->input->post('alamat') : $pendaftaran_igd_ugd['alamat']); ?>">
                      
                        
                      </div>
                  </div>
          

<div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">pekerjaan penanggung jawab</label>
                      <div class="col-sm-12 col-md-4">
                      <input type="text" name="pekerjaan_penanggung_jawab" class="form-control"value="<?php echo ($this->input->post('pekerjaan_penanggung_jawab') ? $this->input->post('pekerjaan_penanggung_jawab') : $pendaftaran_igd_ugd['pekerjaan_penanggung_jawab']); ?>">
                      
                        
                      </div>
                
          


          


                      
	               <input type="submit" name="btn_simpan" value="simpan">
                      </form>
                    </div>
                  </div>
          



	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
</div>


</body>
</html>



	

</body>
</html>



