<?php
include '../koneksi/koneksi.php';

if ($_FILES["foto"]["name"] =="") {
	$id=$_POST['id'];
	$judul=$_POST['judul'];

$deskripsi=$_POST['isi'];
$mysqli->query("UPDATE `tb_artikel` SET `judul`='$judul',`isi`='$deskripsi' WHERE id_artikel='$id'");
header('location:dashboard.php?menu=view_artikel');
}else{

	$folder = "../assets/gambar";
$nama = $_FILES["foto"]["name"];
$ukuran_file = $_FILES["foto"]["size"];
$tmp = $_FILES["foto"]["tmp_name"];
$ekstensi_file = $_FILES["foto"]["type"];



$uploadName=date('dmy').$nama;
$test=$uploadName;
$tujuan = $folder."/".$test;
if(move_uploaded_file($tmp,$tujuan)){
	$id=$_POST['id'];
$judul=$_POST['judul'];

$deskripsi=$_POST['isi'];
$query=$mysqli->query("select foto from tb_artikel where id_artikel='$id'");
$data=mysqli_fetch_array($query);
 $folder="../assets/gambar/".$data['foto']."";
unlink($folder);
$mysqli->query("UPDATE `tb_artikel` SET `judul`='$judul',`isi`='$deskripsi',`foto`='$test' WHERE id_artikel='$id'");
header('location:dashboard.php?menu=view_artikel');

}
}







?>