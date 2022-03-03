<?php
include '../koneksi/koneksi.php';
$id=$_GET['id'];
$query=$mysqli->query("select * from tb_artikel where id_artikel='$id'");
$tampil=mysqli_fetch_array($query);

?>
<!DOCTYPE html>
<html>
<head>
	<title>	</title>
</head>
<body>
<div class="container">
<div class="col-md-10">
<form action="update_artikel.php" method="post" enctype="multipart/form-data">
  <input type="hidden" name="id" value="<?=$tampil['id_artikel']?>">
<label>	Judul Artike</label>
<input type="text" name="judul" value="<?=$tampil['judul']?>" class="form-control">
<label>	Foto</label>
<input type="file" name="foto" class="form-control">

<label>	Isi</label>
  <textarea id="isi" name="isi" rows="10" cols="80"><?=$tampil['isi']?></textarea>
  <button class="btn btn-info">	Simpan</button>
	</form>

	</div>
	</div>
</body>
</html>
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->

<!-- AdminLTE for demo purposes -->

<!-- CK Editor -->
<script src="bower_components/ckeditor/ckeditor.js"></script>
<script type="text/javascript">
	 $(function(){
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace('isi');
    //bootstrap WYSIHTML5 - text editor
   // $('.textarea').wysihtml5()
  });
</script>