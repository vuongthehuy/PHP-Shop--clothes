<?php  
	ob_start(); 
    session_start();
    include("connecttion.php");
    if(isset($_POST["id"])){
    	$userid = $_SESSION["userInfo"][0];
    	$idProduct = $_POST["id"];
    	$date = date("Y-m-d H:i:s");
    	//liked
    	//chưa đăng nhập
    	$sqlCheck = "SELECT * FROM tbl_wishlist WHERE id_user='$userid' AND id_product ='$idProduct'";
    	$resultCheck = mysqli_query($conn,$sqlCheck) or die("Chết select");
    	$rowCheck = mysqli_fetch_row($resultCheck);
    	if(count($rowCheck)==0){
    		$sqlInsert="INSERT INTO tbl_wishlist(id_user,id_product,date_create) VALUES('$userid','$idProduct','$date')";
    		$result = mysqli_query($conn,$sqlInsert) or die("Chết insert");
    	}else{
    		$sqlUnLike = "DELETE FROM tbl_wishlist WHERE id_user = '$userid' AND id_product='$idProduct'";
    		// die($sqlUnLike);
    		$resuleUnLike = mysqli_query($conn,$sqlUnLike);
    	}
    }
?>