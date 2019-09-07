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
                    <a href="<?php echo site_url('rawatinap/cetak_pdf'); ?>">Export ke cetak_pdf</a><br><br>
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
                      <table  border="1">
                        <thead>
                          <tr>
                          
                            
                           
                            <th>Members</th>
                            <th>Due Date</th>
                            <th>Status</th>
                             <th>Status</th>
                             <th>Status</th>
                            
                          
                          </tr>
                        </thead>
                        <tbody>

                        	<?php
                        	foreach ($list->result() as $row) {
                        	 ?>

                          <tr>
                            <td><?php echo $row->no_rawat;?></td>
                            <td class="align-middle">
                          	<?php echo $row->nam_pasien;?>
                            </td>
                            <td>
                            		<?php echo $row->kamar;?>
                              
                            </td>
                            <td>	<?php echo $row->tanggal;?></td>
                            <td> <?php echo $row->diagnosa_awal_masuk;?></td>
                           

                            
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