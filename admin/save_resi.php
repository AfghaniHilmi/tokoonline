<?php
include '../koneksi/koneksi.php';
$id=$_POST['id'];
$resi=$_POST['no_resi'];
$tanggal=$_POST['tanggal'];
$query=$mysqli->query("update tb_pengiriman set no_resi='$resi',status=1,tgl='$tanggal' where id_user='$id'");
header('Location:dashboard.php?menu=view_order');



?>