<h5 class="text-uppercase">Hi Wellcome <?= $_SESSION['nama'] ?></h5>
<div class="container mt-3">


	<center>
	<img class="img-rounded" width="100" src="../gambar/profile/<?= $_SESSION['foto'] ?>">
	</center>
	<table class="table center mt-4">
		<tr>
			<td>Nama</td>
			<td><input class="form-control" type="text" name="" readonly="" value="<?= $_SESSION['nama'] ?>"></td>
		</tr>
		<tr>
			<td>E-Mail</td>
			<td><input class="form-control" type="text" name="" readonly="" value="<?= $_SESSION['email'] ?>"></td>
		</tr>
		<tr>
			<td>Password</td>
			<td><input class="form-control" type="password" name="" readonly="" value="<?= $_SESSION['password'] ?>"></td>
		</tr>
		<tr>
			<td>Jenis Kelamin</td>
			<td><input class="form-control" type="text" name="" readonly="" value="<?= $_SESSION['jenkel'] ?>"></td>
		</tr>
		<tr>
			<td>Prodi</td>
			<td><input class="form-control" type="text" name="" readonly="" value="<?= $_SESSION['prodi'] ?>"></td>
		</tr>
	</table>

