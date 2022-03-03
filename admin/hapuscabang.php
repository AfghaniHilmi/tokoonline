<?php
include '../koneksi/koneksi.php';
$id=$_GET['id'];
$query=$mysqli->query("DELETE FROM `tb_cabang` WHERE id_cabang='$id'");
header('location:dashboard.php?menu=view_cabang');





?>