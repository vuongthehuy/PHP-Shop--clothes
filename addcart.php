<?php  
	ob_start(); 
    session_start();
    include("connecttion.php");
	if(isset($_POST["id"]) && isset($_POST["color"]) && isset($_POST["size"])){
		
		$id = $_POST["id"];
		$color = $_POST["color"];
		$size = $_POST["size"];

		$sqlDetail ="SELECT p.* FROM tbl_product AS p";
        $sqlDetail .=" WHERE p.pro_id = ".$_POST["id"];
        $resultDetail = mysqli_query($conn,$sqlDetail) or die("chết truy vấn detail");
        $rowDetail  = mysqli_fetch_row($resultDetail);

        if(!isset($_SESSION["cart"])){
        	$cart[$id] = array(
        		'nameProduct'=>$rowDetail[1],
        		'price'=>$rowDetail[7],
        		'quanlity'=>1,
        		"color"=>$color,
        		"size"=>$size,
        		"image"=>$rowDetail[2]
        	);
        }else{
        	$cart = $_SESSION["cart"];
        	if(array_key_exists($id, $cart)){
        		$cart[$id] = array(
	        		'nameProduct'=>$rowDetail[1],
	        		'price'=>$rowDetail[7],
	        		'quanlity'=>(int)$cart[$id]["quanlity"] + 1,
	        		"color"=>$color,
	        		"size"=>$size,
	        		"image"=>$rowDetail[2]
	        	);
        	}else{
        		$cart[$id] = array(
	        		'nameProduct'=>$rowDetail[1],
	        		'price'=>$rowDetail[7],
	        		'quanlity'=>1,
	        		"color"=>$color,
	        		"size"=>$size,
	        		"image"=>$rowDetail[2]
	        	);
        	}
        }
        $_SESSION["cart"] = $cart;
       	$amount = 0;
        $txtHTML=$amount;
       	foreach ($_SESSION["cart"] as $key => $value) {
       		$txtHTML .= $value["quanlity"].":-:";
            $txtHTML .='<div class="single-cart-item">';
            $txtHTML .='<a href="#" class="product-image">';
                $txtHTML .='<img src="'. $value["image"] .'" class="cart-thumb" alt="">';
                
                $txtHTML .='<div class="cart-item-desc">';
                  $txtHTML .='<span class="product-remove" onclick="removeItem('. $key.')"><i class="fa fa-close" aria-hidden="true"></i></span>';
                    $txtHTML .='<span class="badge">Mango</span>';
                    $txtHTML .='<h6>'.$value["nameProduct"] .'</h6>';
                    $txtHTML .='<p class="size">Size: '. $value["size"].'</p>';
                    $txtHTML .='<p class="color">Color: '. $value["color"] .'</p>';
                    $txtHTML .='<p class="price">$'. $value["price"] .'</p>';
                $txtHTML .='</div>';
            $txtHTML .='</a>';
        $txtHTML .='</div>';
    
       	}
       	echo $txtHTML;
	}
?>