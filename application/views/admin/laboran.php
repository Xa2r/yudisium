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
			<?php 
				$no = 1;

				foreach($bebas_lab as $data):
					$nim = $data['nim'];
					$tgl_cetak = $data['tgl_cetak'];
					$status = $data['status'];
			?>
				<tr>
					<td><?= $no; ?></td>                           
					<td><?= $nim; ?></td>							 
					<td><?= $tgl_cetak; ?></td>
					<?php if ($status == 'A'): ?>
						<td class="td-status"><span class="text-success"><i class="glyphicon glyphicon-ok"></i></span></td>
					<?php else : ?>
						<td align='center'><span class='text-danger'><i class='glyphicon glyphicon-remove'></i></span></td>
					<?php endif; ?>
					<td class="td-action">
						<a title="Lihat Persyaratan" href="#" class="btn btn-info btn-xs"><i class="fas fa-search-plus"></i></a>
						<a title="Ubah Status ke-aktif-an" href="#" class="btn btn-warning btn-xs"><i class="fas fa-edit"></i></a>
						<a title="Hapus" href="<?= base_url('remove_bebasLab/'.$nim) ?>" class="btn btn-danger btn-xs"><i class="fas fa-trash-alt"></i></a>
					</td>  
				</tr>
			<?php
				$no++;
				endforeach; 
			?>
			</tbody>
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
         <form class="form-horizontal" action="<?= base_url('add_bebas_lab') ?>" method="POST">  
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
    </div>
 <!-- /container -->
  