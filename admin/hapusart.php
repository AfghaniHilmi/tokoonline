<?php
include '../koneksi/koneksi.php';
$id=$_GET['id'];
$query=$mysqli->query("select foto from tb_artikel where id_artikel='$id'");
$data=mysqli_fetch_array($query);
 $folder="../assets/gambar/".$data['foto']."";
unlink($folder);
$del=$mysqli->query("DELETE FROM `tb_artikel` WHERE id_artikel='$id'");

header('location:dashboard.php?menu=view_artikel');





?>