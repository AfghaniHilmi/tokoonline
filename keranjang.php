
<!DOCTYPE html>
e
<?php session_start(); error_reporting(0); if (isset($_SESSION['username'])) {
        # code...
     ?>
<html>
<head>
	<title></title>
   <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
</head>
<body id="a">
    
	<?php include 'menu.php'; ?>
	<?php 

include 'koneksi/koneksi.php';
 $idk=$_SESSION['id'];
$query=$mysqli->query("select * from tb_keranjang join tb_produk on tb_keranjang.id_produk=tb_produk.id_produk where id_user='$idk' and status='0' ");

$query1=$mysqli->query("select * from tb_keranjang join tb_produk on tb_keranjang.id_produk=tb_produk.id_produk where id_user='$idk' and status='0' ");
$terkait=$mysqli->query("select * from tb_produk");
?>
<?php if ($query1->num_rows <=0) {
  echo   "<div class='col-md-12 mt-3'><center><div class='alert alert-danger' role='alert'>
  Keranjang Belanja Kosong
</div></center></div>";
}else{ ?>
<div class="container">
	<div class="row">
		<div class="col-md-12 mt-3"><center><h3>Keranjang Belanja</h3></center></div>
	<div class="col-md-6 col-xs-12">

	  <table class="table">
                        <tr class="success">
                            <th>Barang </th>
                            <th>Harga</th>
                            <th>Qty</th>
                           
                        </tr>
                        <?php $hasil=0; while ($tampil=mysqli_fetch_array($query)) {
	
 ?>
                        <tr>
                          <input type="hidden" name="" class="harga" id="<?=$tampil['harga']?>" value="<?=$tampil['harga']?>">
                            <td><?=$tampil['nama_produk']?></td>
                             <td><?=number_format($tampil['harga'],0,",",".")?></td>
                            <td><input type="text" name="qty" class="form-control qty" value="<?=$tampil['qty']?>" id="<?=$tampil['id_keranjang']?>"></td><td><a href="hapuskeranjang.php?id=<?=$tampil['id_keranjang']?>" class="btn">X</a></td>
                           
                        </tr>
                        

                       <?php $hasil +=$tampil['harga'] * $tampil['qty']; }?>
                    </table>
                    
                    </div>
                   
                   
                   
	

	 <div class="col-md-6 col-xs-12 mt-2">

                    	<h3>Ringkasan Belanja</h3><hr>
                        <h4>Total Belanja Rp. <span id="total"><?=number_format($hasil,0,",",".")?></span></h4><hr>
                        <form action="checkout.php" method="post"> 
                        <input type="hidden" name="id_user" value="<?php $_SESSION['id'];?>"> 
                    	 <button class="btn btn-info">Checkout</button> <a href="index.php" class="btn btn-info">Tambah Belanja</a></form>
                    </div>
                    <!--produkterkait-->
                    <div class="col-md-12 mt-2"><h2> Produk Terkait</h2> </div>
                            <?php while ($tampil=mysqli_fetch_array($terkait)) {
            # code...
         ?>
    <div class="col-md-4 col-xs-12 mt-3">
        <!--card-->
<div class="card " style="width: 18rem;">
 <a href="detailproduk.php?id=<?=$tampil['id_produk']?>" class="a"> <img class="card-img-top  " src="assets/foto_produk/<?=$tampil['foto']?>" alt="Card image cap"></a>
  <div class="card-body">
    <center><p class="card-text"><b><?=$tampil['nama_produk']?></b></p><p class="card-text">Rp.<?=$tampil['harga']?></p> <a href="detailproduk.php?id=<?=$tampil['id_produk']?>" class="btn btn-primary a">Detail</a> <button class="btn btn-info" id="cart">Add To Cart</button></center>
  </div>
</div>

        <!--end-->
    </div>
<?php }?>

                      
                      <!--endterkait-->
	</div>
</div>
<?php }?>

</body>

<?php include 'footer.php'; ?>
</html><?php }else{
header('location:login.php');
}?>


<script type="text/javascript">
  $(document).ready(function(){
$('.qty').keydown(function(){

var id=$(this).attr('id');

var c=$(this).val();
$.ajax({
  type:"POST",
url:"updatekeranjang.php",
data:"qty=" + c + "&id=" + id,
success:function(data){

}


});

});

  })
</script>