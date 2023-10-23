<?php 
session_start();
include '../conn/conn.php';

if (isset($_SESSION['email'])) {
 	include '../app/view/mhs-dashboard.php';
 }else{
 	header("location: login.php");
 } 

?>