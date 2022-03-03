<?php

include 'koneksi/koneksi.php';
$id=$_GET['id'];
$query=$mysqli->query("SELECT * FROM `tb_artikel` where id_artikel='$id'");
$tampil=mysqli_fetch_array($query);







?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php include 'menu.php'; ?>
<div class="container">
	<div class="row mt-3">
	<div class="col-md-9">
		<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4"><?=$tampil['judul']?></h1>
    <p class="lead"><img src="assets/gambar/<?=$tampil['foto']?>"><?=$tampil['isi']?></p>
  </div>
</div>
		<!--end-->
	</div>
	</div>
</div>
</body>
<?php include 'footer.php'; ?>
</html>