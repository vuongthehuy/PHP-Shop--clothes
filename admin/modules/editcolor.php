<div class="animated fadeIn">
  <div class="row">
    <div class="col-lg-6">
      <div class="card">
        <div class="card-header">
          <strong class="card-title">Bảng màu</strong>
        </div>
        <div class="card-body">
          <?php  
            if(isset($_GET["id"])){
              $sqlEdit = "SELECT * FROM tbl_color WHERE col_id = ".$_GET["id"];
              $result = mysqli_query($conn,$sqlEdit) or die();
              $rowEdit = mysqli_fetch_row($result);
            }
            if(isset($_POST["addNew"])){
              $col_name = addslashes($_POST["col_name"]);
              $col_code = $_POST["col_code"];
              $status = $_POST["status"];

              $sqlUpdate = "UPDATE tbl_color SET col_name='$col_name',col_code=' $col_code',`status` = '$status' WHERE cat_id=".$_GET["id"];
              mysqli_query($conn,$sqlUpdate) or die("không update dc ".$sqlUpdate);
              header("location:index.php?view=listcolor");
            }
          ?>
          <div id="pay-invoice">
            <div class="card-body">
              <form action="" method="post" novalidate="novalidate">
                <div class="form-group">
                  <label for="cc-payment" class="control-label mb-1">Tên màu</label>
                  <input id="col_name" name="col_name" type="text" class="form-control" aria-required="true" aria-invalid="false" value="<?php echo $rowEdit["1"]; ?>">
                </div>
                <div class="form-group">
                  <label for="cc-payment" class="control-label mb-1">Mã code</label>
                  <input id="col_code" name="col_code" type="text" class="form-control" aria-required="true" aria-invalid="false" value="<?php echo $rowEdit["0"]; ?>">
                </div>
               
                <div class="form-group">
                <label for="cc-number" class="control-label mb-1">Trạng thái</label>
                  <div class="form-check">          
                    <div class="checkbox">
                      <label for="checkbox2" class="form-check-label ">
                        <input id="status" name="status" value="1" <?php echo ($rowEdit[0])?"checked":""; ?> class="form-check-input" type="checkbox">Ẩn/hiện
                      </label>
                    </div>
                </div>
                <div>
                <div>
                  <input type="submit" class="btn btn-lg btn-info btn-block" value="Cập nhật" name="addNew">
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

