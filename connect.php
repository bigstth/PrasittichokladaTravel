

<?php
    $Servname ="localhost";
    $Username = "bigza";
    $Password = "123456";
    $Database ="wheretotravel";
	
	
    $conn = new mysqli($Servname,$Username,$Password,$Database);
    if ($mysqli -> connect_errno) {
        echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
        exit();
      }
mysqli_query($conn, "SET NAMES UTF8");
   