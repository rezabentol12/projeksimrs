 <!DOCTYPE html>
 <html>
 <head>
   <title></title>
   <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Layout &rsaquo; Top Navigation &mdash; Stisla</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

  <!-- CSS Libraries -->

  <!-- Template CSS -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/components.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.13/js/dataTables.bootstrap.min.js"></script>

 </head>
 <body>
 

 <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Top Navigation</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
              <div class="breadcrumb-item"><a href="#">Layout</a></div>
              <div class="breadcrumb-item">Top Navigation</div>
            </div>
          </div>

          <div class="section-body">
        
            <div class="card">
              <div class="card-header">
                
                <a href="rawatinap/Export_rawatinap" class="btn btn-danger">Export excel</a>
                <a href="rawatinap/cetak_pdf" class="btn btn-primary">Export pdf</a>
              </div>
              <div class="card-body">
                <p><?php 
                    if ($page=="view_rawatinap") {
                      $data['list']=$list;
                      $this->load->view('rawatinap/view_rawatinap');
                      # code...
                    }elseif ($page=='input_inap') {
                     
                      $this->load->view('rawatinap/input_inap');
                      # code...
                    }elseif ($page=='input_update') {
                        $data['list']=$list;
                     
                      $this->load->view('rawatinap/input_update');
                      # code...
                    
}
                 ?></p>
              </div>
              <div class="card-footer bg-whitesmoke">
                This is card footer
              </div>
            </div>
          </div>
        </section>
      </div>
      
       <!-- General JS Scripts -->
  
   </body>
   </html>