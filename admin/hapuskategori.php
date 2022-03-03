<?php
include '../koneksi/koneksi.php';
$id=$_GET['id'];
$query=$mysqli->query("delete from tb_kategori where  id_kategori='$id'");

header('Location:dashboard.php?menu=view_kategori');





?>