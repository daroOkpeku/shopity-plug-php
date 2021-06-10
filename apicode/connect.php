<?php
 $conn = mysqli_connect('localhost', 'root', '', 'lawcrest');
     if (mysqli_errno($conn)) {
         echo "failed the connect the DB".mysqli_errno($conn);
         mysqli_close($conn);
     }


?>