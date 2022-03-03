<?php include 'koneksi/koneksi.php';
$query=$mysqli->query("select * from tb_produk");
$artikel=$mysqli->query("select * from tb_artikel  order by id_artikel desc limit 1");

 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Depo manggata mojopahit malang,depo mojopahit">
  <meta name="keywords" content="jamu tetes,obat herbal,depo manggata,malang,jamu alami">
  <meta name="author" content="denta medika malang, Puji L Gunawan 089667922536,089667922536">
</head>
<body>
	<?php include 'menu.php'; ?>
<div class="container">
	<div class="row">
		<div class="col-md-3 col-xs-6 mr-3 mt-3">
				
			<?php while ($tampil=mysqli_fetch_array($artikel)) {
				# code...
			 ?>
				<div class="card" >
  <img class="card-img-top" src="assets/gambar/<?=$tampil['foto']?>" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title"><?=$tampil['judul']?></h5>
    <p class="card-text"><?php echo substr($tampil['isi'],0,150) ?>...</p>
    <a href="detail_artikel.php?id=<?=$tampil['id_artikel']?>" class="btn btn-primary">Selengkapnya</a>
  </div>
</div>
<?php }?>
			</div>
		
			<!--slider-->
			
			<div class="col-md-5 col-xs-10 mt-3 ">
			<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
		    <ol class="carousel-indicators">
			    <?php 
			    	$no = 0;
					for($no;$no<3;$no++){
				?>
				    <li data-target="#carouselExampleIndicators" data-slide-to="<?php echo $no ?>" class="<?php if($no == 0){echo 'active';}else{echo 'notactive';}?>"></li>
				<?php 
					}
				?>
			</ol>
			  <div class="carousel-inner">
			 	 <?php 
			 	 $slider=$mysqli->query("SELECT * FROM `tb_slider`");
					$no = 0;
					while($row = mysqli_fetch_array($slider)){
				?>
			    <div class="carousel-item <?php if($no == 0){echo 'active';}else{echo 'notactive';}?>">
			      <img class="d-block w-100"  src="assets/slider/<?php echo $row['foto']?>">
			    </div>
			    <?php 
					$no++;}
				?>
			  </div>
			  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
			    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
			    <span class="sr-only">Previous</span>
			  </a>
			  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
			    <span class="carousel-control-next-icon" aria-hidden="true"></span>
			    <span class="sr-only">Next</span>
			  </a>
</div>

			<!--end-->
		</div>
		<div class="col-md-3 col-xs-6 mt-3 mr-2"><h3>Info Pemesanan</h3>	
			<p>Hubungi</p>
			<p><b>Depo Manggata Mojopahit Malang</b></p>
			<p><b>Bpk Drg Puji L Gunawan</b></p>
				<p><b><a style="color:green;" href="http://dentamedika.com">Klinik Gigi Denta Medika</a></b></p>
				 <a class="nav-link" style="color:red;" href="https://api.whatsapp.com/send?phone=6289667922536&text=Halo%20Mas%20Saya%20Barusan%20Baca%20Websitenya"><i class="fa fab fa-whatsapp fa-1x" ></i> 089667922536</a>
				  <a class="nav-link" style="color:red;" href="https://api.whatsapp.com/send?phone=6289667922536&text=Halo%20Mas%20Saya%20Barusan%20Baca%20Websitenya"><i class="fa fab fa-whatsapp fa-1x"></i> 089667922536</a>

		</div>
		
		<hr>	
		<div class="col-md-12 col-xs-12 mt-2">
			<center><h3>Jamu Tetes Mpro</h3></center><hr>
		</div>

		<?php while ($tampil=mysqli_fetch_array($query)) {
			# code...
		 ?>
	<div class="col-md-4 col-xs-12 mt-3">
		<!--card-->
<div class="card " style="width: 18rem;">
 <a href="detailproduk.php?id=<?=$tampil['id_produk']?>" class="a"> <img class="card-img-top  " src="assets/foto_produk/<?=$tampil['foto']?>" alt="Card image cap"></a>
  <div class="card-body">
    <center><p class="card-text"><b><?=$tampil['nama_produk']?></b></p><p class="card-text">Rp.<?=$tampil['harga']?></p> <a href="detailproduk.php?id=<?=$tampil['id_produk']?>" class="btn btn-primary a">Detail</a></center>
  </div>
</div>

		<!--end-->
	</div>
<?php }?>
	</div>
</div>
</body>
<?php include 'footer.php'; ?>
</html>
<script type="text/javascript">
	$(document).ready(function(){
$('.a').hover(function(){
//$(".card-img-top").addClass("animated infinite shake");
 $(".card-img-top").toggleClass("animated infinite shake");
//$(".card-img-top").removeClass("animated infinite shake");


});



	});
</script>