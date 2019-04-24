<?php  
	$server = "localhost";
	$user = "root";
	$pwd = "";
	$database = "ph0518_2";
	//kết nối đến CSDL sử dụng hàm mysqli_connect();
	$conn = @mysqli_connect($server,$user,$pwd,$database) or die("Không kết nối được với CSDL");
	mysqli_set_charset($conn,"utf8");
?>