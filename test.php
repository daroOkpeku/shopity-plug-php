<?php
include("./apicode/connect.php");
$id = $_REQUEST['id'];

$value = $_REQUEST['value'];

$sql = "UPDATE ordershopify set purchasedQuantity='$value' WHERE id='$id'";
 mysqli_query($conn, $sql);
?>