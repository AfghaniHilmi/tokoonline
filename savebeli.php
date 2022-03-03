<?php
session_start();

include 'koneksi/koneksi.php';
$id=$_SESSION['id'];
$no=$_POST['no'];
$brg=$_POST['id_produk'];
$qty=$_POST['qty'];
$bank=$_POST['bank'];
$tgl=date('Y-m-d');
$nama=$_POST['nama'];
$prov=$_POST['provinsi'];
$kab=$_POST['kabupaten'];
$kec=$_POST['kecamatan'];
$desa=$_POST['alamat'];
$ongkos=$_POST['ongkos'];
$kurir=$_POST['kurir'];
$hp=$_POST['no_hp'];
 $jumlah_dipilih = count($no);
foreach ($no as $x) {
	
	//echo $x;
	$query="INSERT INTO `tb_belanja`( `id_produk`, `qty`, `tgl`, `id_user`,`id_bank`) VALUES ('$brg[$x]','$qty[$x]','$tgl',$id,$bank)";

	$hasil=$mysqli->query($query);
}

$kata="INSERT INTO `tb_pengiriman`(`nama_penerima`, `provinsi`, `kab`, `kec`, `desa`,`no_hp`, `jenis_kurir`, `ongkir`,`id_user`) VALUES ('$nama','$prov','$kab','$kec','$desa','$hp','$kurir','$ongkos','$id')";

//$update="update tb_keranjang set status='1' where id_user='$id'";
$hasil=$mysqli->query($kata);

header('location:statusorder.php');

?>