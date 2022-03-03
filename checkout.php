<?php

$curl = curl_init();
 
	curl_setopt_array($curl, array(
	  CURLOPT_URL => "http://api.rajaongkir.com/starter/province",
	  CURLOPT_RETURNTRANSFER => true,
	  CURLOPT_ENCODING => "",
	  CURLOPT_MAXREDIRS => 10,
	  CURLOPT_TIMEOUT => 30,
	  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	  CURLOPT_CUSTOMREQUEST => "GET",
	  CURLOPT_HTTPHEADER => array(
	    "key:d973177bd9c8a5535370b09207440775"
	  ),
	));
	$response = curl_exec($curl);
	$err = curl_error($curl);

?>
<!DOCTYPE html>
<html>
<head>
	<title>	</title>
	  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  
  <meta name="description" content="Depo manggata mojopahit malang,depo mojopahit">
  <meta name="keywords" content="jamu tetes,obat herbal,depo manggata,malang,jamu alami">
  <meta name="author" content="hubungi admin,089667922536,089667922536">
</head>
<body>
	<?php include 'menu.php'; ?>
	<?php include 'koneksi/koneksi.php';
 $idk=$_SESSION['id'];
$query=$mysqli->query("select * from tb_keranjang join tb_produk on tb_keranjang.id_produk=tb_produk.id_produk where id_user='$idk' "); ?>
	<div class="col-md-12 mt-2"><center><h3>Checkout Pesanan</h3></center></div>
<div class="container mt-2">
	<div class="row">

<div class="col-md-6">
<form action="savebeli.php" method="post">
	
	<label>Nama Penerima</label>
<input type="text" name="nama" class="form-control">
<label>No Hp</label>
<input type="text" name="no_hp" class="form-control">
<label>Provinsi</label>
<select name="provinsi" id="provinsi" class="form-control">
	<option>--Pilih Provinsi--></option>
	<?php $data = json_decode($response, true);
for ($i=0; $i < count($data['rajaongkir']['results']); $i++) {
	 ?>
<option value="<?php echo $data['rajaongkir']['results'][$i]['province_id'] ?>"><?php echo $data['rajaongkir']['results'][$i]['province'] ?></option>	
<?php }?>
</select>
	<label>Kabupaten</label>
	<select name="kabupaten" id="kabupaten" class="form-control" id="kabupaten">
		
	</select>
	<label>Kecamatan</label>
	<input type="text" name="kecamatan" class="form-control" required="">
	<label>Alamat (Kelurahan)</label>
<input type="text" name="alamat" class="form-control">
<label>Berat</label>
<input type="text" name="berat" id="berat" value="100" class="form-control">
	<label>Kurir</label>
	<select name="kurir" id="kurir" class="form-control">
<option value="JNE">JNE</option>
<option value="TIKI">TIKI</option>
			<option value="POS INDONESIA">POS INDONESIA</option>
	 </select>
	 <label>Ongkos Kirim</label>
	 <input type="text" name="ongkos" id="ongkir" class="form-control" required>

	</div>
	<div class="col-md-6">
		<center><h3 >Ringkasan Belanja</h3></center><hr>
		<table class="table table-konseded">
			<tr>
				<th>Produk</th>
				<th>Total</th>

			</tr>
			<?php $jumlah=0; $no=1; $j=1; $a=1; $bayar=0; while ($tampil=mysqli_fetch_array($query)) {
				# code...
			 ?>
			 <input type="hidden" name="no[]" value="<?=$no++?>">
			 <input type="hidden" name="id_produk[<?=$j++?>]" value="<?=$tampil['id_produk']?>">
			  <input type="hidden" name="qty[<?=$a++?>]" value="<?=$tampil['qty']?>">
			<tr>
				<td><?=$tampil['nama_produk']?>(<?=$tampil['qty']?>)</td>
				<td><?php $jumlah=$tampil['harga'] * $tampil['qty']; echo $jumlah; ?></td>
			</tr>

		<?php $bayar += $jumlah; }?>
		<tr><td>Total yang harus Anda Bayar </td><td><?php echo $bayar; ?></td></tr>
		<tr><td>Bank Transfer</td><td><select name="bank" class="form-control">
			<?php $bank=$mysqli->query("select * from tb_bank"); foreach ($bank as $tampil) {
				# code...
			 ?>
<option value="<?=$tampil['id_bank']?>"><?=$tampil['nama_bank']?> <?=$tampil['rekening']?></option>
<?php }?>
		</select></td></tr>
		</table>
		<button class="btn btn-info">Order Now</button>
</form>
	</div>
	</div>
	</div>
</body>
<?php include 'footer.php'; ?>
</html>

<script type="text/javascript">
	$(document).ready(function(){
$('#provinsi').change(function(){
	//alert('a');
var provinsi=$('#provinsi').val();
$.ajax({

type:"GET",
url:"cek_kab.php",
data :  'prov_id=' + provinsi,
					success:function(data){
 
					//jika data berhasil didapatkan, tampilkan ke dalam option select kabupaten
					$("#kabupaten").html(data);
				}
});


}),
$('#kurir').change(function(){
var provinsi=$('#provinsi').val();
var kabupaten=$('#kabupaten').val();
var berat=$('#berat').val();
var kurir=$('#kurir').val();
$.ajax({
            	type : 'POST',
           		url : 'cek_ongkir.php',
            	data :  {'kab_id' : kabupaten, 'kurir' : kurir, 'asal' : kabupaten, 'berat' : berat},
					success:function(data) {
 
					//jika data berhasil didapatkan, tampilkan ke dalam element div ongkir
					$("#ongkir").val(data);
				}
          	});

});



	});
</script>