<div class="card">
  <div class="card-header">
    <strong class="card-title">Danh sách danh mục</strong>
  </div>
  <div class="card-body">
    <table id="bootstrap-data-table" class="table table-striped table-bordered">
        <tr>
           <th>STT</th>
           <th>Username</th>
           <th>Password</th>
           <th>Email</th>
           <th>Gender</th>
           <th>Birthday</th>
           <th>Province_id</th>
           <th>Status</th>
           <th>Telephone</th>
          <th>Role</th>
           

        </tr>
         <?php
          $sqlSelect = "SELECT * FROM tbl_user";
          $result = @mysqli_query($conn,$sqlSelect) or die('Lỗi câu lệnh truy vấn');
          $i=0;
          while ($row = mysqli_fetch_assoc($result)) {
            $i++;
        ?>
          <tr>
            <td><?php echo $i; ?></td>
            <td><?php echo $row["user_name"] ?></td>
            <td><?php echo $row["password"] ?></td>
            <td><?php echo $row["email"] ?></td>
            <td><?php echo $row["gender"] ?></td>
            <td><?php echo $row["birthday"] ?></td>
            <td><?php echo $row["provice_id"] ?></td>
            <td><?php echo $row["status"] ?></td>
            <td><?php echo $row["telephone"] ?></td>
            <td><?php echo $row["role"] ?></td>
            <td>

              <a href="index.php?view=editcategory&id=<?php echo $row["cat_id"] ?>"><i class="fa fa-pencil"></i> <span>Sửa</span></a>
               <a onclick="return confirm('Bạn có muốn xóa không');" href="index.php?view=deleteuser&id=<?php echo $row["user_id"] ?>"> <span>Xóa</span></a>
             
            </td>
          </tr>
        <?php
          }
        ?>
   </table>
 </div>
</div>
<script>
  function deleleCat(id){
    check = confirm("Bạn có muốn xóa hay không");
    if(check){
      window.location.assign("index.php?view=deleteuser&id="+id);
    }
  }
</script>
