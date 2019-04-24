<div class="card">
  <div class="card-header">
    <strong class="card-title">Danh sách danh mục</strong>
  </div>
  <div class="card-body">
    <table id="bootstrap-data-table" class="table table-striped table-bordered">
        <tr>
           <th>Post ID</th>
           <th>Subject</th>
           <th>Dressctiption</th>
           <th>Img</th>
           <th>Content</th>
           <th>Date</th>
           <th>Status</th>
           <th>Edit</th>
           <th>Delete</th>
          
        </tr>
         <?php
          $sqlSelect = "SELECT * FROM tbl_post";
          $result = @mysqli_query($conn,$sqlSelect) or die('Lỗi câu lệnh truy vấn');
          $i=0;
          while ($row = mysqli_fetch_assoc($result)) {
            $i++;
        ?>
          <tr>
            <td><?php echo $i; ?></td>
            <td><?php echo $row["subject"] ?></td>
            <td><?php echo $row["dressctiption"] ?></td>
            <td><?php echo $row["img"] ?></td>
            <td><?php echo $row["content"] ?></td>
            <td><?php echo $row["create_date"] ?></td>
            <td><?php echo $row["status"] ?></td>
            <td>
              <a href="index.php?view=editcategory&id=<?php echo $row["cat_id"] ?>"><img src="../uploads/icon_edit.jpg" width="20"> <span>Edit</span></a>
            </td>
            <td>
               <a  onclick="return confirm('Bạn có muốn xóa không?');" href="index.php?view=deletepost&id=<?php echo $row["post_id"] ?>"> <img src="../uploads/icon_delete.jpg" width="25"><span>Delete</span></a>
             
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
      window.location.assign("index.php?view=deletepost&id="+id);
    }
  }
</script>

