<?php
session_start();
include 'koneksi/koneksi.php';
$folder = "assets/gambar";
$nama = $_FILES["foto"]["name"];
$ukuran_file = $_FILES["foto"]["size"];
$tmp = $_FILES["foto"]["tmp_name"];
$ekstensi_file = $_FILES["foto"]["type"];



$uploadName=date('dmy').$nama;
$test=$uploadName;
$tujuan = $folder."/".$test;
if(move_uploaded_file($tmp,$tujuan)){
	$id=$_SESSION['id'];
	$nama=$_POST['nama'];
	$nominal=$_POST['nominal'];
	$tujuan=$_POST['bank'];
$sql=$mysqli->query("INSERT INTO `tb_pembayaran`( `Nama_pengirim`, `tujuan_bank`, `nominal`, `foto`,`id_user`) VALUES ('$nama','$tujuan','$nominal','$test','$id')");

header('location:statusorder.php');


}



?>