<?php  
	ob_start(); 
    session_start();
    include("connecttion.php");
	if(isset($_POST["id"])){
		$id = $_POST["id"];
		if(isset($_SESSION["cart"])){
			$cart = $_SESSION["cart"];
			if(array_key_exists($id, $cart)){
				unset($cart[$id]);
			}
			$_SESSION["cart"] = $cart;
		}
	}
?>