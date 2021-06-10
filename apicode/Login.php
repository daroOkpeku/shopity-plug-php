<?php
$output = " ";
include("connect.php");
function clean($string){
  $string = stripslashes($string);
  $string  = strip_tags($string);
  $string = trim($string);
  return $string;
}
if (isset($_POST['btn'])) {
    $email = $_REQUEST['email'];
    $pass = $_REQUEST['password'];

    $email = mysqli_real_escape_string($conn, $email);
    $pass = mysqli_real_escape_string($conn, $pass);
    $email = clean($email);
    $pass = clean($pass);
    $pass = filter_var($pass, FILTER_SANITIZE_STRING);
    $pass = preg_replace("/[^A-Za-z0-9]/", " ", $pass);
    $email = filter_var($email, FILTER_VALIDATE_EMAIL);
 
    $ch = curl_init();

    $url = "http://206.189.199.89/api/v2.0/Login";
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_ENCODING, " ");
    curl_setopt($ch, CURLOPT_TIMEOUT, 0);
    curl_setopt($ch, CURLOPT_MAXREDIRS, 10);
    // curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    "Content-Type: application/json"
));
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode(array(
  "Email" => "$email",
    "Password"=> "$pass"
)));
    curl_setopt($ch, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_2TLS);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($ch);
    
    $err = curl_error($ch);
    curl_close($ch);
    // if ($err) {
    //     echo "cURL Error #:" . $err;
    // }
     $joker = json_decode($response, TRUE);
    //  echo print_r($joker);
    if($joker['ResponseCode'] == '400' || $joker['ResponseCode'] == '101'){
      $output .=  $joker['ResponseMessage'];
    }else{
     list("ResponseMessage" => $ResponseMessage,'Email'=>$Email, 'Name'=>$Name, 'PhoneNumber'=>$PhoneNumber, 'CustomerAuth'=>$CustomerAuth) = $joker;
      $sql = "REPLACE INTO delly(Email, Name, PhoneNumber, CustomerAuth, upadta_time ) values('$Email', '$Name', '$PhoneNumber', '$CustomerAuth', NOW() )";
       $query = mysqli_query($conn, $sql);
       header("Location:index.php?jack=$Name&&zozo=$Email");
       
    }
}


// $ch = curl_init();

// $url = "http://206.189.199.89/api/v2.0/Login";
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
//   "Email" => "okpekuighodaro@gmail.com",
//     "Password"=> "spaceage"
// )));
// curl_setopt($ch, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_2TLS);
//  curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
//  $response = curl_exec($ch);

//  $err = curl_error($ch);

//  curl_close($ch);

//  if ($err) {
//   echo "cURL Error #:" . $err;
//  } else {
//      $joker = json_decode($response, JSON_PRETTY_PRINT);
//      echo print_r($joker);
//       if{
//          $sql = "INSERT INTO delly(token, update_date, ResponseMessage) values( '".$steve['authentication_token']."', NOW(), '".$steve['authentication_token']."')";
//          $query = mysqli_query($conn, $sql);
//      }
//  }
// create table orderShopify(
//  id int not null AUTO_INCREMENT,
//  order_id  tinytext not null,
//  purchasedItem tinytext not null,
// purchasedQuantity tinytext not null,
// consumerName tinytext not null,
//  houseAddress tinytext not null,
//  houseApartment tinytext not null, 
//  city tinytext not null,
//  vehicle varchar(20) not null,
//  PRIMARY KEY(id)
//  );
?>
