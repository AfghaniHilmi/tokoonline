<?php
session_start();



?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
	<style type="text/css">
		li a{
			color:white;
		}
	</style>
   <meta name="description" content="Depo manggata mojopahit malang,depo mojopahit">
  <meta name="keywords" content="toko ini dibuat untuk tugas besar eduwwork ,089667922536,">
  <meta name="author" content="Toko online eduwork,089667922536,089667922536">
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#"></a>
 

 
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#"><p><b>SELAMAT DATANG DI TOKO ONINE KAMI</b></p></a>

      </li>
      <li class="nav-item active">
        <a class="nav-link" href="https://api.whatsapp.com/send?phone=6289667922536&text=Halo%20Mas%20Saya%20Barusan%20Baca%20Websitenya"><i class="fa fab fa-whatsapp fa-1x"></i> 0896679225364</a>

       
      </li>
       <li class="nav-item active">
        <a class="nav-link" href="https://api.whatsapp.com/send?phone=6289667922536&text=Halo%20Mas%20Saya%20Barusan%20Baca%20Websitenya"><i class="fa fab fa-whatsapp fa-1x"></i> 089667922536</a>
        
       
      </li>
    </ul>
   
  
</nav>
<nav class="navbar navbar-expand-lg navbar-light sticky-top " style="background-color:red;">
  <a class="navbar-brand" href="#"><p style="color:yellow;">Toko gani</p></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto" >
      <li class="nav-item active">
        <a class="nav-link" style="color:white;" href="index.php"><b>Home</b> <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" style="color:white;" href="artikel.php"><b>Tips Seger Waras</b></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" style="color:white;" href="cabang.php"><b>Agen Kami</b></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" style="color:white;" href="#"><b>Kategori Produk</b></a>
      </li>
      
    </ul>
   <ul class="navbar-nav   my-2 my-lg-0"><?php if (isset($_SESSION['username'])) {
  echo "<li class='nav-item dropdown'><a class='nav-link dropdown-toggle' role='button' data-toggle='dropdown' aria-haspopup='true' style='color:white;' href='#'>".$_SESSION['username']."</a>
 <div class='dropdown-menu my-2' aria-labelledby='navbarDropdown'>
          <a class='dropdown-item' href='''>Profil</a>
          <a class='dropdown-item' href='statusorder.php''>Status Order</a>
          <div class='dropdown-divider'></div>
          <a class='dropdown-item' href='logout.php''>Log Out</a>
        </div>
  </li>";
}else{ ?>
    <li class="nav-item"><a href="login.php" style="color:white;" class="nav-link"></i>Login</a></li> <?php }?><li class="nav-item"><a href="keranjang.php" style="color:white;" class="nav-link"><i class="fa  fa-fw fa-cart-plus text-white"></i>Keranjang Belanja</a></li>
</ul>
    
  </div>
</nav>
</body>
</html>
<script type="text/javascript" src="assets/js/jquery.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
