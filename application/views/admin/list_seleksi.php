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
  // var kd_prodi = document.getElementById("kd_prodi").value;
   
  
  var url="<?= base_url('get_mahasiswa') ?>" 
  url=url+"?nim="+x
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
    Daftar File Persyaratan Yudisium Program Studi     </div>
        <a style="margin-bottom:5px" class="btn btn-primary btn-sm" href="#" data-toggle="modal" data-target="#tambahMahasiswa">Tambah Aktif Yudisium</a>
    <!-- <div id="example_wrapper" class="dataTables_wrapper no-footer"><div class="dataTables_length" id="example_length">
        <label>Show
            <select name="example_length" aria-controls="example" class="">
                <option value="10">10</option>
                <option value="25">25</option>
                <option value="50">50</option>
                <option value="100">100</option>
            </select>entries
        </label>
    </div>
    <div id="example_filter" class="dataTables_filter">
        <label>Search:<input type="search" class="" placeholder="" aria-controls="example"></label>
    </div> -->
    <div id="example_wrapper" class="dataTables_wrapper no-footer">
        <table class="table table-condensed table-bordered dataTable no-footer" id="example" role="grid" aria-describedby="example_info">
          <thead>
            <tr class="alert alert-success" role="row"><th scope="row" class="sorting_asc" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="No: activate to sort column descending" style="width: 39px;" aria-sort="ascending">No</th><th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="NIM: activate to sort column ascending" style="width: 77px;">NIM</th><th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Nama: activate to sort column ascending" style="width: 284px;">Nama</th><th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Tanggal Aktif: activate to sort column ascending" style="width: 158px;">Tanggal Aktif</th><th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Tanggal Selesai: activate to sort column ascending" style="width: 158px;">Tanggal Selesai</th><th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending" style="width: 82px;">Status</th><th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Action: activate to sort column ascending" style="width: 74px;">Action</th></tr>
          </thead>
          <tbody>
          <?php
          $no = 1;

          foreach ($yud_mahasiswa as $data):
            $nim = $data['nim'];
            $nama = $data['nama'];
            $tgl_aktif = $data['tanggal_aktif'];
            $tgl_selesai = $data['tanggal_selesai'];
            $status = $data['status'];
          ?>
              <tr role="row" class="odd">
                            <td class="sorting_1"><?= $no; ?></td>
                              <td><?= $nim; ?></td>
                              <td><?= $nama; ?></td>              
                <td><?= $tgl_aktif; ?></td>
                              <td><?= $tgl_selesai; ?></td>
                              <td><?= $status; ?></td>
                <td>
                    <a title="Lihat Persyaratan" href="index.php?view=list_yudisium_admin&amp;id=&amp;nim=14030066" class="btn btn-info btn-xs"><i class="glyphicon glyphicon-search"></i></a>
                                  
                    <a title="Hapus" href="index.php?view=list_seleksi&amp;deletea=14030066" class="btn btn-danger btn-xs"><i class="glyphicon glyphicon-trash"></i></a>
                </td>  
              </tr>
              <?php
              $no++;
          endforeach; ?>
              </tbody>
    </table>
    <!-- <div class="dataTables_info" id="example_info" role="status" aria-live="polite">Showing 1 to 10 of 10 entries</div>
    <div class="dataTables_paginate paging_simple_numbers" id="example_paginate">
        <a class="paginate_button previous disabled" aria-controls="example" data-dt-idx="0" tabindex="0" id="example_previous">Previous</a>
        <span>
            <a class="paginate_button current" aria-controls="example" data-dt-idx="1" tabindex="0">1</a>
        </span>
        <a class="paginate_button next disabled" aria-controls="example" data-dt-idx="2" tabindex="0" id="example_next">Next</a>
    </div> -->
</div>
</div>
          <nav>
            <ul class="pagination">
                          </ul>
          </nav>
    </article>
      
      <!-- Modal Tambah Mahasiswa -->
 <div class="modal fade" id="tambahMahasiswa" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            <h4 class="modal-title" id="myModalLabel">Tambahkan Peserta Yudisium </h4>
          </div>
         <form class="form-horizontal" action="index.php?view=list_seleksi" method="POST">  
            <div class="modal-body">              
                <div class="form-group">
                  <label for="nim" class="col-sm-2 control-label">NIM</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="nim" name="nim" onkeyup="hajar()" required="">
      
                  </div>   
      <div class="col-sm-2">
      <input type="text" class="form-control" id="kd_prodi" name="kd_prodi" value="admin" disabled="">
                  </div>                  
                </div>               
         
              <div class="form-group">
                  <label for="a" class="col-sm-2 control-label">Identitas</label>
                  <div class="col-sm-10">
                   <label for="a" id="identitas_mahasiswa" style="text-align=center;">:</label> 
                  </div>
                </div>   
       
              <div style="clear:both" class="modal-footer">
                <button type="submit" name="simpana" class="btn btn-primary btn-sm">Aktifkan Mahasiswa</button>
              </div>
            
           </div>
          </form>
          
        </div>
      </div>
    </div>

      
      
  </div>
</div>

<script type="text/javascript">
  $(document).ready(function() {
    $('#example').DataTable();
} );
</script>    
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

  

<span class="gr__tooltip"><span class="gr__tooltip-content"></span><i class="gr__tooltip-logo"></i><span class="gr__triangle"></span></span></body></html>