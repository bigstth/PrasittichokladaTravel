<?php
require 'connect.php'
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>เพิ่มสถานที่ท่องเที่ยว</title>

<link href="css/bootstrap.min.css" rel="stylesheet">
<script language="javascript"> 
        function checkNull(){  
   var forms=document.firm;  
   if(firm.name.value == "" ){
      alert('กรุณาใส่ชื่อสถานที่ท่องเที่ยว'); 
      return false;  
   }
   else if(firm.province.value == ""){
      alert('กรุณาระบุจังหวัด'); 
      return false;  
   }
   else if(firm.description.value == "" ){
      alert('กรุณาใส่รายละเอียด'); 
      return false;  
   }
   else if(firm.price.value == "" || firm.price.value < 0 || firm.price.value %2 != 0){
      alert('กรุณาใส่ราคา'); 
      return false;  
   }
   else if(firm.pic.value == "" ){
      alert('กรุณาใส่ลิ้งค์รูปภาพ'); 
      return false;  
   }
   else if(firm.link.value == "" ){
      alert('กรุณาใส่ลิ้งค์รายละเอียดเพิ่มเติม'); 
      return false;  
   }
   
 }
 </script>
</head>
<body><br><br>
<div class="container">
<h2>เพิ่มสถานที่ท่องเที่ยว</h2>
<form action="http://project.bigdsn.com/add.php" method="post" enctype="multipart/form-data" name="firm" id="form1" onsubmit="javascript:return checkNull();">
<fieldset>
<legend>ข้อมูลสถานที่</legend>
<label>ชื่อ: </label><input name="name" type="text" id="name" >
<label>จังหวัด: </label>
<select name="province"  id="province">
      <option value="" selected>--------- เลือกจังหวัด ---------</option>
      <option value="กรุงเทพมหานคร">กรุงเทพมหานคร</option>
      <option value="กระบี่">กระบี่ </option>
      <option value="กาญจนบุรี">กาญจนบุรี </option>
      <option value="กาฬสินธุ์">กาฬสินธุ์ </option>
      <option value="กำแพงเพชร">กำแพงเพชร </option>
      <option value="ขอนแก่น">ขอนแก่น</option>
      <option value="จันทบุรี">จันทบุรี</option>
      <option value="ฉะเชิงเทรา">ฉะเชิงเทรา </option>
      <option value="ชัยนาท">ชัยนาท </option>
      <option value="ชัยภูมิ">ชัยภูมิ </option>
      <option value="ชุมพร">ชุมพร </option>
      <option value="ชลบุรี">ชลบุรี </option>
      <option value="เชียงใหม่">เชียงใหม่ </option>
      <option value="เชียงราย">เชียงราย </option>
      <option value="ตรัง">ตรัง </option>
      <option value="ตราด">ตราด </option>
      <option value="ตาก">ตาก </option>
      <option value="นครนายก">นครนายก </option>
      <option value="นครปฐม">นครปฐม </option>
      <option value="นครพนม">นครพนม </option>
      <option value="นครราชสีมา">นครราชสีมา </option>
      <option value="นครศรีธรรมราช">นครศรีธรรมราช </option>
      <option value="นครสวรรค์">นครสวรรค์ </option>
      <option value="นราธิวาส">นราธิวาส </option>
      <option value="น่าน">น่าน </option>
      <option value="นนทบุรี">นนทบุรี </option>
      <option value="บึงกาฬ">บึงกาฬ</option>
      <option value="บุรีรัมย์">บุรีรัมย์</option>
      <option value="ประจวบคีรีขันธ์">ประจวบคีรีขันธ์ </option>
      <option value="ปทุมธานี">ปทุมธานี </option>
      <option value="ปราจีนบุรี">ปราจีนบุรี </option>
      <option value="ปัตตานี">ปัตตานี </option>
      <option value="พะเยา">พะเยา </option>
      <option value="พระนครศรีอยุธยา">พระนครศรีอยุธยา </option>
      <option value="พังงา">พังงา </option>
      <option value="พิจิตร">พิจิตร </option>
      <option value="พิษณุโลก">พิษณุโลก </option>
      <option value="เพชรบุรี">เพชรบุรี </option>
      <option value="เพชรบูรณ์">เพชรบูรณ์ </option>
      <option value="แพร่">แพร่ </option>
      <option value="พัทลุง">พัทลุง </option>
      <option value="ภูเก็ต">ภูเก็ต </option>
      <option value="มหาสารคาม">มหาสารคาม </option>
      <option value="มุกดาหาร">มุกดาหาร </option>
      <option value="แม่ฮ่องสอน">แม่ฮ่องสอน </option>
      <option value="ยโสธร">ยโสธร </option>
      <option value="ยะลา">ยะลา </option>
      <option value="ร้อยเอ็ด">ร้อยเอ็ด </option>
      <option value="ระนอง">ระนอง </option>
      <option value="ระยอง">ระยอง </option>
      <option value="ราชบุรี">ราชบุรี</option>
      <option value="ลพบุรี">ลพบุรี </option>
      <option value="ลำปาง">ลำปาง </option>
      <option value="ลำพูน">ลำพูน </option>
      <option value="เลย">เลย </option>
      <option value="ศรีสะเกษ">ศรีสะเกษ</option>
      <option value="สกลนคร">สกลนคร</option>
      <option value="สงขลา">สงขลา </option>
      <option value="สมุทรสาคร">สมุทรสาคร </option>
      <option value="สมุทรปราการ">สมุทรปราการ </option>
      <option value="สมุทรสงคราม">สมุทรสงคราม </option>
      <option value="สระแก้ว">สระแก้ว </option>
      <option value="สระบุรี">สระบุรี </option>
      <option value="สิงห์บุรี">สิงห์บุรี </option>
      <option value="สุโขทัย">สุโขทัย </option>
      <option value="สุพรรณบุรี">สุพรรณบุรี </option>
      <option value="สุราษฎร์ธานี">สุราษฎร์ธานี </option>
      <option value="สุรินทร์">สุรินทร์ </option>
      <option value="สตูล">สตูล </option>
      <option value="หนองคาย">หนองคาย </option>
      <option value="หนองบัวลำภู">หนองบัวลำภู </option>
      <option value="อำนาจเจริญ">อำนาจเจริญ </option>
      <option value="อุดรธานี">อุดรธานี </option>
      <option value="อุตรดิตถ์">อุตรดิตถ์ </option>
      <option value="อุทัยธานี">อุทัยธานี </option>
      <option value="อุบลราชธานี">อุบลราชธานี</option>
      <option value="อ่างทอง">อ่างทอง </option>
      <option value="อื่นๆ">อื่นๆ</option>
</select>

<label>รายละเอียด: </label><input name="description" type="text" id="description" >
<label>ราคา: </label><input name="price" type="text" id="price" size="10">
<label>ลิ้งค์รูปภาพ (.jpg/.png) </label><input name="pic" type="text" id="pic" >
<label>ลิ้งค์ข้อมูลเพิ่มเติม: </label><input name="link" type="text" id="link" >
<br>
<input name="submit" class="btn btn-success" type="submit" id="submit" value="เพิ่มเลย!"><div><br/><a href="http://project.bigdsn.com"><h1>>กลับหน้าแรก<</h1></a><br/><p>©2018 Sitthi Naja</p></div>
</div>
</body>
</html>