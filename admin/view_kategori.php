<?php
include '../koneksi/koneksi.php';
$query=$mysqli->query("select * from tb_kategori");







?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<div class="container">
	<div class="col-md-6">
		<table class="table table-bordered">
			<thead><tr>
				<th>No</th>
				<th>Kategori</th>
				<th>Action</th>
			</tr></thead>
			<tbody>
				<?php $no=1; while ($tampil=mysqli_fetch_array($query)) {
				
				 ?>
				<tr>
					<td><?=$no++?></td>
					<td><?=$tampil['nama_kategori']?></td>
					<td><a href="?menu=editkategori&id=<?=$tampil['id_kategori']?>" class="btn btn-info">Edit</a><a href="hapuskategori.php?id=<?=$tampil['id_kategori']?>" class="btn btn-danger">Hapus</a></td>
				</tr>


			<?php }?>
			</tbody>
		</table>
		<a href="?menu=add_kategori" class="btn btn-info">Tambah Kategori</a>
	</div>
</div>
</body>
</html>