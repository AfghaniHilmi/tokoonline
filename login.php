<!DOCTYPE html>
<html>
<head>
	<title></title>
	 <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  
  <meta name="description" content="Depo manggata mojopahit malang,depo mojopahit">
  <meta name="keywords" content="jamu tetes,obat herbal,depo manggata,depo malang,jamu alami,085259199495,indonesia waras">
  <meta name="author" content="denta medika malang, Puji L Gunawan,085105030484,085259199495">
</head>
<body>
	<?php include 'menu.php'; ?>
	<div class="container">
		<div class="row">
		<div class="col-md-12 col-xs-12 mt-3">
		
<center>
	<div class="col-md-6 col-xs-12 mt-5">
		<h3>Silahkan Login Dulu Sebelum Belanja</h3>
		<?php  if (isset($_SESSION['keterangan'])) {
				echo $_SESSION['keterangan'];
				unset($_SESSION['keterangan']);
			} ?>
		<form action="validasi.php" method="post">
			<label>Username</label>
			<input type="text" name="username" class="form-control">
			<label>Password</label>
			<input type="password" name="password" class="form-control">
			<button class="btn btn-primary btn-block mt-2">Login</button>
		</form>
		<p class="mt-2">Belum Punya Akun?Silahkan <a href="registrasi.php" >Registrasi</a></p>
	</div>
</center>

			</div>
		</div>
	</div>

</body>
<?php include 'footer.php'; ?>
</html>