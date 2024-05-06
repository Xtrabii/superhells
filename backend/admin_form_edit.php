<?php
//เชื่อมต่อ database:
include('condb.php');  //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้านี้
if (isset($_REQUEST["ID"])) {
    $a_id = $_REQUEST["ID"];
} else {
    // กรณีที่ไม่มีค่า a_id ที่ถูกส่งมา
}
//query ข้อมูลจากตาราง:
$sql = "SELECT * FROM tbl_admin WHERE a_id=?";
$stmt = mysqli_prepare($con, $sql);
mysqli_stmt_bind_param($stmt, "i", $a_id);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);
$row = mysqli_fetch_array($result);
extract($row);
?>

<?php include('h.php');?>

<div class="container">  
    <form  name="admin" action="admin_form_edit_db.php" method="POST" id="admin" class="form-horizontal">
        <input class="form-control" type="hidden" name="a_id" value="<?php echo $a_id; ?>">
          <div class="form-group">
            <h1>Add Admin Form</h1>
            <div class="col-sm-10" align="left">
            <input name="a_user" type="text" required class="form-control" id="a_user" value="<?=$a_user; ?>" placeholder="Username" pattern="^[a-zA-Z0-9]+$" title="ภาษาอังกฤษหรือตัวเลขเท่านั้น" minlength="2" />
            </div>
          </div>
          
          <div class="form-group">
            <div class="col-sm-10" align="left">
              <input  name="a_pass" type="password" required class="form-control" id="a_pass" value="<?=$a_pass; ?>" placeholder="password" pattern="^[a-zA-Z0-9]+$" minlength="2" />
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-10" align="left">
              <input  name="a_name" type="text" required class="form-control" id="a_name" value="<?=$a_name; ?>" placeholder="ชื่อ-สกุล" />
            </div>
          </div>
          
          <div class="form-group">
            <div class="col-sm-10" align="right">
              <button type="submit" class="btn btn-success" id="btn"> <span class="glyphicon glyphicon-saved"></span> save  </button>      
            </div> 
          </div>
        </form>
</div>