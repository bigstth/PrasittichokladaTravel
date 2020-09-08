
<?php header('Content-Type: text/html; charset=UTF-8'); ?>

<?php
    require 'connect.php';
    $q = "SELECT * FROM travel ORDER BY RAND();";
    $res = mysqli_query($conn,$q);
    if ($res) {
        while($row = mysqli_fetch_array($res,MYSQLI_ASSOC)){
            echo "รหัส: " .$row['id']."<br>";
            echo "ชื่อ: " .$row['name']."<br>";
            echo "รายละเอียด: " .$row['description']."<br>";
            echo "ราคา: " .$row['price']."<br>";
            echo "รูป " .$row['image']."<br>";
            echo "<hr>";
        }
        mysqli_free_res($res);
    }
    else{
        echo"เน่า";
    }
    mysqli_close($conn);