<?php include 'koneksi/koneksi.php';
$id=$_GET['id'];
$query=$mysqli->query("select * from tb_produk where id_produk='$id'");
$tampil=mysqli_fetch_array($query);

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Detail Produk</title>
   <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  
  <meta name="description" content="Depo manggata mojopahit malang,depo mojopahit">
  <meta name="keywords" content="jamu tetes,obat herbal,depo manggata,malang,jamu alami">
  <meta name="author" content="denta medika malang, Puji L Gunawan,089667922536,089667922536">
</head>
<body>
	<?php include 'menu.php'; ?>
<div class="container">
	<div class="row">
		<div class="col-md-4 col-xs-8 mt-3">
			<img class="mw-100" src="assets/foto_produk/<?=$tampil['foto']?>">
		</div>
		<div class="col-md-6 col-xs-12 mt-4">
			<h3><?=$tampil['nama_produk']?></h3>
			<h4 style="color:green;">Rp.<?=$tampil['harga']?></h4>
			<p><?=$tampil['deskripsi']?></p>
			 <p>
			 	<p><b>Qty</b></p>
      </p><div class="input-group">
          <span class="input-group-btn">
              <button type="button" class="btn btn-default btn-number" disabled="disabled" data-type="minus" data-field="quant">
                  -
              </button>
          </span>
          <input type="text" name="quant" class="form-control input-number" value="1" min="1" max="10">
          <span class="input-group-btn">
              <button type="button" class="btn btn-default btn-number" data-type="plus" data-field="quant">
                 +</span>
              </button>
          </span>
      </div>
    <p></p>
    <form action="save_keranjang.php" method="post">
    	<input type="hidden" name="id_produk" class="form-control" value="<?=$tampil['id_produk']?>">
    	  <input type="hidden" name="quant" class="form-control input-number" value="1" min="1" max="10">
    	<input type="hidden" name="harga" value="<?=$tampil['harga']?>">
			<!--end qty-->
			<button class="btn btn-success btn-block">Beli Sekarang</button>
			</form>
      <p class="mt-3"> Untuk Pemesanan Anda juga Bisa Menghubungi kami
 <a class="nav-link" style="color:red;" href="https://api.whatsapp.com/send?phone=6289667922536&text=Halo%20Mas%20Saya%20Barusan%20Baca%20Websitenya"><i class="fa fab fa-whatsapp fa-2x"></i> 089667922536</a></p>
		</div>
   
	</div>
</div>
</body>
<?php include 'footer.php'; ?>
</html>
<script type="text/javascript">
	$(document).ready(function(){
$('.btn-number').click(function(e){
    e.preventDefault();
    
    fieldName = $(this).attr('data-field');
    type      = $(this).attr('data-type');
    var input = $("input[name='"+fieldName+"']");
    var currentVal = parseInt(input.val());
    if (!isNaN(currentVal)) {
        if(type == 'minus') {
            
            if(currentVal > input.attr('min')) {
                input.val(currentVal - 1).change();
            } 
            if(parseInt(input.val()) == input.attr('min')) {
                $(this).attr('disabled', true);
            }

        } else if(type == 'plus') {

            if(currentVal < input.attr('max')) {
                input.val(currentVal + 1).change();
            }
            if(parseInt(input.val()) == input.attr('max')) {
                $(this).attr('disabled', true);
            }

        }
    } else {
        input.val(0);
    }
});
$('.input-number').focusin(function(){
   $(this).data('oldValue', $(this).val());
});
$('.input-number').change(function() {
    
    minValue =  parseInt($(this).attr('min'));
    maxValue =  parseInt($(this).attr('max'));
    valueCurrent = parseInt($(this).val());
    
    name = $(this).attr('name');
    if(valueCurrent >= minValue) {
        $(".btn-number[data-type='minus'][data-field='"+name+"']").removeAttr('disabled')
    } else {
        alert('Sorry, the minimum value was reached');
        $(this).val($(this).data('oldValue'));
    }
    if(valueCurrent <= maxValue) {
        $(".btn-number[data-type='plus'][data-field='"+name+"']").removeAttr('disabled')
    } else {
        alert('Sorry, the maximum value was reached');
        $(this).val($(this).data('oldValue'));
    }
    
    
});
$(".input-number").keydown(function (e) {
        // Allow: backspace, delete, tab, escape, enter and .
        if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 190]) !== -1 ||
             // Allow: Ctrl+A
            (e.keyCode == 65 && e.ctrlKey === true) || 
             // Allow: home, end, left, right
            (e.keyCode >= 35 && e.keyCode <= 39)) {
                 // let it happen, don't do anything
                 return;
        }
        // Ensure that it is a number and stop the keypress
        if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
            e.preventDefault();
        }
    });


	});
</script>