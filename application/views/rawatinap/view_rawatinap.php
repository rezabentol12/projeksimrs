<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
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
      <div>
        <table id="table"  class="text-center">
          <thead>
            <tr>

              <th>NO RAWAT</th>
              <th>NAMA PASIEN</th>
              <th>KAMAR</th>
              <th>ALAMAT</th>
              <th>DIAGNOSA AWAL MASUK</th>
              <th>FOTO</th>
              <th>ACTION</th>
               <th>ACTION</th>
              
              




            </tr>
          </thead>
          

          <?php
          foreach ($list->result() as $row) {?>
            <tbody class="table table-striped">

              <tr>
                <td><?php echo $row->no_rawat;?></td>
                <td><?php echo $row->nam_pasien;?></td>
               <td><?php echo $row->kamar;?></td>
              <td>	<?php echo $row->tanggal;?></td>
              <td> <?php echo $row->diagnosa_awal_masuk;?></td>
              <td><img src="<?php echo base_url(); ?>assets/foto/<?php echo $row->foto;?>" width="90px" height="90px">
              </td>
              <td><a href="#" class="btn btn-secondary">Detail</a>

                <a href="<?php echo site_url("rawatinap/hapus/$row->no_rawat")  ?>" class="btn btn-danger">delete</a>
                <a href="<?php echo site_url("rawatinap/edit_data/$row->no_rawat")?>" class="btn btn-danger">upadte</a>
              </td>


            </tr>
          </tbody>
        <?php } ?>

          <!--   <tbody class="table table-striped">
              
            <script type="text/javascript">

            var save_method; //for save method string
            var table;

            $(document).ready(function() {
                //datatables
                table = $('#table').DataTable({ 
                    "processing": true, //Feature control the processing indicator.
                    "serverSide": true, //Feature control DataTables' server-side processing mode.
                    "order": [], //Initial no order.
                    // Load data for the table's content from an Ajax source
                    "ajax": {
                      "url": '<?php echo site_url('rawatinap/json'); ?>',
                      "type": "POST"
                    },
                    //Set column definition initialisation properties.
                    "columns": [
                        {"data": "no_rawat",width:170},
                        {"data": "nam_pasien",width:100},
                        {"data": "kamar",width:100},
                        {"data": "tanggal",width:100},
                        {"data": "diagnosa_awal_masuk",width:100},
                        {"data": "foto",width:100},
                        {"data": "edit",width:100},
                        {"data": "hapus",width:100}
                        
                    ],
                    // "columnDefs": [
                    // { 
                    //   "targets": [ 0 ], 
                    //   "orderable": false, 
                    // },
                    // ],

                  });

              });
            </script>
          </tbody> -->
     <!--      <tbody>
            <script type="text/javascript">
    var table;
    $(document).ready(function() {
 
        //datatables
        table = $('#table').DataTable({ 
 
            "processing": true, 
            "serverSide": true, 
            "order": [], 
             
            "ajax": {
                "url": "<?php echo site_url('rawatinap/get_data_user')?>",
                "type": "POST"
            },
 
             
            "columnDefs": [
            { 
                "targets": [ 0 ], 
                "orderable": false, 
            },
            ],
 
        });
 
    });
 
</script>

            
</tbody> -->





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