<h5 class="text-uppercase mb-3">Tabel | <span class="btn btn-success btn-sm text-white">Mahasiswa</span></h5>
<div class="table-responsive">
<table class="table table-striped table-hover table-responsive">
	<tr>
		<td>No</td>
		<td>Nama</td>
		<td>NIM</td>
		<td>Prodi</td>
		<td>E-mail</td>
		<td>Password</td>
		<td>Jenis Kelamin</td>
		<td>Tanggal Lahir</td>
		<td>Alamat</td>
		<td>foto</td>
	</tr>
	<?php 
	$sql  = "SELECT * FROM mhs ";
	$exe  = $conn->query($sql);
	$no = 1;
	while ($data = $exe->fetch_array()) { ?>
		<tr>
			<td><?= $no ++ ?></td>
			<td><?= $data['nama']?></td>
			<td><?= $data['nim']?></td>
			<td><?= $data['prodi']?></td>
			<td><?= $data['email']?></td>
			<td><?= $data['password']?></td>
			<td><?= $data['jenkel']?></td>
			<td><?= $data['tgl_lhr']?></td>
			<td><?= $data['alamat']?></td>

			<td><img src="../gambar/pengaduan/<?= $data['foto']?>" class="img-fluid" width="50"></td>
		</tr>
	
<?php }	?>
</table>
<div class="table-responsive">