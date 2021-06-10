<?php
include("./apicode/connect.php");

$id = $_REQUEST['id'];
$value = $_REQUEST['value'];
$vehicle = $_REQUEST['vehicle'];
$order_id = $_REQUEST['order_id'];
$sql = "UPDATE ordershopify set purchasedQuantity='$value',  vehicle='$vehicle' WHERE id='$id' ";
mysqli_query($conn, $sql);
$api_key = '2fc22670e98abe4f39bc94fbac789463';
$token = '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';

  $link = "https://$api_key:$token@blinginglight.myshopify.com/admin/api/2021-04/locations.json";
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $link);
curl_setopt($ch, CURLOPT_HTTPHEADER, array("Content-Type: application/json"));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$feed = curl_exec($ch);

 
 curl_close($ch); 
  $food  = json_decode($feed, true);
  foreach($food as $one)
  echo json_encode($one);
     foreach($one as $owner)
   
  $name =   $owner['name'];
  $address1 = $owner['address1'];
 $address2 = $owner['address2'];
 $OwnerCity = $owner['city'];
  $state  = $owner['province'];
   $country = $owner['country'];
   $phone = substr($owner['phone'],  4);
      

 $sql_u = " SELECT * FROM ordershopify WHERE order_id='$order_id' ";

$query =  mysqli_query($conn, $sql_u);

$fetch = mysqli_fetch_all($query);

// echo json_encode($fetch);
foreach($fetch as $seen => $value)
    $item = $value[2].",";
    $purchasedQuantity = $value[3].",";
    $consumerName = $value[4].",";
    $houseAddress = $value[5].",";
    $city = $value[6].",";
     $vehicle = $value[7].",";

  $sql = "SELECT * FROM consumer WHERE C_name='$consumerName'";
     $sound = mysqli_query($conn, $sql);
     $shake = mysqli_fetch_assoc($sound);
      $Consumer_phone =  $shake['C_phone'];


   $ch = curl_init();
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
    "FixedDeliveryCharge" => 10,
	"Vehicle" => "$vehicle",

	"IsProductOrder" => 1,
    "BankCode" => "",
    "AccountNumber"=> "",

    "IsProductInsurance" => 0,
    "InsuranceAmount" => 0,
    
    "PickUpContactName" => "$name",
    "PickUpContactNumber" => "$phone",
    "PickUpGooglePlaceAddress" =>"$address1.' '.$address2.' '.$OwnerCity.' '.$state.' '.$country",
    "PickUpLandmark" => "$OwnerCity",
	
    "PickUpRequestedTime" => "06 AM to 09 PM",
	"PickUpRequestedDate" => "30/09/2020",
    "DeliveryRequestedTime" => "08 AM to 09 PM",

    "Packages" => [
          array(
            "DeliveryContactName" => "$consumerName",
            "DeliveryContactNumber" => "$Consumer_phone",
            "DeliveryGooglePlaceAddress" => "$houseAddress",
            "DeliveryLandmark" => "$city",
            "PackageDescription" => "$item",
            "ProductAmount" =>$purchasedQuantity,
          )
    ],

    "CustomerAuth"=>"QFTtU4X3jOPizWPlnTHpg177ipy0Vw6k"
)));
curl_setopt($ch, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_2TLS);
 curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
 $response = curl_exec($ch);

 $err = curl_error($ch);

 curl_close($ch);

 if ($err) {
  echo "cURL Error #:" . $err;
 } else {
    $joker = json_decode($response, true);
    echo json_encode($joker);
  //  $conn = mysqli_connect('localhost', 'root', '', 'lawcrest');
  //  if(mysqli_errno($conn)){
	//    echo "failed the connect the DB".mysqli_errno($conn);
	//   mysqli_close($conn);
  //   }
     
//   //    $sql = "INSERT INTO delly(token, update_date, ResponseMessage) values( '".$steve['authentication_token']."', NOW(), '".$steve['authentication_token']."')";
//   //    $query = mysqli_query($conn, $sql);
  }



?>