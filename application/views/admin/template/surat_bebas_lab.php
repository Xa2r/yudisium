<h2>bebas lab</h2>
<?php foreach ($mahasiswa as $mhs) : ?>
<span>nim : <?= $mhs['nim']; ?></span>
<span>nama : <?= $mhs['nama']; ?></span>
<span>jurusan : <?= $mhs['nm_prodi'] ?></span>

<?php endforeach; ?>