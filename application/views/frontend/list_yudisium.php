<div class="page-main list">
    <div class="devider">
    <div class="col-md-12">
      <h1 class="title">DAFTAR PERSYARATAN YUDISIUM</h1>
    </div>
  </div>
  <div class="post text">
<div class="row">
    <div class="col-md-12">
        <article class="main">   
        <div class="alert alert-success">
        <strong>Daftar File Persyaratan Yudisium Anda </strong></div>
        <?php $this->load->view('admin/template/flash-message'); ?>
       <form method="post">
          
        <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Daftar Yudisium</h4>
        </div>
        <div class="modal-body">
          <p>Silahkan Tekan Tombol Daftar Untuk Medaftar Yudisium.</p>
          <button type="submit" name="daftar" class="btn btn-primary" >Daftar</button>
          
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

        </form>
      
          <table class='table table-condensed table-bordered'>
              <thead>
                <tr class='alert alert-success'>
                    <th scope='row'>No</th> 
                    <th>Kategori Persyaratan</th>   
                    <th>Status Berkas</th>                
                    <th>Status Verifikasi</th>         
                    <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                
              <?php
                $no = 1; 
                foreach ($kategori as $data):
                  $kd_kategori = $data['kd_kategori'];
                  $nama_kategori = $data['nama_kategori'];
                  $status = $data['status'];
                  $status_upload = $data['status_upload'];
              ?>
                
            <tr>

              <td><?= $no; ?></td>
                  <td><?= $nama_kategori; ?></td>
                  <td align='center'>
                    <?php if ($status == 'A'): ?>
                      <span class='text-info'><i class='glyphicon glyphicon-ok'></i></span>
                    <?php else : ?>
                      <span class='text-danger'><i class='glyphicon glyphicon-remove'></i></span>
                    <?php endif; ?>
                  </td>

                  <td align='center'>
                    <?php
                    $requestCategory = array();
                    foreach ($request as $index => $value) : ?>
                    <?php if (!$value) {continue;} ?>
                    <?php $requestCategory[] = $value->nama; ?>
                    <?php endforeach; ?>

                    <?php /* if rest api keuangan & perpus*/ ?>
                    <?php if (false !== array_search($nama_kategori, $requestCategory)) : ?>
                     <?php foreach ($request as $index => $value) : ?>
                      <?php if ($nama_kategori == $value->nama) : ?>
                        <?php if ($value->data->status == 1): ?>
                          <span class='text-info'><i class='glyphicon glyphicon-ok'></i></span>
                        <?php else : ?>
                          <span class='text-danger'><i class='glyphicon glyphicon-remove'></i></span>
                        <?php endif; ?>
                        <?php endif; ?>
                    <?php endforeach; ?>
                        
                    <?php /* if else */ ?>
                    <?php else : ?>
                      <?php $image = $obj->getImagesByCategory($nim, $kd_kategori); ?>
                      <?php if (!$image) : ?>
                        <span class='text-danger'><i class='glyphicon glyphicon-remove'></i></span>
                      <?php else : ?>
                        <?php foreach ($image as $img) : ?>
                          <?php if ($img['status'] == 'A') : ?>
                            <span class='text-info'><i class='glyphicon glyphicon-ok'></i></span>
                          <?php else : ?>
                            <span class='text-danger'><i class='glyphicon glyphicon-remove'></i></span>
                          <?php endif; ?>
                        <?php endforeach; ?>
                      <?php endif; ?>
                    <?php endif; ?>
                    </td>
                  
                  <?php /* status upload */ ?>
                  <?php if ($status_upload == 'A') : ?>
                    <td align="center"> <a name="edit" class="btn btn-primary sm" data-toggle="modal" data-target="#upload<?= $kd_kategori; ?>" data-placement="left" title="Unggah"><span class="glyphicon glyphicon-open"></span></a></td>
                  <?php else : ?>
                    <td align="center"> <a name="edit" class="btn btn-primary sm" data-toggle="tooltip" data-placement="left" title="Unggah" disabled><span class="glyphicon glyphicon-open"></span></a></td>
                  <?php endif; ?>
                </tr>
                <!-- Modal upload -->
                <div class="modal fade" id="upload<?= $kd_kategori; ?>" tabindex="-1" role="dialog" aria-labelledby="upload" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="upload">Upload <?= $nama_kategori; ?></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <?php 
                      $kategori_id = array();
                      foreach ($image as $img){
                          $kategori_id[] = $img['id_kategori'];
                        } ?>

                        <?php  if (false !== array_search($kd_kategori, $kategori_id)): ?>
                            <form class="form-horizontal" action="<?= base_url('updateImage/'.$kd_kategori) ?>" method="POST" enctype="multipart/form-data">
                          <?php else : ?>
                            <form class="form-horizontal" action="<?= base_url('upload_image/'.$kd_kategori) ?>" method="POST" enctype="multipart/form-data">
                          <?php endif; ?>
                        <div class="modal-body">
                          <input class="btn btn-sm btn-primary" type="file" name="berkas">
                        </div>
                        <div class="modal-footer">
                          <button type="submit" class="btn btn-primary">Upload</button>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
                <?php
                    $no++;
                    endforeach; ?>
              </tbody>
            </table>
        </article>
    </div>
</div>

    
    </div>
</div>