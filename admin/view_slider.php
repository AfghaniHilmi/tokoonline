<?php include '../koneksi/koneksi.php';
$query=$mysqli->query("SELECT * FROM `tb_slider`");
 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<div class="container">
	<div class="row">
		<div class="col-md-8">
			<table class="table table-bordered">
				<thead>
					<tr>
						<th>Judul</th>
						<th>Foto</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<?php while ($tampil=mysqli_fetch_array($query)) {
						# code...
					 ?>
					<tr>
						<td><?=$tampil['judul']?></td>
						<td><img width="30%" src="../assets/slider/<?=$tampil['foto']?>" class="mw-100"></td>
						<td width="20%"><a href="?menu=edit_slider&id=<?=$tampil['id_slider']?>" class="btn btn-info">Edit</a><a href="hapus_slider.php?id=<?=$tampil['id_slider']?>" class="btn btn-danger">Hapus</a></td>
					</tr>
				<?php }?>
				</tbody>
			</table>
			<a href="?menu=addslider" class="btn btn-success">Add Slider</a>
		</div>
	</div>
</div>
</body>
</html>