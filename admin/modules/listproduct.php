<div class="card">
  <div class="card-header">
    <strong class="card-title">Danh sách sản phẩm</strong>
  </div>
  <div class="card-body">
    <table id="bootstrap-data-table" class="table table-striped table-bordered">
       <tr>
         <th>STT</th>
         <th>Name</th>
         <th>Image</th>
         <th>Catagory</th>
         <th>Color</th>
         <th>Brand</th>
         <th>Size</th>
         <th>Price</th>
         <th>Safe</th>
         <th>Dresscription</th>
         <th>Status</th>
         <th>Edit</th>
         <th>Delete</th>
       </tr>
       <?php 
       $sqlSelect="SELECT* FROM tbl_product";
       $result=@mysqli_query($conn,$sqlSelect)or die('lỗi câu lệnh truy vấn');
       $i=0;
       while ($row=mysqli_fetch_assoc($result)) {
        $i++;
        ?>
        <tr>
          <td> <?php echo $i; ?> </td>
          <td><?php echo $row["pro_name"] ?></td>
          <td><?php echo $row["pro_image"] ?></td>
          <td><?php echo $row["cat_id"] ?></td>
          <td><?php echo $row["col_id"] ?></td>
          <td><?php echo $row["brand_id"] ?></td>
          <td><?php echo $row["size_id"] ?></td>
          <td><?php echo $row["price"] ?></td>
          <td><?php echo $row["safe_of"] ?></td>
          <td><?php echo $row["dresscription"] ?></td>
          <td><?php echo $row["status"] ?>    </td>
          <td>
              <a href="index.php?view=editcategory&id=<?php echo $row["cat_id"] ?>"><img src="../uploads/icon_edit.jpg" width="20"> <span>Edit</span></a>
          </td>
          <td>
               <a  onclick="return confirm('Bạn có muốn xóa không?');" href="index.php?view=deleteproduct&id=<?php echo $row["pro_id"] ?>"> <img src="../uploads/icon_delete.jpg" width="25"><span>Delete</span></a>
             
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
      window.location.assign("index.php?view=deleteproduct&id="+id);
    }
  }
</script>