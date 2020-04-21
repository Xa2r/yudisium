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
    	<script>
var xmlHttp
function hajar() {
	xmlHttp=GetXmlHttpObject()
    var x = document.getElementById("nim").value;
   
  
  var url="admin/get_mahasiswa.php" 
	url=url+"?id="+x
	xmlHttp.onreadystatechange=stateChanged
	xmlHttp.open("GET",url,true)
	xmlHttp.send(null)

    function stateChanged(){
	if(xmlHttp.readyState==4 || xmlHttp.readyState=="complete"){
		document.getElementById("identitas_mahasiswa").innerHTML=xmlHttp.responseText

		}
	}
  function GetXmlHttpObject(){
	var xmlHttp=null;
	
	try{
		xmlHttp=new XMLHttpRequest();
	}catch(e){
		xmlHttp=new ActiveXObject("Microsoft.XMLHTTP");
	}
	return xmlHttp;
}
}
</script>

<div class="row">
	<div class="col-md-12">
		<article>	
		<div class="alert alert-success">
		Daftar File Persyaratan Yudisium Program Studi '<strong></strong>'	    </div>
        <a style="margin-bottom:5px" class="btn btn-primary btn-sm" href="#" data-toggle="modal" data-target="#tambahMahasiswa">Tambah Bebas Lab</a>
	    <table class="table table-condensed table-bordered">
		      <thead>
		        <tr class="alert alert-success">
		        	<th scope="row">No</th> 
                  	
                    <th>NIM</th>
		        	<th>Tanggal Cetak</th>		        	
		        	<th>Status</th>                  	
		        	<th>Action</th>
		        </tr>
		      </thead>
		      <tbody>
			<tr>
                        	  <td>1</td>                           
							  <td>14030066</td>							 
							  <td>2019-01-13</td>
                              <td><span class="text-success"><i class="glyphicon glyphicon-ok"></i></span></td>
							  <td>
							  	  <a title="Lihat Persyaratan" href="index.php?view=laboran&amp;nim=14030066" class="btn btn-info btn-xs"><i class="glyphicon glyphicon-search"></i></a>
                                  <a title="Ubah Status ke-aktif-an" href="index.php?view=laboran&amp;update=14030066&amp;status=" class="btn btn-warning btn-xs"><i class="glyphicon glyphicon-edit"></i></a>
							  	  <a title="Hapus" href="index.php?view=laboran&amp;deletea=14030066" class="btn btn-danger btn-xs"><i class="glyphicon glyphicon-trash"></i></a>
							  </td>  
						  </tr><tr>
                        	  <td>2</td>                           
							  <td>14030001</td>							 
							  <td></td>
                              <td><span class="text-success"><i class="glyphicon glyphicon-ok"></i></span></td>
							  <td>
							  	  <a title="Lihat Persyaratan" href="index.php?view=laboran&amp;nim=14030001" class="btn btn-info btn-xs"><i class="glyphicon glyphicon-search"></i></a>
                                  <a title="Ubah Status ke-aktif-an" href="index.php?view=laboran&amp;update=14030001&amp;status=" class="btn btn-warning btn-xs"><i class="glyphicon glyphicon-edit"></i></a>
							  	  <a title="Hapus" href="index.php?view=laboran&amp;deletea=14030001" class="btn btn-danger btn-xs"><i class="glyphicon glyphicon-trash"></i></a>
							  </td>  
						  </tr><tr>
                        	  <td>3</td>                           
							  <td>14030086</td>							 
							  <td></td>
                              <td><span class="text-success"><i class="glyphicon glyphicon-ok"></i></span></td>
							  <td>
							  	  <a title="Lihat Persyaratan" href="index.php?view=laboran&amp;nim=14030086" class="btn btn-info btn-xs"><i class="glyphicon glyphicon-search"></i></a>
                                  <a title="Ubah Status ke-aktif-an" href="index.php?view=laboran&amp;update=14030086&amp;status=" class="btn btn-warning btn-xs"><i class="glyphicon glyphicon-edit"></i></a>
							  	  <a title="Hapus" href="index.php?view=laboran&amp;deletea=14030086" class="btn btn-danger btn-xs"><i class="glyphicon glyphicon-trash"></i></a>
							  </td>  
						  </tr><tr>
                        	  <td>4</td>                           
							  <td>12030005</td>							 
							  <td></td>
                              <td><span class="text-success"><i class="glyphicon glyphicon-ok"></i></span></td>
							  <td>
							  	  <a title="Lihat Persyaratan" href="index.php?view=laboran&amp;nim=12030005" class="btn btn-info btn-xs"><i class="glyphicon glyphicon-search"></i></a>
                                  <a title="Ubah Status ke-aktif-an" href="index.php?view=laboran&amp;update=12030005&amp;status=" class="btn btn-warning btn-xs"><i class="glyphicon glyphicon-edit"></i></a>
							  	  <a title="Hapus" href="index.php?view=laboran&amp;deletea=12030005" class="btn btn-danger btn-xs"><i class="glyphicon glyphicon-trash"></i></a>
							  </td>  
						  </tr><tr>
                        	  <td>5</td>                           
							  <td>15030066</td>							 
							  <td></td>
                              <td><span class="text-success"><i class="glyphicon glyphicon-ok"></i></span></td>
							  <td>
							  	  <a title="Lihat Persyaratan" href="index.php?view=laboran&amp;nim=15030066" class="btn btn-info btn-xs"><i class="glyphicon glyphicon-search"></i></a>
                                  <a title="Ubah Status ke-aktif-an" href="index.php?view=laboran&amp;update=15030066&amp;status=" class="btn btn-warning btn-xs"><i class="glyphicon glyphicon-edit"></i></a>
							  	  <a title="Hapus" href="index.php?view=laboran&amp;deletea=15030066" class="btn btn-danger btn-xs"><i class="glyphicon glyphicon-trash"></i></a>
							  </td>  
						  </tr><tr>
                        	  <td>6</td>                           
							  <td>15060024</td>							 
							  <td></td>
                              <td><span class="text-success"><i class="glyphicon glyphicon-ok"></i></span></td>
							  <td>
							  	  <a title="Lihat Persyaratan" href="index.php?view=laboran&amp;nim=15060024" class="btn btn-info btn-xs"><i class="glyphicon glyphicon-search"></i></a>
                                  <a title="Ubah Status ke-aktif-an" href="index.php?view=laboran&amp;update=15060024&amp;status=" class="btn btn-warning btn-xs"><i class="glyphicon glyphicon-edit"></i></a>
							  	  <a title="Hapus" href="index.php?view=laboran&amp;deletea=15060024" class="btn btn-danger btn-xs"><i class="glyphicon glyphicon-trash"></i></a>
							  </td>  
						  </tr><tr>
                        	  <td>7</td>                           
							  <td>14030065</td>							 
							  <td></td>
                              <td><span class="text-success"><i class="glyphicon glyphicon-ok"></i></span></td>
							  <td>
							  	  <a title="Lihat Persyaratan" href="index.php?view=laboran&amp;nim=14030065" class="btn btn-info btn-xs"><i class="glyphicon glyphicon-search"></i></a>
                                  <a title="Ubah Status ke-aktif-an" href="index.php?view=laboran&amp;update=14030065&amp;status=" class="btn btn-warning btn-xs"><i class="glyphicon glyphicon-edit"></i></a>
							  	  <a title="Hapus" href="index.php?view=laboran&amp;deletea=14030065" class="btn btn-danger btn-xs"><i class="glyphicon glyphicon-trash"></i></a>
							  </td>  
						  </tr><tr>
                        	  <td>8</td>                           
							  <td>14030017</td>							 
							  <td>2019-01-02</td>
                              <td><span class="text-success"><i class="glyphicon glyphicon-ok"></i></span></td>
							  <td>
							  	  <a title="Lihat Persyaratan" href="index.php?view=laboran&amp;nim=14030017" class="btn btn-info btn-xs"><i class="glyphicon glyphicon-search"></i></a>
                                  <a title="Ubah Status ke-aktif-an" href="index.php?view=laboran&amp;update=14030017&amp;status=" class="btn btn-warning btn-xs"><i class="glyphicon glyphicon-edit"></i></a>
							  	  <a title="Hapus" href="index.php?view=laboran&amp;deletea=14030017" class="btn btn-danger btn-xs"><i class="glyphicon glyphicon-trash"></i></a>
							  </td>  
						  </tr><tr>
                        	  <td>9</td>                           
							  <td>14030007</td>							 
							  <td></td>
                              <td><span class="text-success"><i class="glyphicon glyphicon-ok"></i></span></td>
							  <td>
							  	  <a title="Lihat Persyaratan" href="index.php?view=laboran&amp;nim=14030007" class="btn btn-info btn-xs"><i class="glyphicon glyphicon-search"></i></a>
                                  <a title="Ubah Status ke-aktif-an" href="index.php?view=laboran&amp;update=14030007&amp;status=" class="btn btn-warning btn-xs"><i class="glyphicon glyphicon-edit"></i></a>
							  	  <a title="Hapus" href="index.php?view=laboran&amp;deletea=14030007" class="btn btn-danger btn-xs"><i class="glyphicon glyphicon-trash"></i></a>
							  </td>  
						  </tr><tr>
                        	  <td>10</td>                           
							  <td>17030023</td>							 
							  <td>2019-01-31</td>
                              <td><span class="text-success"><i class="glyphicon glyphicon-ok"></i></span></td>
							  <td>
							  	  <a title="Lihat Persyaratan" href="index.php?view=laboran&amp;nim=17030023" class="btn btn-info btn-xs"><i class="glyphicon glyphicon-search"></i></a>
                                  <a title="Ubah Status ke-aktif-an" href="index.php?view=laboran&amp;update=17030023&amp;status=" class="btn btn-warning btn-xs"><i class="glyphicon glyphicon-edit"></i></a>
							  	  <a title="Hapus" href="index.php?view=laboran&amp;deletea=17030023" class="btn btn-danger btn-xs"><i class="glyphicon glyphicon-trash"></i></a>
							  </td>  
						  </tr><tr>
                        	  <td>11</td>                           
							  <td>17030006</td>							 
							  <td></td>
                              <td><span class="text-success"><i class="glyphicon glyphicon-ok"></i></span></td>
							  <td>
							  	  <a title="Lihat Persyaratan" href="index.php?view=laboran&amp;nim=17030006" class="btn btn-info btn-xs"><i class="glyphicon glyphicon-search"></i></a>
                                  <a title="Ubah Status ke-aktif-an" href="index.php?view=laboran&amp;update=17030006&amp;status=" class="btn btn-warning btn-xs"><i class="glyphicon glyphicon-edit"></i></a>
							  	  <a title="Hapus" href="index.php?view=laboran&amp;deletea=17030006" class="btn btn-danger btn-xs"><i class="glyphicon glyphicon-trash"></i></a>
							  </td>  
						  </tr><tr>
                        	  <td>12</td>                           
							  <td>10030034</td>							 
							  <td></td>
                              <td><span class="text-success"><i class="glyphicon glyphicon-ok"></i></span></td>
							  <td>
							  	  <a title="Lihat Persyaratan" href="index.php?view=laboran&amp;nim=10030034" class="btn btn-info btn-xs"><i class="glyphicon glyphicon-search"></i></a>
                                  <a title="Ubah Status ke-aktif-an" href="index.php?view=laboran&amp;update=10030034&amp;status=" class="btn btn-warning btn-xs"><i class="glyphicon glyphicon-edit"></i></a>
							  	  <a title="Hapus" href="index.php?view=laboran&amp;deletea=10030034" class="btn btn-danger btn-xs"><i class="glyphicon glyphicon-trash"></i></a>
							  </td>  
						  </tr><tr>
                        	  <td>13</td>                           
							  <td>14030006</td>							 
							  <td>2019-01-29</td>
                              <td><span class="text-success"><i class="glyphicon glyphicon-ok"></i></span></td>
							  <td>
							  	  <a title="Lihat Persyaratan" href="index.php?view=laboran&amp;nim=14030006" class="btn btn-info btn-xs"><i class="glyphicon glyphicon-search"></i></a>
                                  <a title="Ubah Status ke-aktif-an" href="index.php?view=laboran&amp;update=14030006&amp;status=" class="btn btn-warning btn-xs"><i class="glyphicon glyphicon-edit"></i></a>
							  	  <a title="Hapus" href="index.php?view=laboran&amp;deletea=14030006" class="btn btn-danger btn-xs"><i class="glyphicon glyphicon-trash"></i></a>
							  </td>  
						  </tr><tr>
                        	  <td>14</td>                           
							  <td>08030005</td>							 
							  <td>2019-10-21</td>
                              <td><span class="text-success"><i class="glyphicon glyphicon-ok"></i></span></td>
							  <td>
							  	  <a title="Lihat Persyaratan" href="index.php?view=laboran&amp;nim=08030005" class="btn btn-info btn-xs"><i class="glyphicon glyphicon-search"></i></a>
                                  <a title="Ubah Status ke-aktif-an" href="index.php?view=laboran&amp;update=08030005&amp;status=" class="btn btn-warning btn-xs"><i class="glyphicon glyphicon-edit"></i></a>
							  	  <a title="Hapus" href="index.php?view=laboran&amp;deletea=08030005" class="btn btn-danger btn-xs"><i class="glyphicon glyphicon-trash"></i></a>
							  </td>  
						  </tr><tr>
                        	  <td>15</td>                           
							  <td>15050006</td>							 
							  <td></td>
                              <td><span class="text-success"><i class="glyphicon glyphicon-ok"></i></span></td>
							  <td>
							  	  <a title="Lihat Persyaratan" href="index.php?view=laboran&amp;nim=15050006" class="btn btn-info btn-xs"><i class="glyphicon glyphicon-search"></i></a>
                                  <a title="Ubah Status ke-aktif-an" href="index.php?view=laboran&amp;update=15050006&amp;status=" class="btn btn-warning btn-xs"><i class="glyphicon glyphicon-edit"></i></a>
							  	  <a title="Hapus" href="index.php?view=laboran&amp;deletea=15050006" class="btn btn-danger btn-xs"><i class="glyphicon glyphicon-trash"></i></a>
							  </td>  
						  </tr><tr>
                        	  <td>16</td>                           
							  <td>15040005</td>							 
							  <td></td>
                              <td><span class="text-success"><i class="glyphicon glyphicon-ok"></i></span></td>
							  <td>
							  	  <a title="Lihat Persyaratan" href="index.php?view=laboran&amp;nim=15040005" class="btn btn-info btn-xs"><i class="glyphicon glyphicon-search"></i></a>
                                  <a title="Ubah Status ke-aktif-an" href="index.php?view=laboran&amp;update=15040005&amp;status=" class="btn btn-warning btn-xs"><i class="glyphicon glyphicon-edit"></i></a>
							  	  <a title="Hapus" href="index.php?view=laboran&amp;deletea=15040005" class="btn btn-danger btn-xs"><i class="glyphicon glyphicon-trash"></i></a>
							  </td>  
						  </tr><tr>
                        	  <td>17</td>                           
							  <td>14030020</td>							 
							  <td></td>
                              <td><span class="text-success"><i class="glyphicon glyphicon-ok"></i></span></td>
							  <td>
							  	  <a title="Lihat Persyaratan" href="index.php?view=laboran&amp;nim=14030020" class="btn btn-info btn-xs"><i class="glyphicon glyphicon-search"></i></a>
                                  <a title="Ubah Status ke-aktif-an" href="index.php?view=laboran&amp;update=14030020&amp;status=" class="btn btn-warning btn-xs"><i class="glyphicon glyphicon-edit"></i></a>
							  	  <a title="Hapus" href="index.php?view=laboran&amp;deletea=14030020" class="btn btn-danger btn-xs"><i class="glyphicon glyphicon-trash"></i></a>
							  </td>  
						  </tr>			  </tbody>
		</table>
					<nav>
 						<ul class="pagination">
													</ul>
					</nav>
		</article>
      
      <!-- Modal Tambah Mahasiswa	-->
 <div class="modal fade" id="tambahMahasiswa" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            <h4 class="modal-title" id="myModalLabel">Tambah Data Bebas laboratorium</h4>
          </div>
         <form class="form-horizontal" action="index.php?view=laboran&amp;act=tambah_bebas" method="POST">  
          	<div class="modal-body">              
                <div class="form-group">
                  <label for="a" class="col-sm-2 control-label">NIM</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="nim" name="nim" onkeyup="hajar()" required="">
                  </div>                  	
                </div>               
         
           		<div class="form-group">
                  <label for="a" class="col-sm-2 control-label">Identitas</label>
                  <div class="col-sm-10">
                   <label for="a" id="identitas_mahasiswa" style="text-align=center;">:</label> 
                  </div>
                </div>   
       
          		<div style="clear:both" class="modal-footer">
            		<button type="submit" name="simpana" class="btn btn-primary btn-sm">Proses Bebas Laboratorium</button>
          		</div>
          	
           </div>
          </form>
          
        </div>
      </div>
    </div>

      
      
	</div>
</div>

    
    </div>
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

  

</body><span class="gr__tooltip"><span class="gr__tooltip-content"></span><i class="gr__tooltip-logo"></i><span class="gr__triangle"></span></span></html>S