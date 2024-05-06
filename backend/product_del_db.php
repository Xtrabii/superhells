<?php
//เชื่อมต่อ database: 
include('condb.php');  //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้านี้
//สร้างตัวแปรสำหรับรับค่า p_id จากไฟล์แสดงข้อมูล
$p_id = $_REQUEST["ID"];

//ลบข้อมูลออกจาก database ตาม p_id ที่ส่งมา

$sql = "DELETE FROM tbl_product WHERE p_id='$p_id' ";
$result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error($con)); // ต้องระบุ $con เพิ่มเข้าไปใน mysqli_error()

//จาวาสคริปแสดงข้อความเมื่อบันทึกเสร็จและกระโดดกลับไปหน้าฟอร์ม
  
if($result){
  echo "<script type='text/javascript'>";
  echo "alert('Delete Succesfuly');";
  echo "window.location = 'product.php'; ";
  echo "</script>";
}
else{
  echo "<script type='text/javascript'>";
  echo "alert('Error back to delete again');";
  echo "</script>";
}
?>
