<?php
//เชื่อมต่อ database:
include('condb.php');  //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้านี้
if (isset($_REQUEST["ID"])) {
    $member_id = $_REQUEST["ID"];
} else {
    // กรณีที่ไม่มีค่า member_id ที่ถูกส่งมา
}
//query ข้อมูลจากตาราง:
$sql = "SELECT * FROM tbl_member WHERE member_id=?";
$stmt = mysqli_prepare($con, $sql);
mysqli_stmt_bind_param($stmt, "i", $member_id);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);
$row = mysqli_fetch_array($result);
extract($row);
?>

<?php include('h.php');?>

<form  name="register" action="member_form_edit_db.php" method="POST" class="form-horizontal">
    <input class="form-control" type="hidden" name="member_id" value="<?php echo $member_id; ?>">
       <div class="form-group">
          <div class="col-sm-10" align="left">
            <input  name="m_user" type="text" required class="form-control" id="m_user" value="<?=$m_user; ?>" placeholder="Username" pattern="^[a-zA-Z0-9]+$" title="ภาษาอังกฤษหรือตัวเลขเท่านั้น" minlength="2"  />
          </div>
      </div> 
        <div class="form-group">
          <div class="col-sm-10" align="left">
            <input  name="m_pass" type="password" required class="form-control" id="m_pass" value="<?=$m_pass; ?>" placeholder="Password" pattern="^[a-zA-Z0-9]+$" minlength="2" />
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-10" align="left">
            <input  name="m_name" type="text" required class="form-control" id="m_name" value="<?=$m_name; ?>" placeholder="ชื่อ-สกุล " />
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-10" align="left">
            <input  name="m_email" type="email" class="form-control" id="m_email" value="<?=$m_email; ?>"   placeholder=" email@mail.com"/>
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-10" align="left">
            <input  name="m_tel" type="text" class="form-control" id="m_tel" value="<?=$m_tel; ?>"  placeholder="เบอร์โทร 10 หลัก" maxlength="10" />
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-10" align="left">
            <textarea name="m_address" class="form-control" id="m_address" value="<?=$m_address; ?>" placeholder="ที่อยู่" required> <?php echo $m_address; ?> </textarea> 
          </div>
        </div>
      <div class="form-group">
          <div class="col-sm-10" align="right">
          <button type="submit" class="btn btn-success" id="btn"><span class="glyphicon glyphicon-ok"></span> แก้ไข  </button>
          </div>     
      </div>
      </form>