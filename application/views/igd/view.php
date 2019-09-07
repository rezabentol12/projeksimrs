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
   <div>
    <div class="card-header">
      <h4>Sortable Table</h4>
      <div class="card-header-action">
        <form>
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Search">
            <div class="input-group-btn">
              <button class="btn btn-primary"><i class="fas fa-search"></i></button>
            </div>
          </div>
        </form>
      </div>
    </div>
    

    <div class="card-body p-0">

      <div class="table-responsive">
        <table class="table table-striped" id="sortable-table">
          <thead>
            <tr>
              <th class="text-center">
                <i class="fas fa-th"></i>
              </th>
              <th>No rekamedis</th>
              <th>nama pasien</th>
              <th>jenis kelamin</th>
              <th>golongan darah</th>
              <th>tempat tanggal lahir</th>
              <th>umur</th>
              <th>Action</th>umur
<th>nama_ibu</th>
<th>nama_ayah</th>
<th>penanggung_jawab</th>
<th>alamat_penanggung_jawab</th>
<th>no_antrian</th>
<th>agama</th>
<th>askes_asuransi</th>
<th> no_telpon</th>
<th> pertama_daftar</th>
<th> pekerjaan </th>
 <th> no_ktp</th>
<th>   alamat </th>
<th>  pekerjaan_penanggung_jawab</th>
              
            </tr>
          </thead>
          <tbody>

           <?php
           foreach ($list->result() as $row) {
                        	 	# code...
            ?>

            <tr>
              <td>
                <div class="sort-handler">
                  <i class="fas fa-th"></i>
                </div>
              </td>
              <td><?php echo $row->no_rekap_medis;?></td>
              <td class="align-middle">
               <?php echo $row->nama_pasien;?>
             </td>
             <td><?php echo $row->jenis_kelamin;?></td>
             <td>	<?php echo $row->gol_darah;?></td>
             <td> <?php echo $row->tmp_tgl_lahir;?></td>
             <td> <?php echo $row->umur;?></td>
             <td> <?php echo $row->nama_ibu;?></td>
             <td> <?php echo $row->nama_ayah;?></td>
             <td> <?php echo $row->penanggung_jawab;?></td>
             <td> <?php echo $row->alamat_penanggung_jawab;?></td>
             <td> <?php echo $row->no_antrian;?></td>
             <td> <?php echo $row->agama;?></td>
             <td> <?php echo $row->askes_asuransi;?></td>
             <td> <?php echo $row->no_telpon;?></td>
             <td> <?php echo $row->pertama_daftar;?></td>
             <td> <?php echo $row->pekerjaan;?></td>
             <td> <?php echo $row->no_ktp;?></td>  
             <td> <?php echo $row->alamat;?></td> 
             <td> <?php echo $row->pekerjaan_penanggung_jawab;?></td>

             <td><a href="#" class="btn btn-secondary">Detail</a>

               <a href="<?php echo site_url("Igd/hapus/$row->no_rekap_medis")  ?>" class="btn btn-danger">delete</a>
               <a href="<?php echo site_url("Igd/edit/$row->no_rekap_medis")  ?>" class="btn btn-danger">upadte</a>
             </td>


           </tr>
         </tbody>
       <?php } ?>

     </table>

   </div>
 </div>
</div>





<div>

</div>
</div>

<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
</div>

</body>
</html>