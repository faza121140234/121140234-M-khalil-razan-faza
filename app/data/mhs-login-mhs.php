<?php 
session_start();
include '../../conn/conn.php';

if (isset($_POST['submit'])) {
 	
 	$email = $_POST['email'];
 	$password = $_POST['password'];

 	$sql  = "SELECT * FROM mhs WHERE email = '$email' AND password = '$password'";
 	$exe  = $conn->query($sql);
 	$cek  = $exe->num_rows;
 	$data = $exe->fetch_array();

 	$getNim   = $data['nim'];
 	$getNama  = $data['nama'];
 	$getJk	  = $data['jenkel'];
 	$getfoto  = $data['foto'];
 	$getProdi  = $data['prodi'];


 	if($cek == 1) {

 		$_SESSION['email'] = $email;
 		$_SESSION['password'] = $password;
 		$_SESSION['nim']	  = $getNim;
 		$_SESSION['nama']     = $getNama;
 		$_SESSION['jenkel']       = $getJk;
 		$_SESSION['prodi']      = $getProdi;
 		$_SESSION['foto']     = $getfoto;
 		
  		header('location: ../../dashboard-mhs/?halaman=mhs-profile');

 	}else{
  		
 		
 		 echo "<script>alert('Data tidak ada silakan daftar terlebih dahulu');</script>"; 
 		 header('location: ../../dashboard-mhs/login.php');


 	}


 } 

?>