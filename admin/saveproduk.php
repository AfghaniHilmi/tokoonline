<?php
include '../koneksi/koneksi.php';
$folder = "../assets/foto_produk";
$nama = $_FILES["foto"]["name"];
$ukuran_file = $_FILES["foto"]["size"];
$tmp = $_FILES["foto"]["tmp_name"];
$ekstensi_file = $_FILES["foto"]["type"];



$uploadName=date('dmy').$nama;
$test=$uploadName;
$tujuan = $folder."/".$test;
if(move_uploaded_file($tmp,$tujuan)){
$nama=$_POST['nama'];
$harga=$_POST['harga'];
$deskripsi=$_POST['editor1'];
$kategori=$_POST['kategori'];
$sql=$mysqli->query("INSERT INTO `tb_produk`(`nama_produk`, `harga`, `deskripsi`, `foto`,`id_kategori`) VALUES ('$nama','$harga','$deskripsi','$test','$kategori')");
header('location:dashboard.php?menu=view_produk');


	}




?>