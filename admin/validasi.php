<?php
session_start();
include '../koneksi/koneksi.php';
$username=$_POST['username'];
$password=md5($_POST['password']);
$query=$mysqli->query("SELECT * FROM `tb_admin` where username='$username' and password='$password'");
if ($query->num_rows >0) {
	$data=mysqli_fetch_array($query);
$_SESSION['username']=$data['username'];
	header('location:dashboard.php');
}else{

	echo "Pass Salah";
}





?>