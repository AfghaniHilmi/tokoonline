<?php
include '../koneksi/koneksi.php';

$folder = "../assets/slider";
$nama = $_FILES["foto"]["name"];
$ukuran_file = $_FILES["foto"]["size"];
$tmp = $_FILES["foto"]["tmp_name"];
$ekstensi_file = $_FILES["foto"]["type"];



$uploadName='depomanggatamalang'.$nama;
$test=$uploadName;
$tujuan = $folder."/".$test;
if(move_uploaded_file($tmp,$tujuan)){
$judul=$_POST['judul_foto'];
$sql=$mysqli->query("INSERT INTO `tb_slider`(`judul`,`foto`) VALUES ('$judul','$test')");

header('location:dashboard.php?menu=view_slider');
}

?>