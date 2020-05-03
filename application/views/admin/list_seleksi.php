<div class="page-content">
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
    <?php $this->load->view('admin/template/flash-message'); ?>
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
    <div id="example_wrapper" class="dataTables_wrapper no-footer table-responsive">
        <table class="table table-condensed table-bordered dataTable no-footer table-striped" id="example" role="grid" aria-describedby="example_info">
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
                <td class="td-action">
                    <a title="Lihat Persyaratan" class="btn btn-info btn-xs" data-toggle="modal" href="#" data-target="#persaratan<?= $nim; ?>">
                      <i class="fas fa-search-plus"></i>
                    </a>
                                  
                    <a title="Hapus" href="<?= base_url('delete_list/'.$nim) ?>" class="btn btn-danger btn-xs">
                    <i class="fas fa-trash-alt"></i></a>
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
         <form class="form-horizontal" action="<?= base_url('aktif_mahasiswa') ?>" method="POST">  
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

  <!-- modal list -->
  <br>
  <article>
  <?php foreach ($list as $mhs):
    $nim = $mhs['nim'];
    $prodi = $mhs['nm_prodi'];
    $nama = $mhs['nama'];
    $tmp_lahir = $mhs['tmp_lahir'];
    $tgl_lahir = $mhs['tgl_lahir'];
    $alamat = $mhs['alamat'];
    $agama = $mhs['kd_agama'];
    $no_hp = $mhs['hp_mhs'];
    $email = $mhs['email_mhs'];
    $sekolah = $mhs['nm_sekolah'];
    $jk = $mhs['j_kelamin'];
    $status = $mhs['status_kawin'];
    $nm_ortu = $mhs['nm_bpk_kandung'];
    $pk_ortu = $mhs['kerja_bpk'];
    $judul = $mhs['judul'];
    $dosen1 = $mhs['dosen_pem_1'];
    $dosen2 = $mhs['dosen_pem_2'];
  ?>
  <div class="modal fade" id="persaratan<?= $nim; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
        </div>
        <div class="panel panel-primary">
          <div class="panel-heading">
            <h3 class="panel-title">Identitas Peserta Yudisium</h3>
          </div>
          <div class="panel-body">
            <div class="alert alert-danger" role="alert">
              <center><strong>PASTIKAN DATA INI BENAR, DATA INI AKAN TERCETAK DI IJAZAH DAN TRANSKRIP NILAI</strong></center> 
            </div>
            <div class="col-md-8">            
              <dl class="dl-horizontal">
             
                <dt>NIM</dt>
                <dd><?= $nim; ?></dd>
                <dt>Program Studi</dt>
                <dd><?= $prodi; ?></dd>
                <dt>Nama Lengkap</dt>
                <dd><?= $nama; ?></dd>
                <dt>Tempat/Tgl Lahir</dt>
                <dd><?= $tmp_lahir; ?>/<?= $tgl_lahir ?></dd>
                <dt>Alamat</dt>
                <dd><?= $alamat; ?></dd>
                <dt>Agama</dt>
                <dd>
                <?php if ($agama == 1) {
                  echo 'ISLAM';
                } elseif ($agama == 2) {
                  echo 'KATHOLIK';
                } elseif ($agama == 3) {
                  echo 'PROTESTAN';
                } elseif ($agama == 4) {
                  echo 'HINDU';
                } elseif ($agama == 5) {
                  echo 'BUDHA';
                } elseif ($agama == 6) {
                  echo 'LAINNYA';
                } ?></dd>
                <dt>No HP</dt>
                <dd><?= $no_hp; ?></dd>
                <dt>Email</dt>
                <dd><?= $email; ?></dd>
                <dt>Asal SMA</dt>
                <dd><?= $sekolah; ?></dd>
                <dt>Jenis Kelamin</dt>
                <dd><?= $jk; ?></dd>
                <dt>Status</dt>
                <dd><?= $status; ?></dd>
                <dt>Nama Orang Tua</dt>
                <dd><?= $nm_ortu; ?></dd>
                <dt>Pekerjaan Orang Tua</dt>
                <dd><?= $pk_ortu; ?></dd>
                <dt>Judul Skripsi</dt>
                <dd><?= $judul; ?></dd>
                <dt>Dosen Pembimbing I</dt>
                <dd><?= $dosen1; ?></dd>
                <dt>Dosen Pembimbing II</dt>
                <dd><?= $dosen2; ?></dd>
              
              </dl>
            </div>
          </div>
        </div>

        <table class="table table-condensed table-bordered">
          <thead>
            <tr class="alert alert-success">
              <th scope="row">No</th> 
              <th>Kategori Persyaratan</th>   
              <th>Tanggal</th>    
              <th>Upload</th>                 
              <th>Status</th>
              <th>File</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
          <?php
          $no = 1;
          foreach ($kategori as $cat):
            $nm_kategori = $cat['nama_kategori'];
            $status = $cat['status'];
          ?>
            <tr>
              <td><?= $no; ?></td>
              <td><?= $nm_kategori ?></td>
              <td></td>
              <?php if ($status == 'A'): ?>                         
                <td align='center'><span class='text-info'><i class='glyphicon glyphicon-ok'></i></span></td>
              <?php else: ?>
                <td><center><span class="text-danger"><i class="glyphicon glyphicon-remove"></i></span></center></td>
              <?php endif; ?>
              <td><center><span class="text-danger"><i class="glyphicon glyphicon-remove"></i></span></center></td>
              <td><center><a href="#" target="_blank"><button class="btn btn-info"> <i class="glyphicon glyphicon-search"> Lihat</i></button></a></center></td>
              <td>
                <form action="" method="POST">
                  <input type="hidden" name="nim" value="">
                  <input type="hidden" name="kdk" value="16">
                  <input type="hidden" name="status_cek" value="B">
                  <button type="submit" class="btn btn-primary" name="tombol_setuju" value="Setujui"> 
                    <span class="glyphicon glyphicon-pushpin" aria-hidden="true"> Ubah</span>
                  </button>
                </form>
              </td>
            </tr>
          <?php
            $no++;
            endforeach; 
          ?>              
          </tbody>
          <tfoot>
            <tr>
              <td colspan="7"> <center>
                <form method="POST" action="">
                  <input type="hidden" name="nim" value="">
                    <input type="radio" name="hasil" value="Lolos">Lolos Verifikasi
                    <input type="radio" name="hasil" value="Gagal">Gagal Verifikasi
                    <br>
                    <button type="submit" name="ubah_status" class="btn btn-danger">Simpan Verifikasi</button> 
                    <br>
                    *Klik tombol ini jika sudah melengkapi semua persyaratan.
                </form></center>
              </td>
            </tr>
          </tfoot>
        </table>
      </div>
    </div>
  </div>
  <?php endforeach ?>
  </article>

</div>
</div>
<script type="text/javascript">
  $(document).ready(function() {
    $('#example').DataTable();
} );
</script>    
    </div>
</div> 
<!-- /container -->