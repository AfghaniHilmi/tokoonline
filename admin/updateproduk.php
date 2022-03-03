<?php

include '../koneksi/koneksi.php';
if ($_FILES['foto']['name']=="") {
	$id=$_POST['id'];
	$nama=$_POST['nama'];
$harga=$_POST['harga'];
$deskripsi=$_POST['editor1'];
$kategori=$_POST['kategori'];
echo $update=$mysqli->query("UPDATE `tb_produk` SET `nama_produk`='$nama',`harga`='$harga',`deskripsi`='$deskripsi',`id_kategori`='$kategori' WHERE id_produk='$id'");
header('location:dashboard.php?menu=view_produk');
}else{

	$folder = "../assets/foto_produk";
$nama = $_FILES["foto"]["name"];
$ukuran_file = $_FILES["foto"]["size"];
$tmp = $_FILES["foto"]["tmp_name"];
$ekstensi_file = $_FILES["foto"]["type"];



$uploadName=date('dmy').$nama;
$test=$uploadName;
$tujuan = $folder."/".$test;
if(move_uploaded_file($tmp,$tujuan)){
	$id=$_POST['id'];
$nama=$_POST['nama'];
$harga=$_POST['harga'];
$deskripsi=$_POST['editor1'];
$kategori=$_POST['kategori'];
$query=$mysqli->query("select foto from tb_produk where id_produk='$id'");
$data=mysqli_fetch_array($query);
 $folder="../assets/foto_produk/".$data['foto']."";
unlink($folder);
$update=$mysqli->query("UPDATE `tb_produk` SET `nama_produk`='$nama',`harga`='$harga',`deskripsi`='$deskripsi',`foto`='$test',`id_kategori`='$kategori' WHERE id_produk='$id'");
header('location:dashboard.php?menu=view_produk');
}
}




?>