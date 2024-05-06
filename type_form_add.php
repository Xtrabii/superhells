<?php include('h.php');?>
<div class="container">
  <p> </p>
    <div class="row">
      <div class="col-md-12">
        <form  name="admin" action="type_form_add_db.php" method="POST" id="admin" class="form-horizontal">
          <h1>Add Type Product Form </h1>
          <div class="form-group">
            <div class="col-sm-10" align="left">
              <input  name="type_name" type="text" required class="form-control" id="type_name" placeholder="ประเถทสินค้า"  />
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-10" align="right">
            <button type="submit" class="btn btn-success" id="btn"> <span class="glyphicon glyphicon-saved"></span> save  </button>    
            </div> 
          </div>
        </form>
      </div>
    </div>
</div>