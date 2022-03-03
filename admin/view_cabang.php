<?php
include '../koneksi/koneksi.php';
$query=$mysqli->query("SELECT * FROM `tb_cabang`");








?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<div class="container">
	<div class="col-md-8">
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>Nama Agen</th>
					<th>Alamat</th>
					<th>Action</th>
				</tr>
			</thead>

			<tbody>
				<?php while ($tampil=mysqli_fetch_array($query)) {
				
			 ?>
				<tr>
					<td><?=$tampil['nama_cabang']?></td>
					<td><?=$tampil['alamat']?></td>
					<td><a href="?menu=edit_cabang&id=<?=$tampil['id_cabang']?>" class="btn btn-primary">Edit</a><a href="hapuscabang.php?id=<?=$tampil['id_cabang']?>" class="btn btn-danger">Hapus</a></td>
				</tr>
			<?php }?>
			</tbody>
		</table>
		<a href="?menu=add_cabang" class="btn btn-info">Tambah Cabang</a>
	</div>
</div>
</body>
</html>