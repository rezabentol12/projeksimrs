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


<?php echo form_open_multipart("rawatinap/proses_simpan");  ?>


<div class="card">
                  <div class="card-header">
                    <h4><?php echo $title; ?></h4>
                  </div>
                  <div class="card-body">
                    
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nomor rawat</label>
                      <div class="col-sm-12 col-md-7">
                    <input type="number" name="no_rawat"class="form-control">
                      
                      </div>
                    </div>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nama pasien</label>
                      <div class="col-sm-12 col-md-7">
                      		<input type="text" name="nam_pasien" class="form-control">
                       
                      </div>
                    </div>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Kamar</label>
                      <div class="col-sm-12 col-md-7">
                     <input type="text" name="kamar" class="form-control">
                      </div>
                    </div>

                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Tanggal</label>
                      <div class="col-sm-12 col-md-4">
                        <input type="date" name="tanggal" class="form-control">
                        
                      </div>
                  </div>
                       <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Diagnosa awal masuk</label>
                      <div class="col-sm-12 col-md-4">
                      <input type="text" name="diagnosa_awal_masuk" class="form-control">
                      
                        
                      </div>
                  </div>
                      <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Upload foto</label>
                      <div class="col-sm-12 col-md-4">
                      <input type="file" name="foto" class="form-control">
                      
                        
                      </div>
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



