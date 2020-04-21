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

      <?php $this->load->view('admin/template/flash-message'); ?>
      <a style="margin-bottom:5px" class="btn btn-primary btn-sm" href="#" data-toggle="modal" data-target="#tambahkategori">Tambahkan Data</a>
    <div id="example_wrapper" class="dataTables_wrapper no-footer">
        <!-- <div class="dataTables_length" id="example_length">
            <label>Show <select name="example_length" aria-controls="example" class="">
                <option value="10">10</option>
                <option value="25">25</option>
                <option value="50">50</option>
                <option value="100">100</option>
            </select> entries</label>
        </div> -->
        <!-- <div id="example_filter" class="dataTables_filter">
            <label>Search:<input type="search" class="" placeholder="" aria-controls="example"></label>
        </div> -->
        <table class="table table-condensed table-hover dataTable no-footer" id="example" role="grid" aria-describedby="example_info">
      <thead>
        <tr class="alert alert-success" role="row">
            <th class="sorting_asc" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-sort="ascending" aria-label="No: activate to sort column descending" style="width: 34px;">No</th>
            <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Prodi: activate to sort column ascending" style="width: 92px;">Prodi</th>
            <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Nama Kategori: activate to sort column ascending" style="width: 333px;">Nama Kategori</th>
            <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Status Diaktifkan: activate to sort column ascending" style="width: 126px;">Status Diaktifkan</th>
            <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Status Upload File: activate to sort column ascending" style="width: 135px;">Status Upload File</th>
            <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Format: activate to sort column ascending" style="width: 74px;">Format</th>
            <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Action: activate to sort column ascending" style="width: 94px;">Action</th>
        </tr>
      </thead>
      <tbody>

        <?php
        $no = 1; 
        foreach ($kategori as $data):
          $prodi = $data['kd_prodi'];
          $nama_kategori = $data['nama_kategori'];
          $status = $data['status'];
          $status_upload = $data['status_upload'];
          $format = $data['format'];
          ?>
      
        <tr role="row" class="odd">
          <th width="50px" class="sorting_1"><?= $no; ?></th>
            <td><?= $prodi; ?></td>
            <td><?= $nama_kategori; ?></td>
            <td><?= $status; ?></td>
            <td><?= $status_upload; ?></td>
            <td><?= $format; ?></td>
            <td width="110px"><a class="open-AddBookDialog btn btn-success btn-xs" data-id="1" data-id1="Semua Jurusan" data-id2="Surat Bebas Keuangan" data-id3="KEU" data-id4="A" data-id5="T" data-toggle="modal" href="#" data-target="#editkategori">Edit</a>
              <a class="btn btn-danger btn-xs" href="index.php?view=kategoriyudisium&amp;deletea=1">Delete</a>
            </td>
        </tr>
        <?php $no++;
        endforeach; ?>
      </tbody>    
    </table>
            <!-- <div class="dataTables_info" id="example_info" role="status" aria-live="polite">Showing 1 to 1 of 1 entries</div>
            <div class="dataTables_paginate paging_simple_numbers" id="example_paginate">
                <a class="paginate_button previous disabled" aria-controls="example" data-dt-idx="0" tabindex="0" id="example_previous">Previous</a>
                <span><a class="paginate_button current" aria-controls="example" data-dt-idx="1" tabindex="0">1</a></span>
                <a class="paginate_button next disabled" aria-controls="example" data-dt-idx="2" tabindex="0" id="example_next">Next</a>
            </div> -->
        </div>
         
      <!-- Modal Master Data Syarat -->
    <div class="modal fade" id="tambahkategori" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            <h4 class="modal-title" id="myModalLabel">Tambahkan Kategori Persyaratan</h4>
          </div>
          <div class="modal-body">
              <form class="form-horizontal" action="<?= base_url('add_category') ?>" method="POST">  
                <div class="form-group">
                  <label for="prodi" class="col-sm-3 control-label">Prodi</label>
                  <div class="col-sm-8">
                    <select class="form-control" id="prodi" name="prodi" required="">
                      
                      <option value="Aeronautika">Aeronautika</option><option value="Elektro">Teknik Elektro</option><option value="Industri">Teknik Industri</option><option value="Informatika">Teknik Informatika</option><option value="Mesin">Teknik Mesin</option><option value="Penerbangan">Teknik Penerbangan</option>   
                      <option value="ALL">Semua Jurusan</option>
                    </select>
                  </div>
                </div>
                
                <div class="form-group">
                  <label for="kategori" class="col-sm-3 control-label">Nama Kategori</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="kategori" name="kategori" required="">
                  </div>
                </div>
                
                <div class="form-group">
                  <label for="status" class="col-sm-3 control-label">Status</label>
                  <div class="col-sm-8">
                    <select class="form-control" id="status" name="status" required="">
                      <option value="A">Aktif</option>
                      <option value="T">Tidak Aktif</option>
                    </select>
                  </div>
                </div>
                
                <div class="form-group">
                  <label for="status_upload" class="col-sm-3 control-label">Status Upload File</label>
                  <div class="col-sm-8">
                    <select class="form-control" id="status_upload" name="status_upload" required="">
                      <option value="A">Aktif</option>
                      <option value="T">Tidak Aktif</option>
                    </select>
                  </div>
                </div>
                
                <div class="form-group">
                  <label for="format" class="col-sm-3 control-label">Format</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="format" name="format" required="">
                  </div>
                </div>
                <div style="clear:both" class="modal-footer">
            <button type="submit" name="simpana" class="btn btn-primary btn-sm">Tambah Data</button>
          </div>     
          </form></div>
          
          
        </div>
      </div>
    </div>


    <!-- Modal Edit Data Syarat -->
    <div class="modal fade" id="editkategori" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            <h4 class="modal-title" id="myModalLabel">Edit Kategori</h4>
          </div>
          <div class="modal-body">
              <form class="form-horizontal" action="index.php?view=kategoriyudisium" method="POST">
                              
                <input type="hidden" class="form-control" id="bookId" name="kd_kategori">
                 <div class="form-group">
                  <label for="a" class="col-sm-3 control-label">Prodi</label>
                  <div class="col-sm-8">
                    <select class="form-control" id="bookId1" name="prodi" required="">
                      <option value="ALL" selected="">Semua Jurusan</option>
                      <option value="">Aeronautika</option><option value="">Teknik Elektro</option><option value="">Teknik Industri</option><option value="">Teknik Informatika</option><option value="">Teknik Mesin</option><option value="">Teknik Penerbangan</option>   
                      <option value="ALL">Semua Jurusan</option>
                    </select>
                  </div>
                </div>
                
                <div class="form-group">
                  <label for="a" class="col-sm-3 control-label">Nama Kategori</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="bookId2" name="kategori" required="">
                  </div>
                </div>
                
                <div class="form-group">
                  <label for="a" class="col-sm-3 control-label">Status</label>
                  <div class="col-sm-8">
                    <select class="form-control" id="bookId4" name="status_upload" required="">
                      <option value="A">Aktif</option>
                      <option value="T">Tidak Aktif</option>
                    </select>
                  </div>
                </div>
                
                <div class="form-group">
                  <label for="a" class="col-sm-3 control-label">Status Upload</label>
                  <div class="col-sm-8">
                    <select class="form-control" id="bookId5" name="status_upload" required="">
                      <option value="A">Aktif</option>
                      <option value="T">Tidak Aktif</option>
                    </select>
                  </div>
                </div>
                
                <div class="form-group">
                  <label for="a" class="col-sm-3 control-label">Format</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="bookId3" name="format" required="">
                  </div>
                </div>  
                
          </form></div>
          <div style="clear:both" class="modal-footer">
            <button type="submit" name="updatea" class="btn btn-primary btn-sm">Update</button>
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

  

</body><span class="gr__tooltip"><span class="gr__tooltip-content"></span><i class="gr__tooltip-logo"></i><span class="gr__triangle"></span></span></html>