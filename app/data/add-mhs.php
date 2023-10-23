<?php 
include '../../conn/conn.php';
if (isset($_POST['submit'])) {
	
	$nim 		= $_POST['nim'];
	$nama 		= $_POST['nama'];
	$alamat 		= $_POST['alamat'];
	$prodi	= $_POST['prodi'];
	$email	= $_POST['email'];	
	$password		= $_POST['password'];
	$jk			= $_POST['jk'];
	$tgl = $_POST['tgl'];
	$foto		= $_FILES['foto']['name'];
	$tmpname	= $_FILES['foto']['tmp_name'];

	$sql = "INSERT INTO mhs VALUES ('$nama','$nim','$prodi','$email','$password','$jk','$tgl','$alamat','$foto')";
	$exe = $conn->query($sql);

	if ($exe) {

		move_uploaded_file($tmpname, "../../gambar/profile/$foto");
		
		echo "<script>
 					alert('Berhasil Tambah Data');
 					document.location.href='../../dashboard-mhs/login.php'
  				 </script>";

	}

} ?>