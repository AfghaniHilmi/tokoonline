<?php
$id=$_GET['id'];



?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div class="container">
		<div class="col-md-6">
			<form action="save_resi.php" method="post">
				<input type="hidden" name="id" value="<?=$id?>">
				<label>No Resi</label>
				<input type="text" name="no_resi" class="form-control" required="">
				<input type="date" name="tanggal" class="form-control" required="">
				<button class="btn btn-info">Simpan</button>
			</form>
		</div>
	</div>

</body>
</html>