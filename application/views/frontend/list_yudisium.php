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
                  $nama_kategori = $data['nama_kategori'];
                  $status = $data['status'];
              ?>
                
            <tr>

              <td><?= $no; ?></td>
                  <td><?= $nama_kategori; ?></td>
                  <?php if ($status == 'A'): ?>  
                      <td align='center'><span class='text-info'><i class='glyphicon glyphicon-ok'></i></span></td>
                  <?php else : ?>
                  <td align='center'><span class='text-danger'><i class='glyphicon glyphicon-remove'></i></span></td>
                  <?php endif; ?>
                  <?php if($request) : ?>
                    <?php foreach ($request as $index => $value): ?>
                      <?php if ($value->nama_Category == $nama_kategori): ?>
                        <?php foreach ($value->mahasiswa as $child) : ?>
                          <?php if ($child->request == 1): ?>
                            <td align='center'><span class='text-info'><i class='glyphicon glyphicon-ok'></i></span></td>
                          <?php else : ?>
                            <td align='center'><span class='text-danger'><i class='glyphicon glyphicon-remove'></i></span></td>
                          <?php endif; ?>
                        <?php endforeach; ?>
                      <?php endif; ?>
                    <?php endforeach; ?>
                  <?php else : ?>
                    <td align='center'><span class='text-danger'><i class='glyphicon glyphicon-remove'></i></span></td>
                  <?php endif; ?>
                  <td align="left"> <a href="" name="edit" class="btn btn-primary sm" data-toggle="tooltip" data-placement="left" title="Unggah"><span class="glyphicon glyphicon-open"></span></a>
                  </td>      
                </tr>
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