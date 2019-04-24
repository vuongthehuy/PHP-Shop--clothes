<div class="card">
  <div class="card-header">
    <strong class="card-title">Thư viện ảnh</strong>
  </div>
  <div class="card-body">
    <table id="bootstrap-data-table" class="table table-striped table-bordered">
        <tr>
          <th>Image ID</th>
          <th>Product</th>
          <th>Url</th>
          <th>Status</th>
          <th>Edit</th>
          <th>Delete</th>
        </tr>
        <?php 
         $sqlSelect="SELECT*FROM tbl_image";
         $result=@mysqli_query($conn,$sqlSelect)or die('lỗi câu lệnh');
         $i=0;
         while($row=mysqli_fetch_assoc($result)){
          $i++;
          ?>
            <td><?php echo $i; ?></td>
            <td><?php echo $row["pro_id"] ?></td>
            <td><?php echo $row["url"] ?></td>
            <td><?php echo $row["status"] ?></td>
            <td>
              <a href="index.php?view=editimage&id=<?php echo $row["img_id"] ?>"><img src="../uploads/icon_edit.jpg" width="20"> <span>Edit</span></a>
          </td>
          <td>
               <a  onclick="return confirm('Bạn có muốn xóa không?');" href="index.php?view=deletepimage&id=<?php echo $row["img_id"] ?>"> <img src="../uploads/icon_delete.jpg" width="25"><span>Delete</span></a>
             
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
      window.location.assign("index.php?view=deleteimage&id="+id);
    }
  }
</script>
