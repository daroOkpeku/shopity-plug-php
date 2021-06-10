<?php
include("connect.php");

$search = "SELECT * FROM ordershopify";
$query = mysqli_query($conn, $search);
$data = array();
while($fetch = mysqli_fetch_array($query)){
$data[] = $fetch;
}

echo json_encode($data);

?>