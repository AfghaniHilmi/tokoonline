<?php
session_start();
include 'koneksi/koneksi.php';
$id=$_SESSION['id'];
if (isset($_SESSION['username'])) {
	
	$produk=$_POST['id_produk'];
	$harga=$_POST['harga'];
	$qty=$_POST['quant'];
	$tgl=date('Y-m-d');
	
	
	$query=$mysqli->query("INSERT INTO `tb_keranjang`( `id_produk`, `qty`, `harga`, `id_user`, `tgl`) VALUES ('$produk','$qty','$harga','$id','$tgl')");
	header('Location:keranjang.php');

}else{

	header('Location:login.php');
}







?>