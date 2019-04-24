<div class="animated fadeIn">
  <div class="row">
    <div class="col-lg-6">
      <div class="card">
        <div class="card-header">
          <strong class="card-title">Thông tin tỉnh thành</strong>
        </div>
        <div class="card-body">
        <?php 
        if(isset($_POST["addNew"]))
        {
          $pro_name=$_POST["pro_name"];
          $status=$_POST["status"];
          $sqlInsert="INSERT INTO tbl_province(pro_name,`status`)VALUES('$pro_name','$status')";
          mysqli_query($conn,$sqlInsert)or die('khong them duoc');
          header("location:index.php?view=listprovince");
        }
         ?>
          
          <div id="pay-invoice">
            <div class="card-body">
              <form action="" method="post" enctype="multipart/form-data">
                <div class="form-group">
                  <label for="cc-payment" class="control-label mb-1">Tên tỉnh thành</label>
                  <input id="pro_name" name="pro_name" type="text" class="form-control" aria-required="true" aria-invalid="false" value="">
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

