<?php
include '../koneksi/koneksi.php';
$nama=$_POST['nama_cabang'];
$alamat=$_POST['alamat'];
$query=$mysqli->query("INSERT INTO `tb_cabang`( `nama_cabang`, `alamat`) VALUES ('$nama','$alamat')");
header('location:dashboard.php?menu=view_cabang');





?>