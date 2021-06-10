<?php
include("connect.php");
 $api_key = '2fc22670e98abe4f39bc94fbac789463';
$token = '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';
$url = "https://$api_key:$token@blinginglight.myshopify.com//admin/api/2021-04/orders.json?status=any";
$curl = curl_init( $url );
curl_setopt($curl, CURLOPT_HTTPHEADER, array("Content-Type: application/json"));
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($curl);
 $jack = json_decode($response, true);
curl_close($curl);
$data = array();
foreach ($jack as $ray) {
   
 //echo json_encode($jack);
 foreach($ray as $img){
//  echo json_encode($img['billing_address']);
$C_name = $img['billing_address']['first_name'];
 $C_last = $img['billing_address']['last_name'];
 $C_phone = $img['billing_address']['phone'];
$sql = "INSERT IGNORE INTO Consumer (C_name,  C_phone) VALUES('$C_name".' '."$C_last', '$C_phone' )";
$query = mysqli_query($conn, $sql);

 }

 
}


//list('name'=>$name, 'destination_location'=>$destination_location ) = $data;

?>