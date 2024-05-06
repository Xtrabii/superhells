<?php
include('condb.php');

// รับค่าจากฟอร์ม
$a_user = $_POST['a_user'];
$a_pass = $_POST['a_pass'];
$a_name = $_POST['a_name'];

$check = "
	SELECT  a_user
	FROM tbl_admin  
	WHERE a_user = '$a_user' 
	";
    $result1 = mysqli_query($con, $check) or die(mysqli_error($con));
    $num=mysqli_num_rows($result1);
 
    if($num > 0)
    {
    echo "<script>";
    echo "alert(' ข้อมูลซ้ำ กรุณาเพิ่มใหม่อีกครั้ง !');";
    echo "window.history.back();";
    echo "</script>";
    }else{

// สร้างคำสั่ง SQL โดยใช้ prepared statement
$sql = "INSERT INTO tbl_admin (a_user, a_pass, a_name) VALUES (?, ?, ?)";
$stmt = mysqli_prepare($con, $sql);
mysqli_stmt_bind_param($stmt, "sss", $a_user, $a_pass, $a_name);

// ทำการ execute คำสั่ง SQL
$result = mysqli_stmt_execute($stmt);
    }

// ตรวจสอบผลลัพธ์
if ($result) {
    echo "<script>";
    echo "alert('Add Successfully');";
    echo "window.location ='admin.php'; ";
    echo "</script>";
} else {
    echo "<script>";
    echo "alert('ERROR!');";
    echo "window.location ='admin.php'; ";
    echo "</script>";
}

// ปิดการเชื่อมต่อ
mysqli_stmt_close($stmt);
mysqli_close($con);
?>
