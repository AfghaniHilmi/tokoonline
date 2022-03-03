
<!DOCTYPE html>
<html>
<head>
	<title></title>
	 <meta name="description" content="Depo manggata mojopahit malang,depo mojopahit">
  <meta name="keywords" content="jamu tetes,obat herbal,depo manggata,depo malang,jamu alami,085259199495,indonesia waras">
  <meta name="author" content="denta medika malang, Puji L Gunawan,085105030484,085259199495">
</head>
<body>
	<?php include 'menu.php'; ?>
	<?php
include 'koneksi/koneksi.php';
$id=$_SESSION['id'];
$bayar=$mysqli->query("select status,nama_bank,rekening,nama_pemilik from tb_belanja join tb_bank on tb_belanja.id_bank=tb_bank.id_bank  where id_user='$id'");
$query=$mysqli->query("select * from tb_belanja join tb_produk on tb_belanja.id_produk=tb_produk.id_produk where id_user='$id'");
$data=mysqli_fetch_array($bayar);

$resi=$mysqli->query("select no_resi,jenis_kurir from tb_Pengiriman where id_user='$id'");
$seri=mysqli_fetch_array($resi);
?>
	<div class="container">
		<div class="row">
		<div class="col-md-6 mt-3">
			<h3>Status Pembayaran</h3>
			<div class="alert alert-danger" role="alert">
 <?php if ($data['status']==0) {
 	echo "Anda Belum Melakukan Pembayaran, Segera lakukan Pembayaran ke ".$data['nama_bank']." ".$data['rekening']." An ".$data['nama_pemilik']." Dan segera Lakukan Konfirmasi Pembayaran <a href='konfirmasi.php' class='btn btn-success'>Konfirmasi Pembayaran</a> ";
 }else if($data['status']==1){

 	echo "Anda Telah Melakukan Konfirmasi Pembayaran, Pembayaran Sedang di Vertifikasi Admin";
 }else if($data['status']==2){
echo "<p>Pembayaran Telah diterima Admin, Barang akan Segera dikirim</p>";


 }else if($data['status']==3){
echo "<p>Barang Telah Dikirim Dengan No Resi ".$seri['no_resi']." Dengan Kurir ".$seri['jenis_kurir']."</p>";


 } ?>
</div>

		</div>
		<div class="col-md-6 mt-3">
	<h3>Rincian Order</h3>
	<table class="table table konseded">
		<thead><tr>
			<th>Produk</th>
			<th>Harga</th>
			<th>Qty</th>
		</tr></thead>
		<tbody>
			<?php while ($tampil=mysqli_fetch_array($query)) {
				# code...
			 ?>
			<tr>
				<td><?=$tampil['nama_produk']?></td>
				<td><?=$tampil['harga']?></td>
				<td><?=$tampil['qty']?></td>
			</tr>
		<?php }?>
		</tbody>
	</table>
</div>

	</div>
</div>
</body>
</html>