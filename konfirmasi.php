<?php
include 'koneksi/koneksi.php';






?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php include 'menu.php'; ?>
<div class="container">
	<div class="col-md-6 mt-2">
		<center><h3>Konfirmasi Pembayaran</h3></center>
		<form action="savekonfirmasi.php" method="post" enctype="multipart/form-data">
			<label>Nama Pemilik Rekening</label>
			<input type="text" name="nama" class="form-control" required="">
			<label>Nominal</label>
			<input type="text" name="nominal" class="form-control" required="">
			<label>Tujuan Bank</label>
			<select name="bank" class="form-control">
			<?php $bank=$mysqli->query("select * from tb_bank"); foreach ($bank as $tampil) {
				# code...
			 ?>
<option value="<?=$tampil['id_bank']?>"><?=$tampil['nama_bank']?> <?=$tampil['rekening']?></option>
<?php }?>
		</select>
		<label>Foto</label>
		<input type="file" name="foto" class="form-control" required="">
		<button class="btn btn-info mt-2">Konfirmasi</button>
		</form>
	</div>
</div>
</body>
<?php include 'footer.php'; ?>
</html>