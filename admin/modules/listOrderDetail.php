<div class="card">
  <div class="card-header">
    <strong class="card-title">Danh sách danh mục</strong>
  </div>
  <div class="card-body">
    <table id="bootstrap-data-table" class="table table-striped table-bordered">
        <tr>

           <th>STT</th>
           <th>detail_id</th>
           <th>product_id</th>
           <th>quanlity</th>
           <th>size_id</th>
           <th>color_id</th>
           <th>status</th>
           <th>price</th>
           <th colspan="2" style="text-align: center;">Action</th>
           
        </tr>
         <?php
         if(isset($_GET["id"]))
          {
            $sqlSelect = "SELECT * FROM tbl_orderdetail Where order_id=".$_GET["id"]; 
          $result = @mysqli_query($conn,$sqlSelect) or die('Lỗi câu lệnh truy vấn');
        }
          $i=0;
          while ($row = mysqli_fetch_assoc($result)) {
            $i++;
          
        
        ?>
          <tr>
            <td><?php echo $i; ?></td>
            <td><?php echo $row["order_detail_id"] ?></td>
            <td><?php echo $row["quanlity"] ?></td>
            <td><?php echo $row["size_id"] ?></td>
            <td><?php echo $row["color_id"] ?></td>
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
            <td><?php echo $row["price"] ?></td>

            <td>

              <a href="index.php?view=editOrder&id=<?php echo $row["order_id"] ?>"><img src="../uploads/icon_edit.jpg" width="20"> <span>Edit</span></a>
            </td>
            <td>
               <a  onclick="return confirm('Bạn có muốn xóa không?');" href="index.php?view=deleteOrder&id=<?php echo $row["order_id"] ?>"> <img src="../uploads/icon_delete.jpg" width="25"><span>Delete</span></a>
             
            </td>
            
          </tr>
        <?php
          }
        ?>
   </table>
 </div>
</div>

