<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<html lang="en" class="gr__stta_name"><head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">
    <title>E-Yudisium STT Adisutjipto</title>
    <link href="<?= base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet">
    <link href="<?= base_url('assets/css/style.css') ?>" rel="stylesheet">
    <link href="<?= base_url('assets/css/datepicker.css') ?>" rel="stylesheet">
    <script src="<?= base_url('assets/js/jquery.js') ?>"></script>

    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/datatables.min.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/jquery.dataTables.min.css') ?>">

    <script type="text/javascript" src="<?= base_url('assets/js/datatables.min.js') ?>"></script>

    </head>

    <body data-gr-c-s-loaded="true">
  <div class="container">
    <img style="width:100%; margin-top:20px" src="<?= base_url('assets/images/header.png') ?>">
              <nav class="navbar navbar-inverse">      
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
          </div>

          <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
              <li><a href="<?= base_url('home') ?>"><i class="glyphicon glyphicon-home"></i> Home Page</a></li>
                <li><a href="<?= base_url('form_biodata') ?>"><i class="glyphicon glyphicon-th"></i> Form Biodata</a></li>
                <li><a href="<?= base_url('list_yudisium') ?>"><i class="glyphicon glyphicon-file"></i> Daftar Syarat Yudisium</a></li>
              </ul>

              <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                  <a href="<?= base_url('index') ?>">Logout</a>
                </li>
              </ul>

 
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </nav>

  <div class="post text">
    	
<div class="row">
    <div class="col-md-12">
        <article>   
        <div class="alert alert-success">
        <strong>Daftar File Persyaratan Yudisium Anda </strong></div>
       <form method="post">
          
        <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Daftar Yudisium</h4>
        </div>
        <div class="modal-body">
          <p>Silahkan Tekan Tombol Daftar Untuk Medaftar Yudisium.</p>
          <button type="submit" name="daftar" class="btn btn-primary" >Daftar</button>
          
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

        </form>
      
          <table class='table table-condensed table-bordered'>
              <thead>
                <tr class='alert alert-success'>
                    <th scope='row'>No</th> 
                    <th>Kategori Persyaratan</th>   
                    <th>Status Berkas</th>                
                    <th>Status Verifikasi</th>         
                    <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                
              <?php
                $no = 1; 
                foreach ($kategori as $data):
                  $nama_kategori = $data['nama_kategori'];
                  $status = $data['status'];
              ?>
                
            <tr>

              <td><?= $no; ?></td>
                  <td><?= $nama_kategori; ?></td>
                  <?php if ($status == 'A'): ?>  
                      <td align='center'><span class='text-info'><i class='glyphicon glyphicon-ok'></i></span></td>
                  <?php else : ?>
                  <td align='center'><span class='text-danger'><i class='glyphicon glyphicon-remove'></i></span></td>
                  <?php endif; ?>
                  <?php if($request) : ?>
                    <?php foreach ($request as $index => $value): ?>
                      <?php if ($value->nama_Category == $nama_kategori): ?>
                        <?php foreach ($value->mahasiswa as $child) : ?>
                          <?php if ($child->request == 1): ?>
                            <td align='center'><span class='text-info'><i class='glyphicon glyphicon-ok'></i></span></td>
                          <?php else : ?>
                            <td align='center'><span class='text-danger'><i class='glyphicon glyphicon-remove'></i></span></td>
                          <?php endif; ?>
                        <?php endforeach; ?>
                      <?php endif; ?>
                    <?php endforeach; ?>
                  <?php else : ?>
                    <td align='center'><span class='text-danger'><i class='glyphicon glyphicon-remove'></i></span></td>
                  <?php endif; ?>
                  <td align="left"> <a href="" name="edit" class="btn btn-primary sm" data-toggle="tooltip" data-placement="left" title="Unggah"><span class="glyphicon glyphicon-open"></span></a>
                  </td>      
                </tr>
                <?php
                    $no++;
                    endforeach; ?>
              </tbody>
            </table>
        </article>
    </div>
</div>

    
    </div>
</div>

</body>
</html>

<footer style="background:#f4f4f4; border-top:5px solid #e3e3e3; padding:25px">
          <div class="container">
              <div class="row">
                      <p class="footer" style="text-align:center">
                        Copyright © 2016 E-Yudisium System<br>
                      </p>
              </div>
          </div>
  </footer>



  <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?= base_url('assets/js/prettify.js') ?>"></script>

    <script src="<?= base_url('assets/js/bootstrap.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/bootstrap-datepicker.js') ?>"></script>
    <script type="text/javascript">
        // When the document is ready
        $(document).ready(function () {
          $('#datepicker1').datepicker({
              format: "dd-mm-yyyy"
          });  
        });

        $(document).ready(function () {
          $('#datepicker2').datepicker({
              format: "dd-mm-yyyy"
          });  
        });

        $(document).ready(function () {
          $('#datepicker3').datepicker({
              format: "dd-mm-yyyy"
          });  
        });

        $(document).ready(function () {
          $('#datepicker4').datepicker({
              format: "dd-mm-yyyy"
          });  
        });

        $(document).ready(function () {
          $('#datepicker5').datepicker({
              format: "dd-mm-yyyy"
          });  
        });

        $(document).ready(function () {
          $('#datepicker6').datepicker({
              format: "dd-mm-yyyy"
          });  
        });

        $(document).ready(function () {
          $('#datepicker7').datepicker({
              format: "dd-mm-yyyy"
          });  
        });

        $(document).ready(function () {
          $('#datepicker8').datepicker({
              format: "dd-mm-yyyy"
          });  
        });

        $(document).ready(function () {
          $('#datepicker2').datepicker({
              viewMode: 'years',
              format: "mm-yyyy"
          });  
        });
      </script>

  

</body><span class="gr__tooltip"><span class="gr__tooltip-content"></span><i class="gr__tooltip-logo"></i><span class="gr__triangle"></span></span></html>
