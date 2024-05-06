<?php
$dbhost = 'localhost';
$dbname = 'superhells';
$username = 'root';
$password = '';

date_default_timezone_set("Asia/Bangkok");

// สร้างการเชื่อมต่อฐานข้อมูลโดยใช้ mysqli
$con = mysqli_connect($dbhost, $username, $password, $dbname);

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
