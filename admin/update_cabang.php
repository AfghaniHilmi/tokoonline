<?php
include '../koneksi/koneksi.php';
$id=$_POST['id'];
$nama=$_POST['nama_cabang'];
$alamat=$_POST['alamat'];
$query=$mysqli->query("UPDATE `tb_cabang` SET `nama_cabang`='$nama',`alamat`='$alamat' WHERE id_cabang='$id'");
header('location:dashboard.php?menu=view_cabang');





?>