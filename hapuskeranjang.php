<?php

include 'koneksi/koneksi.php';
$id=$_GET['id'];
$query=$mysqli->query("delete from tb_keranjang where id_keranjang='$id'");
header('location:keranjang.php');




?>