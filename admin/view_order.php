<?php
include '../koneksi/koneksi.php';
$query=$mysqli->query("select nama,sum(qty) as jumlah,status,tgl,id_user from tb_belanja  join registrasi on tb_belanja.id_user=registrasi.id_reg group by id_user");









?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<div class="container">
	<div class="col-md-12">
		<center><h3>Data Pembelian</h3></center>
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>Nama Pembeli</th>
					
					<th>Jumlah Pembelian</th>
					<th>Status Pembayaran</th>
					<th>Tanggal Checkout</th>
					<th>Tindakan</th>
				</tr>
			</thead>

			<tbody>
				<?php while ($tampil=mysqli_fetch_array($query)) {
					# code...
				 ?>
				 <tr>
				 	<td><?=$tampil['nama']?></td>
				 	<td><?=$tampil['jumlah']?></td>
				 	<td><?php if ($tampil['status']==0) {
				 		echo "Belum Melakukan Pembayaran";
				 	}else if($tampil['status']==1){
				 		echo "<h3 style='color:red;'>User Telah Mengkonfirmasi Pembayaran</h3>";
				 	}else if($tampil['status']==2){
				 		echo "<h3 style='color:green;'>Pembayaran di Terima</h3>";
				 	}else if($tampil['status']==3){
				 		echo "<h3 style='color:green;'>Barang Telah Dikirim Telah Dikirim</h3>";
				 	} ?></td>
				 	<td><?=$tampil['tgl']?></td>
				 	<td><a href="?menu=detail_pembayaran&id=<?=$tampil['id_user']?>" class="btn btn-info"> Acc Pembayaran</a><?php if ($tampil['status']==2) {
				 		# code...
				 	 ?><a href="?menu=detailalamat&id=<?=$tampil['id_user']?>" class="btn btn-primary">Alamat Pengiriman</a><?php }?></td>
				 	
				 </tr>
				<?php }?>
			</tbody>
		</table>
	</div>
</div>
</body>
</html>