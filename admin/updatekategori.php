<?php

include '../koneksi/koneksi.php';
$id=$_POST['id'];
$kategori=$_POST['kategori'];
$query=$mysqli->query("update tb_kategori set nama_kategori='$kategori' where id_kategori='$id'");

header('Location:dashboard.php?menu=view_kategori');




?>