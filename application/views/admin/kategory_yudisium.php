<div class="page-content active">
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
          <th style="width:50px" class="sorting_1"><?= $no; ?></th>
            <td><?= $prodi; ?></td>
            <td><?= $nama_kategori; ?></td>
            <td><?= $status; ?></td>
            <td><?= $status_upload; ?></td>
            <td><?= $format; ?></td>
            <td style="width:110px"><a class="open-AddBookDialog btn btn-success btn-xs" data-id="1" data-id1="Semua Jurusan" data-id2="Surat Bebas Keuangan" data-id3="KEU" data-id4="A" data-id5="T" data-toggle="modal" href="#" data-target="#editkategori">Edit</a>
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
  </div> <!-- /container -->