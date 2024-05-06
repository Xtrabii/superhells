<!DOCTYPE html>
<html>
<head>
<?php include('h.php');
error_reporting(0);
?>
<head>
  <body>
    <div class="container">
  <?php include('navbar.php');?>
  <p></p>
    <div class="row">

      <div class="col-md-3">
        <?php include('menu_left.php');?>
      </div>

      <div class=col-md-9>
        <a href="type.php?act=add" class="btn btn-info text-light mb-2">เพิ่มประเภทสินค้า</a>
        <p></p>

        <?php
          $act = $_GET['act'];
          if($act == 'add'){
          include('type_form_add.php');
          }elseif ($act == 'edit') {
          include('type_form_edit.php');
          }
          else {
          include('type_list.php');
          }
          ?>
      </div>

    </div>
  </div>
  </body>
</html>