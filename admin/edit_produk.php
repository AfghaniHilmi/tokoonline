<?php
include '../koneksi/koneksi.php';
$id=$_GET['id'];
$edit=$mysqli->query("SELECT * FROM `tb_produk` where id_produk='$id'");
$data=mysqli_fetch_array($edit);
$query=$mysqli->query("select * from tb_kategori");





?>
<!DOCTYPE html>
<html>
<head>
	<title></title>

</head>
<body>
<div class="container">
	<div class="col-md-8">
		<form action="updateproduk.php" method="post" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?=$data['id_produk']?>">
			<label>Nama Produk</label>
			<input type="text" name="nama" value="<?=$data['nama_produk']?>" class="form-control">
			<label>Harga</label>
			
			 <input type="text" name="harga" value="<?=$data['harga']?>" id="tanpa-rupiah" class="form-control ">
			 <label>Foto Produk</label>
			 <input type="file" name="foto" class="form-control" >
             <label>Kategori</label>
             <select name="kategori" class="form-control">
                <?php while ($tampil=mysqli_fetch_array($query)) {
                    # code...
                ?>
                 <option value="<?=$tampil['id_kategori']?>" <?php if ($tampil['id_kategori']==$data['id_kategori']) {
                     echo "selected";
                 } ?>><?=$tampil['nama_kategori']?></option>
             <?php } ?>
             </select>
			 <label>Deskripsi</label>
			   <textarea id="editor1" name="editor1"  rows="10" cols="80">
                             <?=$data['deskripsi']?>              
                    </textarea>
                <button class="btn btn-info ">Simpan</button>    
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
<!-- Bootstrap WYSIHTML5 -->
<script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script
<script src="plugins/input-mask/jquery.inputmask.js"></script>

<script>
<script type="text/javascript">
         var tanpa_rupiah = document.getElementById('s');
    tanpa_rupiah.addEventListener('keyup', function(e)
    {
        tanpa_rupiah.value = formatRupiah(this.value);
    });
    
    /* Dengan Rupiah */
    var dengan_rupiah = document.getElementById('dengan-rupiah');
    dengan_rupiah.addEventListener('keyup', function(e)
    {
        dengan_rupiah.value = formatRupiah(this.value, 'Rp. ');
    });
    
    /* Fungsi */
    function formatRupiah(angka, prefix)
    {
        var number_string = angka.replace(/[^,\d]/g, '').toString(),
            split    = number_string.split(','),
            sisa     = split[0].length % 3,
            rupiah     = split[0].substr(0, sisa),
            ribuan     = split[0].substr(sisa).match(/\d{3}/gi);
            
        if (ribuan) {
            separator = sisa ? '.' : '';
            rupiah += separator + ribuan.join('.');
        }
        
        rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
        return prefix == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '');
    }


        </script>
<script type="text/javascript">
	 $(function(){
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace('editor1');
    //bootstrap WYSIHTML5 - text editor
   // $('.textarea').wysihtml5()
  });
</script>