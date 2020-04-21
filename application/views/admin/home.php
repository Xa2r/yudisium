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
  <!-- https://code.jquery.com/jquery-3.3.1.js -->
<!-- https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js -->
    
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
                <li><a href="<?= base_url('home_admin') ?>"><i class="glyphicon glyphicon-home"></i> Home Page</a></li>
                <li><a href="<?= base_url('kategory_yudisium') ?>"><i class="glyphicon glyphicon-th-list"></i> Kategori Persyaratan</a></li>
              	<li><a href="<?= base_url('list_seleksi') ?>"><i class="glyphicon glyphicon-book"></i> Jurusan</a></li>	            
                
                <li class="dropdown"> 
				
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="glyphicon glyphicon-user"></i>Kabag lab <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="<?= base_url('laboran') ?>"><i class="glyphicon glyphicon-list"></i> Daftar Mahasiswa Bebas Lab</a></li>
                	<li><a href="index.php?view=laboran&amp;act=cetak"><i class="glyphicon glyphicon-list-alt"></i> Cetak Surat Bebas Lab</a></li>
                  </ul>
                </li>
              
            </ul>

			

            <?php $this->load->view('admin/template/user-profile'); ?>
 
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </nav>

  <div class="post text">
    	<div class="alert alert-danger">
    <strong>Selamat datang - </strong> Di halaman administrator E-Yudisium Sekolah Tinggi Teknologi Adisutjipto Yogyakarta
</div>

<p>Terima kasih sudah melakukan login.. <br>
E-Yudisium merupakan suatu sistem informasi yang dikembangkan untuk menunjang kegiatan proses yudisium di Sekolah Tinggi Teknologi Adisutjipto Yogyakarta.

<br><br>
</p><ul>
  	<li>E-Yudisium berfungsi sebagai pengganti proses yudisium secara manual dengan cara mengumpulkan berkas ke Yudisium ke Bagian Jurusan.</li>
	<li>Dengan adanya E-Yudisium maka kampus dapat mengurangi penggunaan kertas (paperless) dan berbasis pada data, sehingga mudah dalam proses manajemen file tersebut.</li>
	<li>E-Yudisium memudahkan mahasiswa dapat melakukan proses yudisium lebih cepat karena dapat dilakukan kapan saja tanpa harus datang ke Jurusan dan mengumpulkan berkas yudisium, mahasiswa hanya
  melakukan proses upload file scan yudisium tersebut.</li>
<div class="pull-right"><i class="glyphicon glyphicon-time"></i> Login Pada : <strong>, 19 Nov 2019, </strong> <br><i class="glyphicon glyphicon-user"></i> User Login&nbsp; : <strong> </strong><i class="text-danger">(admin)</i></div><br>
<p></p><br>    
    </ul></div>
</div> <!-- /container -->
  
  
  
  
  <footer style="background:#1c1c1c; border-top:5px solid #000; padding:25px">
          <div class="container">
              <div class="row">
                      <p class="footer" style="text-align:center; color:#fff">
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