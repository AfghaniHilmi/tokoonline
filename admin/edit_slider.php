<?php include '../koneksi/koneksi.php';
$id=$_GET['id'];
$query=$mysqli->query("SELECT * FROM `tb_slider` where id_slider='$id'");
$tampil=mysqli_fetch_array($query);

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Edit Slider</title>
</head>
<body>
<div class="container">
	<div class="col-md-6">
		<form action="update_slider.php" method="post" enctype="multipart/form-data">
			<input type="hidden" name="id" value="<?=$tampil['id_slider']?>">
			<label>Judul Foto</label>
			<input type="text" name="judul_foto" value="<?=$tampil['judul']?>" class="form-control">
			<label>Foto</label>
			<input type="file" name="foto" class="form-control" required="">
			<button class="btn btn-info">Simpan</button>
		</form>
	</div>
</div>
</body>
</html>