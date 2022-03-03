<?php
session_start();
include 'koneksi/koneksi.php';
$ses=$_SESSION['id'];
$id=$_POST['id'];
$qty=$_POST['qty'];
$update=$mysqli->query("update tb_keranjang set qty='$qty' where id_keranjang='$id'");
if ($update==1) {
	
$ajor=$mysqli->query("select * from tb_keranjang where id_user='$ses' and status=0");
$data=mysqli_fetch_array($ajor);

$hasil=0;
while ( $data=mysqli_fetch_array($ajor)) {
	$hasil +=$data['harga'] * $data['qty'];
}
echo $hasil;


}


?>