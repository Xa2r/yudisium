<?php if ($mahasiswa): ?>
<?php foreach ($mahasiswa as $data):
    $nim = $data['nama'];
    $tgl_lahir = $data['tgl_lahir'];
    $prodi = $data['nm_prodi'];
?>
<table>
	<tr>
    	<td>Nama</td><td>:</td><td><?= $nim; ?></td>
    </tr>
    <tr>
    	<td>Program Studi</td><td> :</td><td><?= $prodi; ?></td>
    </tr>
    <tr>
    	<td>Tanggal lahir</td><td> :</td><td><?= $tgl_lahir; ?></td>
    </tr>
</table>
<?php endforeach; ?>
<?php endif; ?>