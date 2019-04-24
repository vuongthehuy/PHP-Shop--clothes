<div class="animated fadeIn">
  <div class="row">
    <div class="col-lg-6">
      <div class="card">
        <div class="card-header">
          <strong class="card-title">Thông tin thành viên</strong>
        </div>
        <div class="card-body">
         
          
          <div id="pay-invoice">
            <div class="card-body">
              <form action="" method="post" enctype="multipart/form-data">
                <div class="form-group">
                  <label for="cc-payment" class="control-label mb-1">Tên user</label>
                  <input id="user_name" name="user_name" type="text" class="form-control" aria-required="true" aria-invalid="false" value="">
                </div>
                 <div class="form-group">
                  <label for="cc-payment" class="control-label mb-1">Mật khẩu</label>
                 <input type="password" name="password"  class="form-control"  aria-required="true" aria-invalid="false" value="">
                </div>
                <div class="form-group">
                  <label for="cc-payment" class="control-label mb-1">Email</label>
                 <input type="email" name="email"  class="form-control"  aria-required="true" aria-invalid="false" value="">
                </div>
                 <div class="form-group">
                  <label for="cc-payment" class="control-label mb-1">Giới tính</label>
                 <input type="text" name="gender"  class="form-control"  aria-required="true" aria-invalid="false" value="">
                </div>
                <div class="form-group">
                  <label for="cc-payment" class="control-label mb-1">Ngày sinh</label>
                 <input type="text" name="birthday"  class="form-control"  aria-required="true" aria-invalid="false" value="">
                </div>
                <div class="form-group">
                  <label for="cc-payment" class="control-label mb-1">Quê quán</label>
                 <input type="text" name="province"  class="form-control"  aria-required="true" aria-invalid="false" value="">
                </div>
                <div class="form-group">
                  <label for="cc-payment" class="control-label mb-1">Telephone</label>
                 <input type="text" name="telephone"  class="form-control"  aria-required="true" aria-invalid="false" value="">
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

