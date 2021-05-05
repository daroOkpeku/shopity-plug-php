<?php
include("inc/functions.php");
// $products = shopify_call($token, $shop_url, "/admin/api/2021-04/products.json", array(), "GET");
// $products = json_decode($products['response'], TRUE);
// echo print_r($products);
 $api_key = '2fc22670e98abe4f39bc94fbac789463';
$token = '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';
                     //api_key                          //token
// $url = "https://$api_key:$token@stephenokpeku.myshopify.com/admin/products.json";
// $curl = curl_init( $url );
// curl_setopt($curl, CURLOPT_HTTPHEADER, array("Content-Type: application/json"));
// curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
// $response = curl_exec($curl);
//  $jack = json_decode($response, JSON_PRETTY_PRINT);
// //echo json_encode($response, TRUE);
// // echo print_r($jack);
// curl_close($curl); 
$link = "https://$api_key:$token@blinginglight.myshopify.com/admin/api/2021-04/checkouts.json";
$init = curl_init( $link );
curl_setopt($init, CURLOPT_HTTPHEADER, array("Content-Type: application/json"));
curl_setopt($init, CURLOPT_RETURNTRANSFER, true);
$feed = curl_exec($init);
 $back = json_decode($feed, true);
//  echo $back;price original_shop_price
  // echo print_r($back); referring_site, shipping_lines

   foreach($back as $give){
      foreach($give as $shipping_address){
   $del_address =  $shipping_address['shipping_address']['address1'];
    $del_phone =  $shipping_address['shipping_address']['phone'];
     $del_name = $shipping_address['shipping_address']['name'];
   $delivery = $shipping_address['shipping_lines'];
  // echo json_encode($give);  
   foreach($delivery as $reach){
    
    $d_price = $reach['original_shop_price'];
   }
      }
   }
curl_close($init); 

$url = "https://$api_key:$token@blinginglight.myshopify.com/admin/api/2021-04/locations.json";
$curl = curl_init( $url );
curl_setopt($curl, CURLOPT_HTTPHEADER, array("Content-Type: application/json"));
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($curl);
 $jack = json_decode($response, TRUE);
// echo json_encode($response, TRUE);
curl_close($curl); 

foreach($jack as $props){
   foreach($props as $key => $value){
     
    $name = $value['name'];
     $number =  $value['phone'];
    $address =  $value['address1'];
     $city =   $value['city'];
   }
  
}

 echo $address." ". $number. " ". $name."<br/>";
// echo $del_address.  " " .$del_phone. " " .$del_name. " ". $d_price;


$ch = curl_init();
/**do not torch this */


/** data   */


$url = "http://206.189.199.89/api/v2.0/BookOrder";
curl_setopt($ch, CURLOPT_URL,  $url);
curl_setopt($ch, CURLOPT_ENCODING, " ");
curl_setopt($ch,  CURLOPT_TIMEOUT,  0);
curl_setopt($ch, CURLOPT_MAXREDIRS, 10);
// curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    "Content-Type: application/json"
));
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode(array(
  "CustomerID" => 850,
	"PaymentMode" => "pickup",
  //"PaymentMethod" =>"pickup",
    "FixedDeliveryCharge" => 10,
	"Vehicle" => "Bike",

	"IsProductOrder" => 0,
    "BankCode" => "",
    "AccountNumber"=> "",

    "IsProductInsurance" => 0,
    "InsuranceAmount" => 0,
    
    "PickUpContactName" => "Stephen Daro",
    "PickUpContactNumber" => "08165648269",
    "PickUpGooglePlaceAddress" =>"3 jinadu street ikorodu lagos",
    "PickUpLandmark" => "",
	
    "PickUpRequestedTime" => "06 AM to 09 PM",
	"PickUpRequestedDate" => "30/09/2020",
    "DeliveryRequestedTime" => "08 AM to 09 PM",

    "Packages" => [
          array(
            "DeliveryContactName" => "$del_name",
            "DeliveryContactNumber" => "09023461712",
            "DeliveryGooglePlaceAddress" => "$del_address",
            "DeliveryLandmark" => "$city ",
            "PackageDescription" => "gur",
            "ProductAmount" => $d_price
          )
    ],

    "CustomerAuth"=>"l3lCF2VusEodN8Z5BV0eg9YDtMqxDyER"
)));
curl_setopt($ch, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_2TLS);
 curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
 $response = curl_exec($ch);

 $err = curl_error($ch);

 curl_close($ch);

 if ($err) {
  echo "cURL Error #:" . $err;
 } else {
    $joker = json_decode($response, JSON_PRETTY_PRINT);
    echo print_r($joker);
  //  $conn = mysqli_connect('localhost', 'root', '', 'lawcrest');
  //  if(mysqli_errno($conn)){
	//    echo "failed the connect the DB".mysqli_errno($conn);
	//   mysqli_close($conn);
  //   }
     
//   //    $sql = "INSERT INTO delly(token, update_date, ResponseMessage) values( '".$steve['authentication_token']."', NOW(), '".$steve['authentication_token']."')";
//   //    $query = mysqli_query($conn, $sql);
  }

?>





<!-- the first foreach is to get the whole array from $jack and send to $rack -->
<!-- the second foreach is to display each item in the array -->
<!-- <?php
foreach($jack as $rack ){
 foreach($rack as $key => $value){
   ?>
<div class="card-columns">
  <div class="card">
    <img class="card-img-top" src=".../100px160/" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Card title that wraps to a new line</h5>
      <p class="card-text"><?php echo $value['title'] ?></p>
    </div>
  </div>
</div>


   <?php
 }
}
?> -->