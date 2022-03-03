<?php
include '../koneksi/koneksi.php';
$folder = "../assets/gambar";
$nama = $_FILES["foto"]["name"];
$ukuran_file = $_FILES["foto"]["size"];
$tmp = $_FILES["foto"]["tmp_name"];
$ekstensi_file = $_FILES["foto"]["type"];



$uploadName=date('dmy').$nama;
$test=$uploadName;
$tujuan = $folder."/".$test;
if(move_uploaded_file($tmp,$tujuan)){
$judul=$_POST['judul'];

$deskripsi=$_POST['isi'];
$sql=$mysqli->query("INSERT INTO `tb_artikel`(`judul`, `isi`,`foto`) VALUES ('$judul','$deskripsi','$test')");
header('location:dashboard.php?menu=view_artikel');


	}




?>