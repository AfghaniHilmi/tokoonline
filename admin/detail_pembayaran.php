<?php


include '../koneksi/koneksi.php';
$id=$_GET['id'];
$sql=$mysqli->query("SELECT * FROM `tb_pembayaran` WHERE id_user='$id'");
$tampil=mysqli_fetch_array($sql);
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<div class="container">
	<div class="col-md-12">
		<div class="table table-responsive">
		<table class="table table-konseded">
			<tr>
				<th>Nama Pemilik Rekening</th>
				<th>Nominal</th>
				<th>Foto/Bukti</th>
				<th>Action</th>
			</tr>
			<tr>
				<td><?=$tampil['Nama_pengirim']?></td>
				<td><?=$tampil['nominal']?></td>
				<td><a href="../assets/gambar/<?=$tampil['foto']?>"><img class="mw-100" width="75%"  src="../assets/gambar/<?=$tampil['foto']?>"></a></td>
				<td width="20%"><a href="accpemb.php?id=<?=$tampil['id_user']?>" class="btn btn-success">Terima Pembayaran</a></td>
			</tr>
		</table>
		</div>
	</div>
</div>
</body>
</html>