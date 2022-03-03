<?php
include '../koneksi/koneksi.php';
$query=$mysqli->query("select * from tb_produk");






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
					<th>No</th>
					<th>Nama Produk</th>
					
					<th>Harga</th>
					<th>Foto</th>
					<th>Deskripsi</th>
					<th>Tindakan</th>
				</tr>
			</thead>
			<tbody>
				<?php $no=1; while ($tampil=mysqli_fetch_array($query)) {
					# code...
				?>
				<tr>
					<td><?=$no++?></td>
					<td><?=$tampil['nama_produk']?></td>
					<td><?=$tampil['harga']?></td>
					<td><img width="20%" src="../assets/foto_produk/<?=$tampil['foto']?>"></td>
					<td><?=substr($tampil['deskripsi'],0,200)?></td>
					<td><a href="?menu=edit_produk&id=<?=$tampil['id_produk']?>" class="btn btn-primary">Edit</a><a href="hapusproduk.php?id=<?=$tampil['id_produk']?>" class="btn btn-danger">Hapus</a></td>
				</tr>
			<?php } ?>
			</tbody>
		</table>
		<a href="?menu=addproduk" class="btn btn-info">Tambah Produk</a>
	</div>
</div>
</body>
</html>