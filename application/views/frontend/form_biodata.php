</div>
<div class="page-main biodata">
  <div class="devider">
    <div class="col-md-12">
      <h1 class="title">FORMULIR BIODATA</h1>
    </div>
  </div>
<div class="container">
	<div class="row">
	<div class="col-md-12">
		<article>			
		<div class="alert alert-danger">
	        Pengisian Biodata Yudisium. <strong>ISI DATA DENGAN BENAR SEBAGAI DATA IJAZAH ANDA.</strong>
	    </div>
		<?php foreach ($user as $data):
			$nim = $data['nim'];
			$prodi = $data['nm_prodi'];
			$nama = $data['nama'];
			$tmp_lahir = $data['tmp_lahir'];
			$tgl_lahir = $data['tgl_lahir'];
			$jk = $data['j_kelamin'];
			$agama = $data['kd_agama'];
			$alamat_mhs = $data['alamat_mhs'];
			$hp = $data['hp_mhs'];
			$email = $data['email_mhs'];
			$nm_ibu = $data['nm_ibu_kandung'];
			$kerja_ibu = $data['kerja_ibu'];
			$alamat_ibu = $data['alamat_ibu'];
			$status = $data['status_kawin'];
			$nm_sekolah = $data['nm_sekolah'];
			$judul = $data['judul'];
			$dosen1 = $data['dosen_pem_1'];
			$dosen2 = $data['dosen_pem_2'];
		?>
		<?php $this->load->view('admin/template/flash-message'); ?>
				<form action="<?= base_url('update_user'); ?>" method="POST" class="form-horizontal" role="form">
				<div class="form-group">
				<label class="col-sm-2 control-label">NIM</label>
				<div class="input-group col-md-9">
					<div class="col-md-12"><input type="text" class="form-control" name="nim" value="<?= $nim; ?>" disabled>
					</div>
				</div>
				</div>
				<div class="form-group">
				<label class="col-sm-2 control-label">Program Studi</label>
				<div class="input-group col-md-9">
					<div class="col-md-12"><input type="text" class="form-control " name="jurusan" value="<?= $prodi ?>" disabled></div>
				</div>
				</div>

				<div class="form-group">
				<label class="col-md-2 control-label">Nama Lengkap</label>
				<div class="input-group col-md-9">
					<div class="col-md-12"><input type="text" class="form-control " name="nama" required="" value="<?= $nama; ?>"></div>
				</div>
				</div>

				<div class="form-group">
				<label class="col-sm-2 control-label">Tempat Lahir</label>
				<div class="input-group col-md-9">
					<div class="col-md-12"><input type="text" class="form-control " name="tmp_lahir" required="" value='<?= $tmp_lahir; ?>'></div>
				</div>
				</div>
				
			<div class="form-group">
				<label class="col-sm-2 control-label">Tanggal Lahir</label>
				<div class="input-group col-md-9">
					<div class="col-md-12"><input type="text" class="form-control" name="tgl_lahir" required="" value='<?= $tgl_lahir; ?>'></div>
				</div>
				</div>
				
				<div class="form-group">
				<label class="col-sm-2 control-label">Alamat</label>
				<div class="input-group col-md-9">
					<div class="col-md-12"><textarea style="width:100%; height:80px" class="form-control" name="alamat" required=""><?= $alamat_mhs; ?></textarea></div>
				</div>
				</div>
				
				<div class="form-group">
				<label class="col-sm-2 control-label">Agama</label>
				<div class="input-group col-md-9">
					<div class="col-md-12">
						<select name="agama" class="form-control" required="">
						<option value="0"></option>
						<option <?= ($agama == 1)?'selected':'' ?> value="1">ISLAM</option>
						<option <?= ($agama == 2)?'selected':'' ?> value="2">KATHOLIK</option>
						<option <?= ($agama == 3)?'selected':'' ?> value="3">PROTESTAN</option>
						<option <?= ($agama == 4)?'selected':'' ?> value="4">HINDU</option>
						<option <?= ($agama == 5)?'selected':'' ?> value="5">BUDHA</option>
						<option <?= ($agama == 6)?'selected':'' ?> value="6">LAINNYA</option>
						</select>
					</div>
				</div>
				</div>

			<div class="form-group">
				<label for="inputEmail3" class="col-sm-2 control-label">No Handphone</label>
				<div class="input-group col-md-9">
					<div class="col-md-12"><input type="number" class="form-control " name="hp" placeholder="nomorhp" required="" value='<?= $hp; ?>'></div>
				</div>
				</div>

			<div class="form-group">
				<label class="col-sm-2 control-label">Email</label>
				<div class="input-group col-md-9">
					<div class="col-md-12"><input type="email" class="form-control " name="email" value="<?= $email; ?>" placeholder="email" required=""></div>
				</div>
				</div>

			<div class="form-group">
				<label class="col-sm-2 control-label">Asal Sekolah (SMA/SMK/MA)</label>
				<div class="input-group col-md-9">
					<div class="col-md-12"><input type="text" class="form-control " name="nm_sekolah"  placeholder="Nama SMA" required="" value='<?= $nm_sekolah; ?>'></div>
				</div>
				</div>

			<div class="form-group">
				<label class="col-sm-2 control-label">Jenis Kelamin</label>
				<div class="col-sm-9">
  				<input type="radio" class="radio-inline" name="jk" value="L" <?= ($jk == 'L')?'checked':'' ?>>Laki - Laki
  				<input type="radio" class="radio-inline" name="jk" value="P" <?= ($jk == 'P')?'checked':'' ?>>Perempuan		
				</div>
				</div>

			<div class="form-group">
				<label class="col-md-2 control-label">Status</label>
				<div class="col-md-9" style="display: inline-block;">
					<input type="radio" name="status" value="K" class="radio-inline" <?= ($status == 'K')?'checked':'' ?>>Menikah
					<input type="radio" name="status" value="B" class="radio-inline" <?= ($status == 'B')?'checked':'' ?>>Belum Menikah
				</div>
			</div>
			
			<div class="form-group">
				<label class="col-sm-2 control-label">Nama Orang Tua</label>
				<div class="input-group col-md-9">
					<div class="col-md-12"><input type="text" class="form-control " name="nama_ortu"  placeholder="nama_ortu" required="" value='<?= $nm_ibu; ?>'></div>
				</div>
				</div>

			<div class="form-group">
				<label for="inputEmail3" class="col-sm-2 control-label">Alamat Orang Tua</label>
				<div class="input-group col-md-9">
					<div class="col-md-12"><textarea style="width:100%; height:80px" class="form-control" name="alamat_ortu" required=""><?= $alamat_ibu; ?></textarea></div>
				</div>
				</div>
			
			<div class="form-group">
				<label for="inputEmail3" class="col-sm-2 control-label">Pekerjaan Orang Tua</label>
				<div class="input-group col-md-9">
					<div class="col-md-12"><input type="text" class="form-control " name="kerja_ortu" placeholder="nama_ortu" required="" value='<?= $kerja_ibu; ?>'></div>
				</div>
				</div>

			<div class="form-group">
				<label for="inputEmail3" class="col-sm-2 control-label">Judul Skripsi</label>
				<div class="input-group col-md-9">
						<div class="col-md-12"><textarea style="width:100%; height:80px" class="form-control" name="judul" required=""><?= $judul; ?></textarea></div>
				</div>
				</div>

			<div class="form-group">
				<label for="inputEmail3" class="col-sm-2 control-label">Dosen Pembimbing </label>
				<div class="input-group col-md-9">
					<div class="col-md-12" style="margin-bottom: 10px;"><input type="text" class="form-control " name="dosen1" value="<?= $dosen1; ?>" placeholder="Nama dan Gelar Dosen Pembimbing 1" required=""></div>
					<div class="col-md-12"><input type="text" class="form-control " name="dosen2" value="<?= $dosen2; ?>" placeholder="Nama dan Gelar Dosen Pembimbing 2" required=""></div>
				</div>
				</div>

				<div class="form-group submit">
				<div class="col-sm-offset col-sm-12">
					<button type="submit" name="submit" class="btn btn-success">Simpan</button><br><br>
				</div>
				</div>
		</form>
		<?php endforeach; ?>
					</article>
	</div>
</div>
</div>

</div>