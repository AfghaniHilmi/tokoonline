<?php
include 'koneksi/koneksi.php';
$query=$mysqli->query("SELECT * FROM `tb_cabang`");

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php include 'menu.php'; ?>
<div class="container">
	<div class="row">
<?php while ($tampil=mysqli_fetch_array($query)) {
	# code...
?>
	<div class="col-md-3 mt-3">
		<ul class="list-group">
  <li class="list-group-item disabled">Nama Cabang: <?=$tampil['nama_cabang']?></li>
 <li class="list-group-item disabled">Alamat: <?=$tampil['alamat']?></li>
</ul>
	</div>
<?php } ?>
</div>
</div>
</body>
<?php include 'footer.php'; ?>
</html>