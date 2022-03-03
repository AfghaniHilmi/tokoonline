<?php

include '../koneksi/koneksi.php';
$kategori=$_POST['kategori'];
$query=$mysqli->query("INSERT INTO `tb_kategori`( `nama_kategori`) VALUES ('$kategori')");

header('Location:dashboard.php?menu=view_kategori');




?>