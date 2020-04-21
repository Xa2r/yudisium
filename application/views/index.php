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
                <li><a href="<?= base_url('index') ?>"><i class="glyphicon glyphicon-home"></i> Home Page</a></li>


                <li><a href="<?= base_url('login') ?>"><i class="glyphicon glyphicon-off"></i> Login</a></li>
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



      <div class="post text">
      <div class="row">
  <div class="col-md-12">
    <article> 
    
      <h1 class="title">SELAMAT DATANG DI SYSTEM YUDISIUM ONLINE</h1>
      <p class="paragraph" style="text-align:center">
      <a class="pull-center btn btn-success btn-md" href="<?= base_url('login') ?>">Silahkan LOGIN menggunakan akun Portal Mahasiswa anda.</a>
    </p>
    <br><br>
    <center><img src="<?= base_url('assets/images/alur.png') ?>" width="1024"></center><br><hr><br>
          <nav>
            <ul class="pagination">
                          </ul>
          </nav>
    </article>
  </div>
</div>    
    </div>
</div> <!-- /container -->



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