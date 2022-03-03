<?php
include '../koneksi/koneksi.php';
$id=$_GET['id'];
$query=$mysqli->query("SELECT * FROM `tb_cabang` where id_cabang='$id'");
$tampil=mysqli_fetch_array($query);








?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<div class="container">
	<div class="col-md-6">
		<form action="update_cabang.php" method="post">
			<input type="hidden" name="id" value="<?=$tampil['id_cabang']?>">
			<label>Nama Cabang</label>
			<input type="text" name="nama_cabang" value="<?=$tampil['nama_cabang']?>" class="form-control">
			<label>Alamat</label>
			<textarea name="alamat" class="form-control"><?=$tampil['alamat']?></textarea>
			<button class="btn btn-danger">Simpan</button>
		</form>
	</div>
</div>
</body>
</html>