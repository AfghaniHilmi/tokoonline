<?php
include '../koneksi/koneksi.php';
$query=$mysqli->query("SELECT * FROM `tb_artikel`");







?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<div class="container">
	<div class="col-md-12">
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>Judul</th>
					<th>Isi</th>
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
					<td><?=substr($tampil['isi'],0,250)?>...</td>
					<td><img width="50%" src="../assets/gambar/<?=$tampil['foto']?>"></td>
					<td width="20%"><a href="?menu=edit_artikel&id=<?=$tampil['id_artikel']?>" class="btn btn-info">Edit</a><a href="hapusart.php?id=<?=$tampil['id_artikel']?>" class="btn btn-danger">Hapus</a></td>
				</tr>
			<?php }?>
			</tbody>
		</table>
		<a href="?menu=add_artikel" class="btn btn-info">Tambah Artikel</a>
	</div>
</div>
</body>
</html>