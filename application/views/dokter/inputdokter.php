
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
	<h1><?php echo $title; ?></h1>



<?php echo form_open("dokter/proses_simpan");  ?>
<!-- <?php print_r($pegawai) ?> -->



<div class="card">
                  <div class="card-header">
                    <h4>Simple Summernote</h4>
                  </div>
                  <div class="card-body">
                    
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                      <div class="col-sm-12 col-md-7">
                      	<select name="kd_dokter" class="form-control">
                      	<?php foreach ($pegawai as $row) : ?>
     <option value="<?php echo $row['nik']; ?>"><?php echo $row['nik']; ?></option>
                         	<?php endforeach; ?>
                      	</select>
                      
                      </div>
                    </div>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Category</label>
                      <div class="col-sm-12 col-md-7">
                      		<input type="text" name="nm_dokter">
                       
                      </div>
                    </div>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Content</label>
                      <div class="col-sm-12 col-md-7">
                     <input type="text" name="jkl">

                      </div>
                    </div>

                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">tempat lahir</label>
                      <div class="col-sm-12 col-md-4">
                      	<input type="text" name="tempat_lahir">
                        
                      </div>
                  </div>
                       <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">golongan darah</label>
                      <div class="col-sm-12 col-md-4">
                      	<input type="text" name="gol_darah">
                      
                        
                      </div>
                  </div>
                      <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">agama</label>
                      <div class="col-sm-12 col-md-4">
                      <input type="text" name="agama">
                          
                      </div>
                  </div>
                      <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">alamat</label>
                      <div class="col-sm-12 col-md-4">
                       <input type="text" name="alamat">
                          
                      </div>
                  </div>
                      <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">nomor telpon</label>
                       <div class="col-sm-12 col-md-4">
                       <input type="text" name="nomor_telpon">
                          
                      </div>

                  </div>


                      <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">status_menikah</label>

                      <div class="col-sm-12 col-md-4">
                      	<input type="text" name="status_menikah">
                         
                      </div>
                  </div>

<!-- 
                      <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">kode sps</label>
                      <div class="col-sm-12 col-md-4">
                       <input type="text" name="kode_sps">
                          
                      </div>
                  </div> -->


                      <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">alumni</label>
                      <div class="col-sm-12 col-md-4">
                      <input type="text" name="alumni">
                          
                      </div>
                  </div>



                       <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">no ijin</label>
                      <div class="col-sm-12 col-md-4">
                   
                          <input type="text" name="no_ijn_praktek">
                      </div>
                  </div>







                         <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">status</label>
                      <div class="col-sm-12 col-md-4">
                   
                         <input type="hiden" name="status" value="1">
                      </div>
                  </div>


                      
	               <input type="submit" name="btn_simpan" value="simpan">
                      
                    </div>
                  </div>
          



	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
</div>


</body>
</html>