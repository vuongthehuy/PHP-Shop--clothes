<div class="animated fadeIn">
  <div class="row">
    <div class="col-lg-6">
      <div class="card">
        <div class="card-header">
          <strong class="card-title">Danh sách màu</strong>
        </div>
        <div class="card-body">
          <?php 
          if(isset($_POST["addNew"]))
          {
            $col_name=$_POST["col_name"];
            $col_code=$_POST["col_code"];
            $status=$_POST["status"];
            $sqlInsert="INSERT INTO tbl_color (col_name,col_code,`status`) VALUES('$col_name','$col_code','$status')";
            mysqli_query($conn,$sqlInsert) or die ("khong them duoc");
            header("location:index.php?view=listcolor");
           
          }
          ?>
       
          <div id="pay-invoice">
            <div class="card-body">
              <form action="" method="post" enctype="multipart/form-data">
                <div class="form-group">
                  <label for="cc-payment" class="control-label mb-1">Tên màu</label>
                  <input id="col_name" name="col_name" type="text" class="form-control" aria-required="true" aria-invalid="false" value="">
                </div>
                <div class="form-group has-success">
                  <label for="cc-name" class="control-label mb-1">Mã màu</label>
                 <input id="col_code" name="col_code" type="text" class="form-control" aria-required="true" aria-invalid="false" value="">
                 
                </div>
              
                <div class="form-group">
                <label for="cc-number" class="control-label mb-1">Trạng thái</label>
                  <div class="form-check">          
                    <div class="checkbox">
                      <label for="checkbox2" class="form-check-label ">
                        <input id="status" name="status" value="1" class="form-check-input" type="checkbox">Ẩn/hiện
                      </label>
                    </div>
                </div>
                <div>
                  <input type="submit" class="btn btn-lg btn-info btn-block" value="Thêm mới" name="addNew">
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

