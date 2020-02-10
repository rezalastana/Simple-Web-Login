<!DOCTYPE html>
<html>
<head>
	<title>Dashboard Rumah Makan</title>
	<link rel="stylesheet" type="text/css" href="gambar.css">
</head>
<body>
<?php 
include 'config.php';
 
// mengaktifkan session
session_start();
 
// cek apakah user telah login, jika belum login maka di alihkan ke halaman login
if($_SESSION['status'] !="login"){
	header("location:index.php");
}
?>
<a href="logout.php" class="tombol" >LOGOUT</a>
<center><h2>SELAMAT DATANG DI RM. YAKIN KENYANG</h2></center>

<br>
<br>
<div class="back">
<h3>Menu Masakan :</h3>
<center>
	<img class="gambar" src="gambar/1.jpg">
	<img class="gambar" src="gambar/2.jpg">
	<img class="gambar" src="gambar/3.png">
	<img class="gambar" src="gambar/4.jpeg">
	<img class="gambar" src="gambar/5.jpg"><br></center>

<h3>Menu Minuman :</h3>
<center>
	<img class="gambar" src="gambar/11.jpg">
	<img class="gambar" src="gambar/22.jpg">
	<img class="gambar" src="gambar/33.jpg">
	<img class="gambar" src="gambar/44.jpg">
	<img class="gambar" src="gambar/55.jpg"></center>
</div>


</body>
</html>
