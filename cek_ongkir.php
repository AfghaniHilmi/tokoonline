<?php 
$asal = 255;
	$id_kabupaten = $_POST['kab_id'];
	$kurir = $_POST['kurir'];
	$berat = $_POST['berat'];
 
	$curl = curl_init();
	curl_setopt_array($curl, array(
	  CURLOPT_URL => "http://api.rajaongkir.com/starter/cost",
	  CURLOPT_RETURNTRANSFER => true,
	  CURLOPT_ENCODING => "",
	  CURLOPT_MAXREDIRS => 10,
	  CURLOPT_TIMEOUT => 30,
	  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	  CURLOPT_CUSTOMREQUEST => "POST",
	  CURLOPT_POSTFIELDS => "origin=".$asal."&destination=".$id_kabupaten."&weight=".$berat."&courier=".$kurir."",
	  CURLOPT_HTTPHEADER => array(
	    "content-type: application/x-www-form-urlencoded",
	    "key: d973177bd9c8a5535370b09207440775"
	  ),
	));
 
	$response = curl_exec($curl);
	$err = curl_error($curl);
 
	curl_close($curl);
 
	if ($err) {	  echo "cURL Error #:" . $err;
	} else {
	    $data = json_decode($response, true);
	   
	     echo number_format($data['rajaongkir']['results'][0]['costs'][0]['cost'][0]['value']);
	
	}
	
?>