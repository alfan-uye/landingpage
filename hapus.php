<?php 
include 'koneksi.php';
 
$nis = $_GET['nis'];
 
 
$queri=mysqli_query($connect,"delete from daftar where nis='$nis'");
 
 if($queri){
	echo '<script>alert("Data berhasil dihapus. Terimakasih.")</script>';
	header("location:tampil.php");
	exit;
} else {
	echo '<script>alert("Data GAGAL dihapus")</script>';
	exit;
 
?>