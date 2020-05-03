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
                    <a title="Lihat Persyaratan" class="btn btn-info btn-xs" data-toggle="collapse" href="#persaratan" aria-expanded="false" aria-controls="persaratan">
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

  <!-- collapse list -->
  <br>
  <article>
    <div class="collapse" id="persaratan">
      <div class="card card-body">
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
                <dt>Program Studi</dt>
                <dt>Nama Lengkap</dt>
                <dt>Tempat/Tgl Lahir</dt>
                <dt>Alamat</dt>
                <dt>Agama</dt>
                <dt>No HP</dt>
                <dt>Email</dt>
                <dt>Asal SMA</dt>
                <dt>Jenis Kelamin</dt>
                <dt>Status</dt>
                <dt>Nama Orang Tua</dt>
                <dt>Pekerjaan Orang Tua</dt>
                <dt>Judul Skripsi</dt>
                <dt>Dosen Pembimbing I</dt>
                <dt>Dosen Pembimbing II</dt>
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
        <tr>
                              <td>1</td><td>Biodata Peserta Yudisium</td> <td>  </td>                            
                              <td><center><span class="text-danger"><i class="glyphicon glyphicon-remove"></i></span></center></td>
                              <td><center><span class="text-danger"><i class="glyphicon glyphicon-remove"></i></span></center></td>
                              <td><center><a href="index.php?view=list_yudisium_admin&amp;id=&amp;nim=14030066&amp;aksi=detail&amp;id=16" target="_blank"><button class="btn btn-info"> <i class="glyphicon glyphicon-search"> Lihat</i></button></a></center></td>
                              <td><form action="" method="POST"><input type="hidden" name="nim" value="14030066"><input type="hidden" name="kdk" value="16"><input type="hidden" name="status_cek" value="B"><button type="submit" class="btn btn-primary" name="tombol_setuju" value="Setujui"> <span class="glyphicon glyphicon-pushpin" aria-hidden="true"> Ubah</span></button></form>
                              </td>  
                          </tr><tr>
                              <td>2</td><td>Transkrip Nilai Yang Disetujui Akademik</td> <td>  </td>                            
                              <td><center><span class="text-danger"><i class="glyphicon glyphicon-remove"></i></span></center></td>
                              <td><center><span class="text-danger"><i class="glyphicon glyphicon-remove"></i></span></center></td>
                              <td><center><a href="index.php?view=list_yudisium_admin&amp;id=&amp;nim=14030066&amp;aksi=detail&amp;id=17" target="_blank"><button class="btn btn-info"> <i class="glyphicon glyphicon-search"> Lihat</i></button></a></center></td>
                              <td><form action="" method="POST"><input type="hidden" name="nim" value="14030066"><input type="hidden" name="kdk" value="17"><input type="hidden" name="status_cek" value="B"><button type="submit" class="btn btn-primary" name="tombol_setuju" value="Setujui"> <span class="glyphicon glyphicon-pushpin" aria-hidden="true"> Ubah</span></button></form>
                              </td>  
                          </tr><tr>
                              <td>3</td><td>Tanda Terima Skripsi / TA</td> <td>  </td>                            
                              <td><center><span class="text-danger"><i class="glyphicon glyphicon-remove"></i></span></center></td>
                              <td><center><span class="text-danger"><i class="glyphicon glyphicon-remove"></i></span></center></td>
                              <td><center><a href="index.php?view=list_yudisium_admin&amp;id=&amp;nim=14030066&amp;aksi=detail&amp;id=18" target="_blank"><button class="btn btn-info"> <i class="glyphicon glyphicon-search"> Lihat</i></button></a></center></td>
                              <td><form action="" method="POST"><input type="hidden" name="nim" value="14030066"><input type="hidden" name="kdk" value="18"><input type="hidden" name="status_cek" value="B"><button type="submit" class="btn btn-primary" name="tombol_setuju" value="Setujui"> <span class="glyphicon glyphicon-pushpin" aria-hidden="true"> Ubah</span></button></form>
                              </td>  
                          </tr><tr>
                              <td>4</td><td>Foto Terbaru ( Almamater, kemeja putih, dasi hitam)</td> <td>  </td>                            
                              <td><center><span class="text-danger"><i class="glyphicon glyphicon-remove"></i></span></center></td>
                              <td><center><span class="text-danger"><i class="glyphicon glyphicon-remove"></i></span></center></td>
                              <td><center><a href="index.php?view=list_yudisium_admin&amp;id=&amp;nim=14030066&amp;aksi=detail&amp;id=19" target="_blank"><button class="btn btn-info"> <i class="glyphicon glyphicon-search"> Lihat</i></button></a></center></td>
                              <td><form action="" method="POST"><input type="hidden" name="nim" value="14030066"><input type="hidden" name="kdk" value="19"><input type="hidden" name="status_cek" value="B"><button type="submit" class="btn btn-primary" name="tombol_setuju" value="Setujui"> <span class="glyphicon glyphicon-pushpin" aria-hidden="true"> Ubah</span></button></form>
                              </td>  
                          </tr><tr>
                              <td>5</td><td>Surat Bebas Perpustakaan</td> <td>  </td>                            
                              <td><center><span class="text-danger"><i class="glyphicon glyphicon-remove"></i></span></center></td>
                              <td><center><span class="text-danger"><i class="glyphicon glyphicon-remove"></i></span></center></td>
                              <td><center><a href="index.php?view=list_yudisium_admin&amp;id=&amp;nim=14030066&amp;aksi=detail&amp;id=2" target="_blank"><button class="btn btn-info"> <i class="glyphicon glyphicon-search"> Lihat</i></button></a></center></td>
                              <td><form action="" method="POST"><input type="hidden" name="nim" value="14030066"><input type="hidden" name="kdk" value="2"><input type="hidden" name="status_cek" value="B"><button type="submit" class="btn btn-primary" name="tombol_setuju" value="Setujui"> <span class="glyphicon glyphicon-pushpin" aria-hidden="true"> Ubah</span></button></form>
                              </td>  
                          </tr><tr>
                              <td>6</td><td>Pembayaran Wisuda</td> <td>  </td>                            
                              <td><center><span class="text-danger"><i class="glyphicon glyphicon-remove"></i></span></center></td>
                              <td><center><span class="text-danger"><i class="glyphicon glyphicon-remove"></i></span></center></td>
                              <td><center><a href="index.php?view=list_yudisium_admin&amp;id=&amp;nim=14030066&amp;aksi=detail&amp;id=20" target="_blank"><button class="btn btn-info"> <i class="glyphicon glyphicon-search"> Lihat</i></button></a></center></td>
                              <td><form action="" method="POST"><input type="hidden" name="nim" value="14030066"><input type="hidden" name="kdk" value="20"><input type="hidden" name="status_cek" value="B"><button type="submit" class="btn btn-primary" name="tombol_setuju" value="Setujui"> <span class="glyphicon glyphicon-pushpin" aria-hidden="true"> Ubah</span></button></form>
                              </td>  
                          </tr><tr>
                              <td>7</td><td>Scan Ijazah SMA</td> <td>  </td>                            
                              <td><center><span class="text-danger"><i class="glyphicon glyphicon-remove"></i></span></center></td>
                              <td><center><span class="text-danger"><i class="glyphicon glyphicon-remove"></i></span></center></td>
                              <td><center><a href="index.php?view=list_yudisium_admin&amp;id=&amp;nim=14030066&amp;aksi=detail&amp;id=21" target="_blank"><button class="btn btn-info"> <i class="glyphicon glyphicon-search"> Lihat</i></button></a></center></td>
                              <td><form action="" method="POST"><input type="hidden" name="nim" value="14030066"><input type="hidden" name="kdk" value="21"><input type="hidden" name="status_cek" value="B"><button type="submit" class="btn btn-primary" name="tombol_setuju" value="Setujui"> <span class="glyphicon glyphicon-pushpin" aria-hidden="true"> Ubah</span></button></form>
                              </td>  
                          </tr><tr>
                              <td>8</td><td>Serifikat TOEFL</td> <td>  </td>                            
                              <td><center><span class="text-danger"><i class="glyphicon glyphicon-remove"></i></span></center></td>
                              <td><center><span class="text-danger"><i class="glyphicon glyphicon-remove"></i></span></center></td>
                              <td><center><a href="index.php?view=list_yudisium_admin&amp;id=&amp;nim=14030066&amp;aksi=detail&amp;id=22" target="_blank"><button class="btn btn-info"> <i class="glyphicon glyphicon-search"> Lihat</i></button></a></center></td>
                              <td><form action="" method="POST"><input type="hidden" name="nim" value="14030066"><input type="hidden" name="kdk" value="22"><input type="hidden" name="status_cek" value="B"><button type="submit" class="btn btn-primary" name="tombol_setuju" value="Setujui"> <span class="glyphicon glyphicon-pushpin" aria-hidden="true"> Ubah</span></button></form>
                              </td>  
                          </tr><tr>
                              <td>9</td><td>Surat Bebas Inherent</td> <td>  </td>                            
                              <td><center><span class="text-danger"><i class="glyphicon glyphicon-remove"></i></span></center></td>
                              <td><center><span class="text-danger"><i class="glyphicon glyphicon-remove"></i></span></center></td>
                              <td><center><a href="index.php?view=list_yudisium_admin&amp;id=&amp;nim=14030066&amp;aksi=detail&amp;id=3" target="_blank"><button class="btn btn-info"> <i class="glyphicon glyphicon-search"> Lihat</i></button></a></center></td>
                              <td><form action="" method="POST"><input type="hidden" name="nim" value="14030066"><input type="hidden" name="kdk" value="3"><input type="hidden" name="status_cek" value="B"><button type="submit" class="btn btn-primary" name="tombol_setuju" value="Setujui"> <span class="glyphicon glyphicon-pushpin" aria-hidden="true"> Ubah</span></button></form>
                              </td>  
                          </tr><tr>
                              <td>10</td><td>Surat Bebas Laboratorium</td> <td>13 Januari 2019</td>                            
                              <td><center><span class="text-success"><i class="glyphicon glyphicon-ok"></i></span></center></td>
                              <td><center><span class="text-danger"><i class="glyphicon glyphicon-remove"></i></span></center></td>
                              <td><center><a href="index.php?view=list_yudisium_admin&amp;id=&amp;nim=14030066&amp;aksi=detail&amp;id=4" target="_blank"><button class="btn btn-info"> <i class="glyphicon glyphicon-search"> Lihat</i></button></a></center></td>
                              <td><form action="" method="POST"><input type="hidden" name="nim" value="14030066"><input type="hidden" name="kdk" value="4"><input type="hidden" name="status_cek" value="B"><button type="submit" class="btn btn-primary" name="tombol_setuju" value="Setujui"> <span class="glyphicon glyphicon-pushpin" aria-hidden="true"> Ubah</span></button></form>
                              </td>  
                          </tr>              </tbody>
              <tfoot>
                <tr>
                    <td colspan="7"> <center>
                        <form method="POST" action="">
                            <input type="hidden" name="nim" value="14030066">
                            <input type="radio" name="hasil" value="Lolos">Lolos Verifikasi
                            <input type="radio" name="hasil" value="Gagal">Gagal Verifikasi<br>
                            <button type="submit" name="ubah_status" class="btn btn-danger">Simpan Verifikasi</button> <br>*Klik tombol ini jika sudah melengkapi semua persyaratan.</form></center>
                         </td>
                                        </tr>
              </tfoot>
        </table>

      </div>
    </div>
  </article>

</div>
</div>
<script type="text/javascript">
  $(document).ready(function() {
    $('#example').DataTable();
} );
</script>    
    </div>
</div> <!-- /container -->