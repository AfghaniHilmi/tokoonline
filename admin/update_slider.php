


<?php
include '../koneksi/koneksi.php';

$folder = "../assets/slider";
$nama = $_FILES["foto"]["name"];
$ukuran_file = $_FILES["foto"]["size"];
$tmp = $_FILES["foto"]["tmp_name"];
$ekstensi_file = $_FILES["foto"]["type"];



$uploadName='depomanggatamalang'.$nama;
$test=$uploadName;
$tujuan = $folder."/".$test;
if(move_uploaded_file($tmp,$tujuan)){
	$id=$_POST['id'];
$judul=$_POST['judul_foto'];
$query=$mysqli->query("select foto from tb_slider where id_slider='$id'");
$data=mysqli_fetch_array($query);
 $folder="../assets/slider/".$data['foto']."";
unlink($folder);
$sql=$mysqli->query("UPDATE `tb_slider` SET `judul`='$judul',`foto`='$test' WHERE id_slider='$id'");

header('location:dashboard.php?menu=view_slider');
}

?>






