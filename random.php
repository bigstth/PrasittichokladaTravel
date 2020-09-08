<?php
require'connect.php';
$rand = $_POST['rand'];
$p =$rand;
$q = "SELECT * FROM travel WHERE price <= $p ORDER BY rand() limit 1";
$res=mysqli_query($conn, $q);

?>
<html>
<head>

<link href="css/bootstrap.min.css" rel="stylesheet">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>สุ่มสถานที่ท่องเที่ยว</title>
<script language="javascript"> 
        function checkNull(){  
   var forms=document.form1;  
   if(forms.rand.value == "") {
      alert('กรุณาใส่งบประมาณ ก่อนสุ่มสถานที่ท่องเที่ยวครับ'); 
      forms.rand.focus();  
      return false;  }
      else if (forms.rand.value < 1 ){
        alert('กรุณาใส่ราคาจำนวนเต็มบวกเท่านั้น(ห้ามใส่ราคาติดลบ)'); 
      forms.rand.focus();  
      return false;
      }
      else if (forms.rand.value % 2 != 0){
        alert('กรุณาใส่ตัวเลขจำนวนเต็มเท่านั้น'); 
      forms.rand.focus();  
      return false;
}
 
 
 }
 </script>
</head>
<body>
    
<div class="container" style="text-align: center; width:60%">

<a href="http://project.bigdsn.com"><h1>กลับสู่หน้าหลัก</h1></a>
<form action="random.php" method="post" name="form1"onsubmit="javascript:return checkNull();" >
<label>งบประมาณ(1000,3000,5000): </label><input type="text" name="rand"/>
<input name="submit" class="btn btn-success" type="submit" id="submit" value="สุ่ม!!" >
</form>
<br>
<table class="table table-bordered ">
<tr>
<th>#</th>
<th>รูป</th>
<th>ชื่อ</th>
<th>จังหวัด</th>
<th>รายละเอียด</th>
<th>ราคา</th>
<th>ลิ้งค์ข้อมูลเพิ่มเติม</th>
</tr>
<?php
while($row = mysqli_fetch_array($res, MYSQLI_ASSOC)){
?>
<tr>
<td><?php echo $row['id']; ?></td>
<td><img src="<?php echo $row['pic']; ?>" height="300px" width="300px"></td>
<td><?php echo $row['name']; ?></td>
<td><?php echo $row['province']; ?></td>
<td><?php echo $row['description']; ?></td>
<td><?php echo $row['price']; ?></td>
<td><a class="btn btn-success" href="<?php echo $row['link']; ?>">Read More</a></td> 
</tr>
<?php
}
?>
</div>
</table>
<script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>