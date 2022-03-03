<?php

include '../koneksi/koneksi.php';
$id=$_GET['id'];
$sql=$mysqli->query("update tb_belanja set status='2' where id_user='$id'");
header('Location:dashboard.php?menu=view_order');




?>