<?php 

if (isset($_GET['halaman'])) {

 	$halaman = $_GET['halaman'];

 	if ($halaman == 'tabel-mhs') {
 		include '../app/view/tabel-mhs.php';
 	}else if ($halaman == 'mhs-profile') {
 		include '../app/view/mhs-profile.php';
 	}else{

 	}

 }

?>