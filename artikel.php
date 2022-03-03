<?php

include 'koneksi/koneksi.php';
$query=$mysqli->query("SELECT * FROM `tb_artikel`");







?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	 <meta name="description" content="Depo manggata mojopahit malang,depo mojopahit">
  <meta name="keywords" content="jamu tetes,obat herbal,depo manggata,depo malang,jamu alami,085259199495,indonesia waras">
  <meta name="author" content="denta medika malang, Puji L Gunawan,085105030484,085259199495">
</head>
<body>
	<?php include 'menu.php'; ?>
<div class="container">
	<div class="row">
		<!--col-->
		<?php while ($tampil=mysqli_fetch_array($query)) {
			# code...
		 ?>
<div class="col-md-3 mt-3">
	<div class="card" style="width: 18rem;">
  <img class="card-img-top" src="assets/gambar/<?=$tampil['foto']?>" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title"><?=$tampil['judul']?></h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="detail_artikel.php?id=<?=$tampil['id_artikel']?>" class="btn btn-primary">Selengkapnya</a>
  </div>
</div>
</div>
<?php }?>
		<!--end-->
	</div>
</div>
</body>
<?php include 'footer.php'; ?>
</html>