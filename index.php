<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
  <h1>hello</h1>
<!-- Lorem ipsum dolor sit amet consectetur adipisicing elit. 
Vero, facere illum corporis in fugiat illo doloremque earum quisquam temporibus 
assumenda neque aperiam obcaecati quibusdam dolor iste eos a molestias sint.
Lorem ipsum dolor sit amet consectetur adipisicing elit. 
Vero, facere illum corporis in fugiat illo doloremque earum quisquam temporibus 
assumenda neque aperiam obcaecati quibusdam dolor iste eos a molestias sint. -->
    <?php 

//include("first.php");
 include("product.php");

//   $curl = curl_init();

// curl_setopt_array($curl, [
//   CURLOPT_URL => "http://206.189.199.89/api/v2.0/Authentication",
//   CURLOPT_RETURNTRANSFER => true,
//   CURLOPT_ENCODING => "",
//   CURLOPT_MAXREDIRS => 10,
//   CURLOPT_TIMEOUT => 30,
//   CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
//   CURLOPT_CUSTOMREQUEST => "POST",
//   CURLOPT_POSTFIELDS => "{"APIID":"192737323723",    "APISecret": "LILU"}",
//   CURLOPT_COOKIE => "PHPSESSID=81svpvjv2fsd42escm2e422fjp",
//   CURLOPT_HTTPHEADER => [
//     "Authorization: Bearer ybwhtbhy60rwjfk9ejqrghttjd8qa3ope0f0nkx6",
//     "Content-Type: application/json"
//   ],
// ]);



// /**do not torch this */


// /** data   */

 $ch = curl_init();
$url = "http://206.189.199.89/api/v2.0/GetOrder";
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
    "CustomerAuth"=>"l3lCF2VusEodN8Z5BV0eg9YDtMqxDyER",
    "OrderID"=> 1683
)));
curl_setopt($ch, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_2TLS);
 curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
 $response = curl_exec($ch);
 echo json_encode($response);
 $err = curl_error($ch);

 curl_close($ch);





/**dellyman api */
 


// $ch = curl_init();
// /**do not torch this */


// /** data   */


// $url = "http://206.189.199.89/api/v2.0/BookOrder";
// curl_setopt($ch, CURLOPT_URL,  $url);
// curl_setopt($ch, CURLOPT_ENCODING, " ");
// curl_setopt($ch,  CURLOPT_TIMEOUT,  0);
// curl_setopt($ch, CURLOPT_MAXREDIRS, 10);
// // curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
// curl_setopt($ch, CURLOPT_POST, 1);
// curl_setopt($ch, CURLOPT_HTTPHEADER, array(
//     "Content-Type: application/json"
// ));
// curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
// curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode(array(
//   "CustomerID" => 850,
// 	"PaymentMode" => "pickup",
//   //"PaymentMethod" =>"pickup",
//     "FixedDeliveryCharge" => 10,
// 	"Vehicle" => "Bike",

// 	"IsProductOrder" => 0,
//     "BankCode" => "",
//     "AccountNumber"=> "",

//     "IsProductInsurance" => 0,
//     "InsuranceAmount" => 0,
    
//     "PickUpContactName" => "Stephen Daro",
//     "PickUpContactNumber" => "08165648269",
//     "PickUpGooglePlaceAddress" =>"3 jinadu street ikorodu lagos",
//     "PickUpLandmark" => "",
	
//     "PickUpRequestedTime" => "06 AM to 09 PM",
// 	"PickUpRequestedDate" => "30/09/2020",
//     "DeliveryRequestedTime" => "08 AM to 09 PM",

//     "Packages" => [
//           array(
//             "DeliveryContactName" => "balaji",
//             "DeliveryContactNumber" => "09840358848",
//             "DeliveryGooglePlaceAddress" => "100 Allen Ave, Allen, Ikeja, Nigeria",
//             "DeliveryLandmark" => "gsg",
//             "PackageDescription" => "gur",
//             "ProductAmount" => 100
//           )
//     ],

//     "CustomerAuth"=>"l3lCF2VusEodN8Z5BV0eg9YDtMqxDyER"
// )));
// curl_setopt($ch, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_2TLS);
//  curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
//  $response = curl_exec($ch);

//  $err = curl_error($ch);

//  curl_close($ch);

//  if ($err) {
//   echo "cURL Error #:" . $err;
//  } else {
//     $joker = json_decode($response, JSON_PRETTY_PRINT);
//     echo print_r($joker);
//   //  $conn = mysqli_connect('localhost', 'root', '', 'lawcrest');
//   //  if(mysqli_errno($conn)){
// 	//    echo "failed the connect the DB".mysqli_errno($conn);
// 	//   mysqli_close($conn);
//   //   }
     
// //   //    $sql = "INSERT INTO delly(token, update_date, ResponseMessage) values( '".$steve['authentication_token']."', NOW(), '".$steve['authentication_token']."')";
// //   //    $query = mysqli_query($conn, $sql);
//   }
/**end delly man */
?>

  </body>
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="./js/jquery-3.5.1.js"></script>
    <script src="./js/jquery-3.5.1.min.js"></script>
  <script>
  // fetch("product.php").then(res=>json())
  // .then(some=>some.map((item)=>console.log(item.id)))
  // .catch(err=>console.log(err))


  </script>
</html>