<div class="animated fadeIn">
  <div class="row">
    <div class="col-lg-6">
      <div class="card">
        <div class="card-header">
          <strong class="card-title">Credit Card</strong>
        </div>
        <div class="card-body">
          <?php  
            if(isset($_POST["addNew"])){
              $cat_name = $_POST["cat_name"];
              $parent_id = $_POST["parent_id"];
              $path = "../uploads/";
              $urlFile="";
              $status = $_POST["status"];
              if(isset($_FILES["img"])){
                if(isset($_FILES["img"]["name"])){
                  if($_FILES["img"]["type"]=="image/jpeg" ||$_FILES["img"]["type"]=="image/png"||$_FILES["img"]["type"]=="image/jpg"||$_FILES["img"]["type"]=="image/gif"){
                    if($_FILES["img"]["error"]==0){
                      $nameFile = $_FILES["img"]["name"];
                      $urlFile = "uploads/".$nameFile;
                      move_uploaded_file($_FILES["img"]["tmp_name"], $path.$nameFile);
                    }
                    
                  }
                  
                }
              }

              $sqlInsert = "INSERT INTO tbl_category(cat_name,parent_id,img,`status`)";
                $sqlInsert .= "VALUES('$cat_name','$parent_id','$urlFile','$status')";
                // die($sqlInsert);
              mysqli_query($conn,$sqlInsert) or die("không insert dc");
              header("location:index.php?view=listcategory");
            }
          ?>
       
          <div id="pay-invoice">
            <div class="card-body">
              <form action="" method="post" enctype="multipart/form-data">
                <div class="form-group">
                  <label for="cc-payment" class="control-label mb-1">Tên danh mục</label>
                  <input id="cat_name" name="cat_name" type="text" class="form-control" aria-required="true" aria-invalid="false" value="">
                </div>
                <div class="form-group has-success">
                  <label for="cc-name" class="control-label mb-1">Danh mục cha</label>
                  <select name="parent_id" id="parent_id" class="form-control">
                    <option value="0">Danh mục cha</option>
                    <?php  
                      $sqlSelect = "SELECT * FROM tbl_category WHERE parent_id = 0";
                      $result = @mysqli_query($conn,$sqlSelect) or die('Lỗi câu lệnh truy vấn');
                      while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                      <option value="<?php echo $row["cat_id"] ?>"><?php echo $row["cat_name"] ?></option>
                      <?php } ?>
                  </select>
                  <span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span>
                </div>
                <div class="form-group">
                  <label for="cc-number" class="control-label mb-1">Ảnh</label>
                  <input id="img" name="img" type="file" class="form-control cc-number identified visa" value="" data-val="true" >
                  <span class="help-block" data-valmsg-for="cc-number" data-valmsg-replace="true"></span>
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

