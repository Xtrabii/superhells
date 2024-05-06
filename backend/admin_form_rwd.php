<?php 
include('condb.php');

// ตรวจสอบว่ามีการส่งค่า ID มาหรือไม่
if(isset($_GET['ID'])) {
    $ID = $_GET['ID'];

    // ดำเนินการต่อเมื่อมีการส่งค่า ID มา
    $sql = "SELECT * FROM tbl_admin WHERE a_id=$ID";
    $result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error($con));
    $row = mysqli_fetch_array($result);
    extract($row);
} else {
    // กรณีที่ไม่มีการส่งค่า ID มา
    echo "ไม่พบข้อมูล ID";
}
?>


<h1> Form Reset Password </h1>
<form action="admin_form_rwd_db.php" method="post" class="form-horizontal">
  <div class="form-group">
    <div class="col-sm-10 control-label">
      Username :
    </div>
    <div class="col-sm-10">
      <input type="text" name="a_user" required class="form-control" autocomplete="off" value="<?php echo $row['a_user'];?>" disabled>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-10 control-label">
     New Password :
    </div>
    <div class="col-sm-10">
      <input type="password" name="a_pass1" required class="form-control">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-10 control-label">
     Confirm Password :
    </div>
    <div class="col-sm-10">
      <input type="password" name="a_pass2" required class="form-control">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-10">
    </div>
    <div class="col-sm-10" align='right'>
      <input type="hidden" name="a_id" value="<?php echo $row['a_id'];?>">
      <button type="submit" class="btn btn-success">บันทึก</button>
    </div>
  </div>
</form>