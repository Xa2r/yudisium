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
</div>

<div class="container">
	<div class="row">
	<div class="col-md-12">
		<article>			
		<div class="alert alert-danger">
	        Pengisian Biodata Yudisium. <strong>ISI DATA DENGAN BENAR SEBAGAI DATA IJAZAH ANDA.</strong>
	    </div>
	    						<form action="mahasiswa/tambah_biodata.php" method="POST" class="form-horizontal" role="form">
							  <div class="form-group">
							  <label class="col-sm-2 control-label">NIM</label>
								<div class="input-group col-lg-9">
								  <div class="col-md-12"><input type="text" class="form-control" name="nim">
								  	<input type="hidden" name="nim">
								  </div>
								</div>
							  </div>
							  <div class="form-group">
							  <label class="col-sm-2 control-label">Program Studi</label>
								<div class="input-group col-md-9">
								  <div class="col-md-12"><input type="text" class="form-control " name="jurusan" required=""></div>
								</div>
							  </div>

							  <div class="form-group">
							  <label class="col-md-2 control-label">Nama Lengkap</label>
								<div class="input-group col-md-9">
								  <div class="col-md-12"><input type="text" class="form-control " name="nama" required=""></div>
								</div>
							  </div>

							  <div class="form-group">
							  <label class="col-sm-2 control-label">Tempat Lahir</label>
								<div class="input-group col-lg-9">
								  <div class="col-lg-8"><input type="text" class="form-control " name="tmp_lahir" required=""></div>
								</div>
							  </div>
							  
                           <div class="form-group">
							  	<label class="col-sm-2 control-label">Tanggal Lahir</label>
								<div class="input-group col-lg-9">
								  	<div class="col-lg-12"><input type="text" class="form-control" name="tgl_lahir" required=""></div>
								</div>
							  </div>
							  
							  <div class="form-group">
							  	<label class="col-sm-2 control-label">Alamat</label>
								<div class="input-group col-lg-9">
								  	<div class="col-lg-12"><textarea style="width:100%; height:80px" class="form-control" name="alamat" required=""></textarea></div>
								</div>
							  </div>
							  
							  <div class="form-group">
								<label class="col-sm-2 control-label">Agama</label>
								<div class="input-group col-lg-9">
								  	<div class="col-md-10">
                                      <select name="agama" class="form-control" required="">
                                        <option value="0"></option>
                                        <option value="1">ISLAM</option>
                                        <option value="2">KATHOLIK</option>
                                        <option value="3">PROTESTAN</option>
                                        <option value="4">HINDU</option>
                                        <option value="5">BUDHA</option>
                                        <option value="6">LAINNYA</option>
                                      </select>
                                  	</div>
								</div>
							  </div>
          
          					<div class="form-group">
							  <label for="inputEmail3" class="col-sm-2 control-label">No Handphone</label>
								<div class="input-group col-lg-7">
								  <div class="col-md-10"><input type="number" class="form-control " name="hp" placeholder="nomorhp" required=""></div>
								</div>
							  </div>
          
          					<div class="form-group">
							  <label class="col-sm-2 control-label">Email</label>
								<div class="input-group col-lg-7">
								  <div class="col-lg-8"><input type="email" class="form-control " name="email" value="" placeholder="email" required=""></div>
								</div>
							  </div>
          
          					<div class="form-group">
							  <label class="col-sm-2 control-label">Asal Sekolah (SMA/SMK/MA)</label>
								<div class="input-group col-lg-7">
								  <div class="col-lg-8"><input type="text" class="form-control " name="nm_sekolah"  placeholder="Nama SMA" required=""></div>
								</div>
							  </div>
          
          					<div class="form-group">
							  	<label class="col-sm-2 control-label">Jenis Kelamin</label>
								<div class="col-lg-9">
                                <input type="radio" class="radio-inline" name="jk" value="L" checked="">Laki - Laki
								<input type="radio" class="radio-inline" name="jk" value="P">Perempuan		
								</div>
							  </div>
          
          					<div class="form-group">
							  	<label class="col-sm-2 control-label">Status</label>
								<div class="col-lg-9">
									<input type="radio" name="status" id="optionsRadios2" value="BK" class="radio-inline">Belum Menikah
									<input type="radio" name="status" id="optionsRadios2" value="K" class="radio-inline">Menikah
								</div>
							</div>
          					
          					<div class="form-group">
							  <label class="col-sm-2 control-label">Nama Orang Tua</label>
								<div class="input-group col-lg-7">
								  <div class="col-md-10"><input type="text" class="form-control " name="nama_ortu"  placeholder="nama_ortu" required=""></div>
								</div>
							  </div>
          
          					<div class="form-group">
							  	<label for="inputEmail3" class="col-sm-2 control-label">Alamat Orang Tua</label>
								<div class="input-group col-lg-9">
								  	<div class="col-lg-12"><textarea style="width:100%; height:80px" class="form-control" name="alamat_ortu" required=""></textarea></div>
								</div>
							  </div>
							
          					<div class="form-group">
							  <label for="inputEmail3" class="col-sm-2 control-label">Pekerjaan Orang Tua</label>
								<div class="input-group col-lg-7">
								  <div class="col-md-10"><input type="text" class="form-control " name="kerja_ortu" placeholder="nama_ortu" required=""></div>
								</div>
							  </div>
          
          					<div class="form-group">
							  	<label for="inputEmail3" class="col-sm-2 control-label">Judul Skripsi</label>
								<div class="input-group col-lg-9">
								  		<div class="col-lg-12"><textarea style="width:100%; height:80px" class="form-control" name="judul" required=""></textarea></div>
								</div>
							  </div>
          
          					<div class="form-group">
							  <label for="inputEmail3" class="col-sm-2 control-label">Dosen Pembimbing </label>
								<div class="input-group col-lg-7">
								  <div class="col-lg-6"><input type="text" class="form-control " name="dosen1" value="" placeholder="Nama dan Gelar Dosen Pembimbing 1" required=""></div>
                                  <div class="col-lg-6"><input type="text" class="form-control " name="dosen2" value="" placeholder="Nama dan Gelar Dosen Pembimbing 2" required=""></div>
								</div>
							  </div>
	
							  <div class="form-group">
							  <label for="inputEmail3" class="col-sm-2 control-label"></label>
								<div class="col-sm-offset col-sm-9"><hr>
								  <button type="submit" name="submit" class="btn btn-success">Simpan</button><br><br>
								</div>
							  </div>
						</form>
					</article>
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
