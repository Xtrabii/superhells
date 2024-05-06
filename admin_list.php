<?php
include('h.php');
//เชื่อมต่อ database:
include('condb.php');  //ไฟล์เชื่อมต่อกับ database ที่สร้างไว้
//query ข้อมูลจากตาราง tb_admin:
$query = "SELECT * FROM tbl_admin ORDER BY a_id ASC";
//เก็บข้อมูลที่ query ออกมาไว้ในตัวแปร result .
$result = mysqli_query($con, $query);
//แสดงข้อมูลที่ query ออกมา โดยใช้ตารางในการจัดข้อมูล:
echo ' <h1>จัดการผู้ดูแลระบบ</h1>
<table class="table table-hover">';
//หัวข้อตาราง 
echo "
    <tr>
    <td>id</td>
    <td>a_user</td>
    <td>a_pass</td>
    <td>a_name</td>
    <td>edit</td>
    <td>delete</td>
</tr>";

while ($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $row["a_id"] .  "</td> ";
    echo "<td>" . $row["a_user"] .  "</td> ";
    echo "<td>" . $row["a_pass"] .  "</td> ";
    echo "<td>" . $row["a_name"] .  "</td> ";
    //แก้ไขข้อมูล
    echo "<td><a href='admin.php?act=edit&ID=$row[0]' class='btn btn-warning btn-xs'>แก้ไข</a></td> ";
    //ลบข้อมูล
    echo "<td><a href='admin_del_db.php?ID=$row[0]' onclick=\"return confirm('Do you want to delete this record? !!!')\" class='btn btn-danger btn-xs'>ลบ</a></td> ";
    echo "</tr>";
}
echo "</table>";
//close connection
mysqli_close($con);
?>
