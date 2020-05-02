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
    <script type="text/javascript" src="<?= base_url('assets/js/datatables.min.js') ?>"></script>


    </head>

    <body data-gr-c-s-loaded="true" class="after-login">
  <div class="container-fluid">
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

          <div id="navbar-custome" class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li>
                  <a class="header-logo" href="<?= base_url('index') ?>">
                    <img style="max-width: 80px;" src="<?= base_url('assets/images/logo.png'); ?>">
                  </a>
                </li>
                <li><a href="<?= base_url('home') ?>">Home Page</a></li>
                <li><a href="<?= base_url('form_biodata') ?>">Form Biodata</a></li>
                <li><a href="<?= base_url('list_yudisium') ?>">Daftar Syarat Yudisium</a></li>
              </ul>

              <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                  <a href="<?= base_url('logout_user') ?>">Logout</a>
                </li>
              </ul>

 
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </nav>
      <?php foreach ($user as $data):
        $nim = $data['nim'];
        $nama = $data['nama'];
      ?>
      <div class="jumbotron jumbotron-fluid">
        <div class="container">
          <h1 class="display-4">Selamat Datang,</h1>
          <h4 class="display-3"><?= $nama; ?></h4>
        </div>
      </div>
      <?php endforeach; ?>
