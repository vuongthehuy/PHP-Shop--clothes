<?php  
	if(isset($_GET["id"]))
	{
		$id=$_GET["id"];
		$sqlDel = "DELETE FROM tbl_product WHERE pro_id={$id}";
		mysqli_query($conn,$sqlDel) or die("Lỗi câu truy vẫn xóa");
		header("location:index.php?view=listproduct");
	}
?>