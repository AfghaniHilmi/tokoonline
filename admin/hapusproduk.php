<?php
include '../koneksi/koneksi.php';
$id=$_GET['id'];
$query=$mysqli->query("select foto from tb_produk where id_produk='$id'");
$data=mysqli_fetch_array($query);
 $folder="../assets/foto_produk/".$data['foto']."";
unlink($folder);
$sql=$mysqli->query("DELETE FROM `tb_produk` WHERE id_produk='$id'");
header('location:dashboard.php?menu=view_produk');








?>