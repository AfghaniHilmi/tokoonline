<?php 
include '../koneksi/koneksi.php';
$id=$_GET['id'];
$query=$mysqli->query("SELECT * FROM `tb_pengiriman` where id_user='$id'");
$tampil=mysqli_fetch_array($query);
$prov=$tampil['provinsi'];
$curl = curl_init();
curl_setopt_array($curl, array(
  CURLOPT_URL => "http://api.rajaongkir.com/starter/city?province=$prov",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_HTTPHEADER => array(
    "key: d973177bd9c8a5535370b09207440775"
  ),
));
 
$response = curl_exec($curl);
$err = curl_error($curl);
 
curl_close($curl);
 
if ($err) {
  echo "cURL Error #:" . $err;
} else {
  //echo $response;
}
 
$data = json_decode($response, true);
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<div class="container">
	<div class="col-md-12">
		<h3>Data Pengiriman</h3>
		<table class="table table-bordered">
			<thead><tr>
				<th>Nama Penerima</th>
				<th>No Hp</th>
				<th>Alamat</th>
				<th>Jenis Kurir</th>
				<th>Ongkir</th>
				<th>Action</th>

			</tr></thead>
			<tbody>
				<tr>
					<td><?=$tampil['nama_penerima']?></td>
					<td><?=$tampil['no_hp']?></td>
					<td>Desa <?php echo $tampil['desa'] ?> Kecamatan <?php echo $tampil['kec'] ?>  <?php echo $data['rajaongkir']['results'][0]['city_name'] ?></td>
					<td><?=$tampil['jenis_kurir']?></td>
					<td><?=$tampil['ongkir']?></td>
					<td><a href="?menu=konfirmasi_pengiriman&id=<?=$tampil['id_user']?>" class="btn btn-info">Konfirmasi Pengiriman</a></td>
				</tr>
			</tbody>
		</table>
	</div>
</div>
</body>
</html>