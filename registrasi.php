<!DOCTYPE html>
<html>
<head>
	<title></title>
	 <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
</head>
<body>
	<?php include 'menu.php'; ?>
<div class="container">
	<div class="row">
		<div class="col-md-12 mt-4">
			<h3>Isilah Form Dibawah ini dengan Benar Untuk Melakukan Registrasi Akun </h3>
			
				<div class="col-md-10 col-xs-12">
					
				<form action="save_registrasi.php" method="post">
					<label>Nama Lengkap</label>
					<input type="text" name="nama" class="form-control" required="">
					<label>Alamat</label>
					<input type="text" name="alamat" class="form-control">
					
					<label>Username</label>
					<input type="text" name="username" class="form-control">
					<label>Password</label>
					<input type="password" name="password" class="form-control" required="">
					<label>No Hp</label>
					<input type="text" name="nohp" class="form-control" required="">
					<button class="btn btn-info btn-block mt-2">Registrasi</button>
				</form>
				</div>
			
		</div>
	</div>
</div>
</body>
<?php include 'footer.php'; ?>
</html>