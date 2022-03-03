<?php
session_start();
include 'koneksi/koneksi.php';
$nama=$_POST['nama'];
$alamat=$_POST['alamat'];
$user=$_POST['username'];
$pass=md5($_POST['password']);
$hp=$_POST['nohp'];
$query=$mysqli->query("INSERT INTO `registrasi`( `nama`, `alamat`, `username`, `password`,`nohp`) VALUES ('$nama','$alamat','$user','$pass','$hp')");
$_SESSION['keterangan']="Registrasi Berhasil";
header('Location:login.php');





?>