<?php
include '../koneksi/koneksi.php';
$id=$_GET['id'];
$query=$mysqli->query("select * from tb_kategori where id_kategori='$id'");
$edit=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<div class="container">
	<div class="col-md-6">
		<form action="updatekategori.php" method="post">
			<input type="hidden" name="id" value="<?=$edit['id_kategori']?>">
			<label>Kategori</label>
			<input type="text" name="kategori" value="<?=$edit['nama_kategori']?>" class="form-control">
			<button class="btn btn-info">Simpan</button>
		</form>
	</div>
</div>
</body>
</html>