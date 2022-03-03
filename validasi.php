<?php
session_start();
include 'koneksi/koneksi.php';
$username=$_POST['username'];
$password=md5($_POST['password']);
$query=$mysqli->query("select * from registrasi where username='$username' and password='$password'");
if ($query->num_rows >0) {
	$tampil=mysqli_fetch_array($query);
	$_SESSION['username']=$tampil['username'];
	$_SESSION['id']=$tampil['id_reg'];
	$SESSION['status']='login';
	header('location:index.php');
}else{

$_SESSION['keterangan']='<div class="alert alert-primary" role="alert">
  Password Salah
</div>';
header('location:login.php');
}



?>