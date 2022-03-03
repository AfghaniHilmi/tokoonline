<?php
include '../koneksi/koneksi.php';
$id=$_GET['id'];
$query=$mysqli->query("select foto from tb_slider where id_slider='$id'");
$data=mysqli_fetch_array($query);
 $folder="../assets/slider/".$data['foto']."";
unlink($folder);
$sql=$mysqli->query("DELETE FROM `tb_slider` WHERE id_slider='$id'");


header('location:dashboard.php?menu=view_slider');


?>