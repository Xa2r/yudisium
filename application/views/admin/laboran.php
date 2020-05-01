<div class="page-content">
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
                              <td class="td-status"><span class="text-success"><i class="glyphicon glyphicon-ok"></i></span></td>
							  <td class="td-action">
							  	  <a title="Lihat Persyaratan" href="index.php?view=laboran&amp;nim=14030066" class="btn btn-info btn-xs"><i class="fas fa-search-plus"></i></a>
                                  <a title="Ubah Status ke-aktif-an" href="index.php?view=laboran&amp;update=14030066&amp;status=" class="btn btn-warning btn-xs"><i class="fas fa-edit"></i></a>
							  	  <a title="Hapus" href="index.php?view=laboran&amp;deletea=14030066" class="btn btn-danger btn-xs"><i class="fas fa-trash-alt"></i></a>
							  </td>  
						  </tr><tr>
                        	  <td>2</td>                           
							  <td>14030001</td>							 
							  <td></td>
                              <td class="td-status"><span class="text-success"><i class="glyphicon glyphicon-ok"></i></span></td>
							  <td class="td-action">
							  	  <a title="Lihat Persyaratan" href="index.php?view=laboran&amp;nim=14030001" class="btn btn-info btn-xs"><i class="fas fa-search-plus"></i></a>
                                  <a title="Ubah Status ke-aktif-an" href="index.php?view=laboran&amp;update=14030001&amp;status=" class="btn btn-warning btn-xs"><i class="fas fa-edit"></i></a>
							  	  <a title="Hapus" href="index.php?view=laboran&amp;deletea=14030001" class="btn btn-danger btn-xs"><i class="fas fa-trash-alt"></i></a>
							  </td>  
						  </tr><tr>
                        	  <td>3</td>                           
							  <td>14030086</td>							 
							  <td></td>
                              <td class="td-status"><span class="text-success"><i class="glyphicon glyphicon-ok"></i></span></td>
							  <td class="td-action">
							  	  <a title="Lihat Persyaratan" href="index.php?view=laboran&amp;nim=14030086" class="btn btn-info btn-xs"><i class="fas fa-search-plus"></i></a>
                                  <a title="Ubah Status ke-aktif-an" href="index.php?view=laboran&amp;update=14030086&amp;status=" class="btn btn-warning btn-xs"><i class="fas fa-edit"></i></a>
							  	  <a title="Hapus" href="index.php?view=laboran&amp;deletea=14030086" class="btn btn-danger btn-xs"><i class="fas fa-trash-alt"></i></a>
							  </td>  
						  </tr><tr>
                        	  <td>4</td>                           
							  <td>12030005</td>							 
							  <td></td>
                              <td class="td-status"><span class="text-success"><i class="glyphicon glyphicon-ok"></i></span></td>
							  <td class="td-action">
							  	  <a title="Lihat Persyaratan" href="index.php?view=laboran&amp;nim=12030005" class="btn btn-info btn-xs"><i class="fas fa-search-plus"></i></a>
                                  <a title="Ubah Status ke-aktif-an" href="index.php?view=laboran&amp;update=12030005&amp;status=" class="btn btn-warning btn-xs"><i class="fas fa-edit"></i></a>
							  	  <a title="Hapus" href="index.php?view=laboran&amp;deletea=12030005" class="btn btn-danger btn-xs"><i class="fas fa-trash-alt"></i></a>
							  </td>  
						  </tr><tr>
                        	  <td>5</td>                           
							  <td>15030066</td>							 
							  <td></td>
                              <td class="td-status"><span class="text-success"><i class="glyphicon glyphicon-ok"></i></span></td>
							  <td class="td-action">
							  	  <a title="Lihat Persyaratan" href="index.php?view=laboran&amp;nim=15030066" class="btn btn-info btn-xs"><i class="fas fa-search-plus"></i></a>
                                  <a title="Ubah Status ke-aktif-an" href="index.php?view=laboran&amp;update=15030066&amp;status=" class="btn btn-warning btn-xs"><i class="fas fa-edit"></i></a>
							  	  <a title="Hapus" href="index.php?view=laboran&amp;deletea=15030066" class="btn btn-danger btn-xs"><i class="fas fa-trash-alt"></i></a>
							  </td>  
						  </tr><tr>
                        	  <td>6</td>                           
							  <td>15060024</td>							 
							  <td></td>
                              <td class="td-status"><span class="text-success"><i class="glyphicon glyphicon-ok"></i></span></td>
							  <td class="td-action">
							  	  <a title="Lihat Persyaratan" href="index.php?view=laboran&amp;nim=15060024" class="btn btn-info btn-xs"><i class="fas fa-search-plus"></i></a>
                                  <a title="Ubah Status ke-aktif-an" href="index.php?view=laboran&amp;update=15060024&amp;status=" class="btn btn-warning btn-xs"><i class="fas fa-edit"></i></a>
							  	  <a title="Hapus" href="index.php?view=laboran&amp;deletea=15060024" class="btn btn-danger btn-xs"><i class="fas fa-trash-alt"></i></a>
							  </td>  
						  </tr><tr>
                        	  <td>7</td>                           
							  <td>14030065</td>							 
							  <td></td>
                              <td class="td-status"><span class="text-success"><i class="glyphicon glyphicon-ok"></i></span></td>
							  <td class="td-action">
							  	  <a title="Lihat Persyaratan" href="index.php?view=laboran&amp;nim=14030065" class="btn btn-info btn-xs"><i class="fas fa-search-plus"></i></a>
                                  <a title="Ubah Status ke-aktif-an" href="index.php?view=laboran&amp;update=14030065&amp;status=" class="btn btn-warning btn-xs"><i class="fas fa-edit"></i></a>
							  	  <a title="Hapus" href="index.php?view=laboran&amp;deletea=14030065" class="btn btn-danger btn-xs"><i class="fas fa-trash-alt"></i></a>
							  </td>  
						  </tr><tr>
                        	  <td>8</td>                           
							  <td>14030017</td>							 
							  <td>2019-01-02</td>
                              <td class="td-status"><span class="text-success"><i class="glyphicon glyphicon-ok"></i></span></td>
							  <td class="td-action">
							  	  <a title="Lihat Persyaratan" href="index.php?view=laboran&amp;nim=14030017" class="btn btn-info btn-xs"><i class="fas fa-search-plus"></i></a>
                                  <a title="Ubah Status ke-aktif-an" href="index.php?view=laboran&amp;update=14030017&amp;status=" class="btn btn-warning btn-xs"><i class="fas fa-edit"></i></a>
							  	  <a title="Hapus" href="index.php?view=laboran&amp;deletea=14030017" class="btn btn-danger btn-xs"><i class="fas fa-trash-alt"></i></a>
							  </td>  
						  </tr><tr>
                        	  <td>9</td>                           
							  <td>14030007</td>							 
							  <td></td>
                              <td class="td-status"><span class="text-success"><i class="glyphicon glyphicon-ok"></i></span></td>
							  <td class="td-action">
							  	  <a title="Lihat Persyaratan" href="index.php?view=laboran&amp;nim=14030007" class="btn btn-info btn-xs"><i class="fas fa-search-plus"></i></a>
                                  <a title="Ubah Status ke-aktif-an" href="index.php?view=laboran&amp;update=14030007&amp;status=" class="btn btn-warning btn-xs"><i class="fas fa-edit"></i></a>
							  	  <a title="Hapus" href="index.php?view=laboran&amp;deletea=14030007" class="btn btn-danger btn-xs"><i class="fas fa-trash-alt"></i></a>
							  </td>  
						  </tr><tr>
                        	  <td>10</td>                           
							  <td>17030023</td>							 
							  <td>2019-01-31</td>
                              <td class="td-status"><span class="text-success"><i class="glyphicon glyphicon-ok"></i></span></td>
							  <td class="td-action">
							  	  <a title="Lihat Persyaratan" href="index.php?view=laboran&amp;nim=17030023" class="btn btn-info btn-xs"><i class="fas fa-search-plus"></i></a>
                                  <a title="Ubah Status ke-aktif-an" href="index.php?view=laboran&amp;update=17030023&amp;status=" class="btn btn-warning btn-xs"><i class="fas fa-edit"></i></a>
							  	  <a title="Hapus" href="index.php?view=laboran&amp;deletea=17030023" class="btn btn-danger btn-xs"><i class="fas fa-trash-alt"></i></a>
							  </td>  
						  </tr><tr>
                        	  <td>11</td>                           
							  <td>17030006</td>							 
							  <td></td>
                              <td class="td-status"><span class="text-success"><i class="glyphicon glyphicon-ok"></i></span></td>
							  <td class="td-action">
							  	  <a title="Lihat Persyaratan" href="index.php?view=laboran&amp;nim=17030006" class="btn btn-info btn-xs"><i class="fas fa-search-plus"></i></a>
                                  <a title="Ubah Status ke-aktif-an" href="index.php?view=laboran&amp;update=17030006&amp;status=" class="btn btn-warning btn-xs"><i class="fas fa-edit"></i></a>
							  	  <a title="Hapus" href="index.php?view=laboran&amp;deletea=17030006" class="btn btn-danger btn-xs"><i class="fas fa-trash-alt"></i></a>
							  </td>  
						  </tr><tr>
                        	  <td>12</td>                           
							  <td>10030034</td>							 
							  <td></td>
                              <td class="td-status"><span class="text-success"><i class="glyphicon glyphicon-ok"></i></span></td>
							  <td class="td-action">
							  	  <a title="Lihat Persyaratan" href="index.php?view=laboran&amp;nim=10030034" class="btn btn-info btn-xs"><i class="fas fa-search-plus"></i></a>
                                  <a title="Ubah Status ke-aktif-an" href="index.php?view=laboran&amp;update=10030034&amp;status=" class="btn btn-warning btn-xs"><i class="fas fa-edit"></i></a>
							  	  <a title="Hapus" href="index.php?view=laboran&amp;deletea=10030034" class="btn btn-danger btn-xs"><i class="fas fa-trash-alt"></i></a>
							  </td>  
						  </tr><tr>
                        	  <td>13</td>                           
							  <td>14030006</td>							 
							  <td>2019-01-29</td>
                              <td class="td-status"><span class="text-success"><i class="glyphicon glyphicon-ok"></i></span></td>
							  <td class="td-action">
							  	  <a title="Lihat Persyaratan" href="index.php?view=laboran&amp;nim=14030006" class="btn btn-info btn-xs"><i class="fas fa-search-plus"></i></a>
                                  <a title="Ubah Status ke-aktif-an" href="index.php?view=laboran&amp;update=14030006&amp;status=" class="btn btn-warning btn-xs"><i class="fas fa-edit"></i></a>
							  	  <a title="Hapus" href="index.php?view=laboran&amp;deletea=14030006" class="btn btn-danger btn-xs"><i class="fas fa-trash-alt"></i></a>
							  </td>  
						  </tr><tr>
                        	  <td>14</td>                           
							  <td>08030005</td>							 
							  <td>2019-10-21</td>
                              <td class="td-status"><span class="text-success"><i class="glyphicon glyphicon-ok"></i></span></td>
							  <td class="td-action">
							  	  <a title="Lihat Persyaratan" href="index.php?view=laboran&amp;nim=08030005" class="btn btn-info btn-xs"><i class="fas fa-search-plus"></i></a>
                                  <a title="Ubah Status ke-aktif-an" href="index.php?view=laboran&amp;update=08030005&amp;status=" class="btn btn-warning btn-xs"><i class="fas fa-edit"></i></a>
							  	  <a title="Hapus" href="index.php?view=laboran&amp;deletea=08030005" class="btn btn-danger btn-xs"><i class="fas fa-trash-alt"></i></a>
							  </td>  
						  </tr><tr>
                        	  <td>15</td>                           
							  <td>15050006</td>							 
							  <td></td>
                              <td class="td-status"><span class="text-success"><i class="glyphicon glyphicon-ok"></i></span></td>
							  <td class="td-action">
							  	  <a title="Lihat Persyaratan" href="index.php?view=laboran&amp;nim=15050006" class="btn btn-info btn-xs"><i class="fas fa-search-plus"></i></a>
                                  <a title="Ubah Status ke-aktif-an" href="index.php?view=laboran&amp;update=15050006&amp;status=" class="btn btn-warning btn-xs"><i class="fas fa-edit"></i></a>
							  	  <a title="Hapus" href="index.php?view=laboran&amp;deletea=15050006" class="btn btn-danger btn-xs"><i class="fas fa-trash-alt"></i></a>
							  </td>  
						  </tr><tr>
                        	  <td>16</td>                           
							  <td>15040005</td>							 
							  <td></td>
                              <td class="td-status"><span class="text-success"><i class="glyphicon glyphicon-ok"></i></span></td>
							  <td class="td-action">
							  	  <a title="Lihat Persyaratan" href="index.php?view=laboran&amp;nim=15040005" class="btn btn-info btn-xs"><i class="fas fa-search-plus"></i></a>
                                  <a title="Ubah Status ke-aktif-an" href="index.php?view=laboran&amp;update=15040005&amp;status=" class="btn btn-warning btn-xs"><i class="fas fa-edit"></i></a>
							  	  <a title="Hapus" href="index.php?view=laboran&amp;deletea=15040005" class="btn btn-danger btn-xs"><i class="fas fa-trash-alt"></i></a>
							  </td>  
						  </tr><tr>
                        	  <td>17</td>                           
							  <td>14030020</td>							 
							  <td></td>
                              <td class="td-status"><span class="text-success"><i class="glyphicon glyphicon-ok"></i></span></td>
							  <td class="td-action">
							  	  <a title="Lihat Persyaratan" href="index.php?view=laboran&amp;nim=14030020" class="btn btn-info btn-xs"><i class="fas fa-search-plus"></i></a>
                                  <a title="Ubah Status ke-aktif-an" href="index.php?view=laboran&amp;update=14030020&amp;status=" class="btn btn-warning btn-xs"><i class="fas fa-edit"></i></a>
							  	  <a title="Hapus" href="index.php?view=laboran&amp;deletea=14030020" class="btn btn-danger btn-xs"><i class="fas fa-trash-alt"></i></a>
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
    </div>
 <!-- /container -->
  