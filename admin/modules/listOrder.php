<div class="card">
  <div class="card-header">
    <strong class="card-title">Danh sách danh mục</strong>
  </div>
  <div class="card-body">
    <table id="bootstrap-data-table" class="table table-striped table-bordered">
        <tr>

           <th>STT</th>
           <th>order_id</th>
           <th>total</th>
           <th>Status</th>
           <th>date_create</th>
           <th>fullName</th>
           <th>email</th>
           <th>telephone</th>
           <th>address</th>
           <th colspan="3" style="text-align: center;">Action</th>
           
        </tr>
         <?php
          $sqlSelect = "SELECT * FROM tbl_order";
          $result = @mysqli_query($conn,$sqlSelect) or die('Lỗi câu lệnh truy vấn');
          $i=0;
          while ($row = mysqli_fetch_assoc($result)) {
            $i++;
        ?>
          <tr>
            <td><?php echo $i; ?></td>
            <td><?php echo $row["order_id"] ?></td>
            <td><?php echo $row["total"] ?></td>
            <td>
              <?php
               if( $row["status"] ==1)
               {
                echo 'Hiển thị';
               }
               else
               {
                echo 'Ẩn';
               }
            ?>
              
            </td>
            <td><?php echo $row["date_create"] ?></td>
            <td><?php echo $row["full_fullName"] ?></td>
            
            <td><?php echo $row["email"] ?></td>
            <td><?php echo $row["telephone"] ?></td>
            <td><?php echo $row["address"] ?></td>

            <td>

              <a href="index.php?view=editOrder&id=<?php echo $row["order_id"] ?>"><img src="../uploads/icon_edit.jpg" width="20"> <span>Edit</span></a>
            </td>
            <td>
               <a  onclick="return confirm('Bạn có muốn xóa không?');" href="index.php?view=deleteOrder&id=<?php echo $row["order_id"] ?>"> <img src="../uploads/icon_delete.jpg" width="25"><span>Delete</span></a>
             
            </td>
            <td>

              <a href="index.php?view=listOrderDetail&id=<?php echo $row["order_id"]?>"><span>Detail</span></a>
            </td>
          </tr>
        <?php
          }
        ?>
   </table>
 </div>
</div>

