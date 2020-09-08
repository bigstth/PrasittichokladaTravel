<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<?php
require 'connect.php';
$name=$_POST['name'];
$province=$_POST['province'];
$pic=$_POST['pic'];
$description=$_POST['description'];
$price=$_POST['price'];
$link=$_POST['link'];
$q = "INSERT INTO travel (pic,name,province,description,price,link) VALUES ('$pic','$name','$province','$description','$price','$link')";
$res = mysqli_query($conn,$q);
if($res){
    echo"เพิ่มข้อมูลแล้วนะจ๊ะ เชื่อไหมว่าเราเพิ่มแล้ว ไม่เชื่อก็ต้องเชื่อ ";
}
else{
    echo"เพิ่มข้อมูลผิดพลาด @!#!@$!@%$";
}
mysqli_close($conn);
?>
<a href="http://project.bigdsn.com/addtravel.php"><h1>>เพิ่มสถานที่ท่องเที่ยวอีก<</h1></a>
<a href="http://project.bigdsn.com"><h1>>กลับหน้าแรก<</h1></a>