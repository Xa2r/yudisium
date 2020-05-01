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

    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;400&family=Roboto&display=swap" rel="stylesheet">

    <!-- FontAwesome -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/fonts/fontawesome/css/all.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/fonts/fontawesome/css/all.min.css">

    <script type="text/javascript" src="<?= base_url('assets/js/datatables.min.js') ?>"></script>


    </head>

    <body data-gr-c-s-loaded="true">
  <div class="container-fluid">
      <nav class="navbar home">      
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
                <li>
                  <a class="header-logo" href="<?= base_url('index') ?>">
                    <img style="max-width: 80px;" src="<?= base_url('assets/images/logo.png'); ?>">
                  </a>
                </li>
              </ul>


              <ul class="nav navbar-nav navbar-right">
                  <form class="navbar-form navbar-left" role="search" action="index.php" method="POST">
                    <div class="form-group">
                      <input type="text" name="cari" class="form-control cari" placeholder="Cari ...">
                    </div>
                    <button type="submit" class="btn btn-default">Search</button>
                  </form>
              </ul>


              </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </nav>
      <div class="jumbotron jumbotron-fluid">
        <div class="container">
          <h1 class="display-4">E-Yudisium</h1>
          <h4 class="display-3">Sekolah Tinggi Teknologi Adisutjipto</h4>
          <div class="btn-popup">
            <a href="" class="btn btn-success btn-rounded mb-4" data-toggle="modal" data-target="#modalLoginForm">Silahkan Login Menggunakan<br>Akun Portal Mahasiswa Anda.</a>
          </div>
        </div>
      </div>

      <div class="page-main home">
        <div class="post text">
          <div class="row">
          <div class="col-md-12">
            <article> 
            
              <h1 class="title">SELAMAT DATANG DI SYSTEM YUDISIUM ONLINE</h1>
            <div class="image-rule"><img src="<?= base_url('assets/images/alur.png') ?>" style="width: 100%;"></div><br><hr><br>
            </article>
          </div>
        </div>    
        </div>
        </div>
      </div>

    <!-- Popup login  -->

    <div class="modal fade login" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
      aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header text-center">
            <h4 class="modal-title w-100 font-weight-bold">Sign in</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body mx-3">
          <?php $this->load->view('admin/template/flash-message'); ?>
            <form action="<?= base_url('login') ?>" method="POST" class="form-horizontal" role="form">
                
                <div class="form-group">
                  <label for="id_user" class="col-sm-3 control-label"><i class="fas fa-user-alt"></i></label>
                  <div class="input-group col-lg-9">
                      <div class="col-xs-8"><input type="text" class="form-control" id="id_user" name="id_user" placeholder="Masukkan NIM" required=""></div>
                  </div>
                </div>            

                <div class="form-group">
                  <label for="password" class="col-sm-3 control-label"><i class="fas fa-lock"></i></label>
                  <div class="input-group col-lg-9">
                      <div class="col-xs-8">
                          <input type="password" class="form-control" id="password" name="password" placeholder="Masukkan Password" required="">
                      </div>
                  </div>
                </div>
                
                <div class="form-group tombol">
                  <div class="col-sm-offset col-sm-9">
                    <button type="submit" name="login" class="btn btn-success">Login</button><br><br>
                  </div>
                </div>
              </form>

        </div>
      </div>
    </div>
  </div>

  <!-- footer -->
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