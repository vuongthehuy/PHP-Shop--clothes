<div class="card">
  <div class="card-header">
    <strong class="card-title">Danh sách </strong>
  </div>
  <div class="card-body">
    <table id="bootstrap-data-table" class="table table-striped table-bordered">
        <tr>
          <th>STT</th>
          <th>Name</th>
          <th>Status</th>
          <th>Edit</th>
          <th>Delete</th>
        </tr>
        <?php 
        $sqlSelect="SELECT*FROM tbl_brand";
        $result=@mysqli_query($conn,$sqlSelect) or die("loi cau lenh");
        $i=0;
        while ($row=mysqli_fetch_assoc($result)) {
          $i++;
          ?>
          <tr>
            <td><?php echo $i; ?></td>
            <td><?php echo $row["brand_name"] ?></td>
            <td><?php echo $row["status"] ?></td>
          
           <td>
              <a href="index.php?view=editbrand&id=<?php echo $row["brand_id"] ?>"><img src="../uploads/icon_edit.jpg" width="20"> <span>Edit</span></a>
          </td>
          <td>
               <a  onclick="return confirm('Bạn có muốn xóa không?');" href="index.php?view=deletebrand&id=<?php echo $row["brand_id"] ?>"> <img src="../uploads/icon_delete.jpg" width="25"><span>Delete</span></a>
             
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
      window.location.assign("index.php?view=deletebrand&id="+id);
    }
  }
</script>

