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
               <!-- <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="glyphicon glyphicon-th-list"></i> Program Studi<span class="caret"></span></a>
                  <ul class="dropdown-menu">
          <li><a href='ti'> Teknik Industri</a></li>
          <li><a href='te'> Teknik Elektro</a></li>
          <li><a href='tf'> Teknik Informatika</a></li>
          <li><a href='tm'> Teknik Mesin</a></li>
          <li><a href='tp'> Teknik Penerbangan</a></li>                
                
                  </ul>
                </li> -->
                
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
        <div class="alert alert-success">
          <strong>Form Login Mahasiswa</strong>
        </div>
            <form action="<?= base_url('home') ?>" method="POST" class="form-horizontal" role="form">
                
                <div class="form-group">
                <label for="inputEmail3" class="col-sm-3 control-label">Username</label>
                <div class="input-group col-lg-9">
                    <div class="col-xs-8"><input type="text" class="form-control" id="inputPassword3" name="a" placeholder="Masukkan Username" required=""></div>
                </div>
                </div>

               <!-- <div class='form-group'>
                  <label for='inputEmail3' class='col-sm-3 control-label'>Level</label>
                <div class='input-group col-lg-9'>
                    <div class='col-xs-5'><select class='form-control' id='inputPassword3' name='level'>
                                <option value='0' selected>- Pilih Level -</option>
                                <option value='dosen'>Penulis</option>
                                <option value='reviewer'>Reviewer</option>
                                <option value='editor'>Editor</option>
                                </select></div>
                </div>
                </div> -->
                

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-3 control-label">Password</label>
                <div class="input-group col-lg-9">
                    <div class="col-xs-8">
                        <input type="password" class="form-control" id="inputPassword3" name="b" placeholder="Masukkan Password" required="">
                    </div>
                </div>
                </div>
                
                <div class="form-group">
                <label for="inputEmail3" class="col-sm-3 control-label"></label>
                <div class="col-sm-offset col-sm-9"><hr>
                  <button type="submit" name="login" class="btn btn-success">Login</button><br><br>
                </div>
                </div>
              </form>

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