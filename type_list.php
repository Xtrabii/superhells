<?php
      include('h.php');
                //เชื่อมต่อ database:
                include('condb.php');  //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้าน้ี
                //query ข้อมูลจากตาราง tb_admin:
                $query = "SELECT * FROM tbl_type ORDER BY type_id ASC" or die("Error:" . mysqli_error($con));
                //เก็บข้อมูลที่ query ออกมาไว้ในตัวแปร result .
                $result = mysqli_query($con, $query);
                //แสดงข้อมูลที่ query ออกมา โดยใช้ตารางในการจัดข้อมูล:
                echo ' <h1>จัดการประเภทสินค้า</h1>
                <table class="table table-hover">';
                  //หัวข้อตาราง 
                    echo "
                      <tr>
                      <td>id</td>
                      <td>type</td>
                      <td>แก้ไข</td>
                      <td>ลบ</td>                 
                    </tr>";
                
                  while($row = mysqli_fetch_array($result)) {
                  echo "<tr>";
                    echo "<td>" .$row["type_id"] .  "</td> ";
                    echo "<td>" .$row["type_name"] .  "</td> ";
                    //แก้ไขข้อมูล
                    echo "<td><a href='type.php?act=edit&ID=$row[0]' class='btn btn-warning btn-xs'>แก้ไข</a></td> ";  
                    //ลบข้อมูล
                    echo "<td><a href='type_del_db.php?ID=$row[0]' onclick=\"return confirm('Do you want to delete this record? !!!')\" class='btn btn-danger btn-xs'>ลบ</a></td> ";
                  echo "</tr>";
                  }
                echo "</table>";
                //5. close connection
                mysqli_close($con);
                ?>