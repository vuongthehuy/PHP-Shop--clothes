<div class="checkout_area section-padding-80">
	<div class="container">
		<div class="row">
		<?php  
			$userName="";
			$email="";
			$phone = "";
			if(isset($_SESSION["userInfo"])){
				$userInfo = $_SESSION["userInfo"];
				$userName = $_SESSION["userInfo"][1];
				$email= $_SESSION["userInfo"][3];
				$phone= $_SESSION["userInfo"][8];
			}
			$total = 0;
        	if(isset($_SESSION["cart"])){
                foreach ($_SESSION["cart"] as $key => $value) {
                    $total += $value["price"]*$value["quanlity"];
                }
        	}

        	if(isset($_POST["checkout"])){
        		$fullName = $_POST["fullName"];
        		$userId = $_SESSION["userInfo"][0];
        		$status = 1;
        		$email = $_POST["email"];
        		$phone = $_POST["phone"];
        		$address = $_POST["address"];
        		$date = date("Y-m-d H:i:s");

        		$sqlOrder = "INSERT INTO tbl_order (user_id,total,date_create,`status`,full_fullName,email,telephone,address)";
        		$sqlOrder .= " VALUES('$userId','$total','$date','$status','$fullName','$email','$phone','$address')";
        		mysqli_query($conn,$sqlOrder) or die("lỗi " . $sqlOrder);

        		$idOrder = mysqli_insert_id($conn);
        		if(isset($_SESSION["cart"])){
	                foreach ($_SESSION["cart"] as $key => $value) {
	                	$quanlity = $value["quanlity"];
	                	$color = $value["color"];
	                	$size = $value["size"];
	                	$price = $value["price"];

	                	$sqlDeltail = "INSERT INTO tbl_orderdetail(order_id,product_id,quanlity,size_id,color_id,`status`,price)";
	                	$sqlDeltail .= " VALUES('$idOrder','$key','$quanlity','$size','$color','1','$price')";

	                	mysqli_query($conn,$sqlDeltail) or die("lỗi " . $sqlDeltail);

	                }
	            }
        	}
		?>
			<form action="" method="post">
			<div class="col-12 col-md-6">
				<div class="checkout_details_area mt-50 clearfix">

					<div class="cart-page-heading mb-30">
						<h5>Billing Address</h5>
					</div>
					
						<div class="row">
							<div class="col-md-12 mb-3">
								<label for="first_name">Full Name<span>*</span></label>
								<input type="text" class="form-control" id="fullName" name="fullName" value="" required>
							</div>
							<div class="col-md-12 mb-3">
								<label for="first_name">User Name<span>*</span></label>
								<input type="text" class="form-control" id="userName" name="userName" value="<?php echo $userName ?>" required>
							</div>
							<div class="col-12 mb-3">
								<label for="company">Email</label>
								<input type="text" class="form-control" id="email" name="email" value="<?php echo $email ?>">
							</div>
							
							<div class="col-12 mb-3">
								<label for="street_address">Telephone <span>*</span></label>
								<input type="text" class="form-control mb-3" id="phone" name="phone" value="<?php echo $phone ?>">
							</div>
							<div class="col-12 mb-3">
								<label for="postcode">address <span>*</span></label>
								<input type="text" class="form-control" id="address" name="address" value="">
							</div>
							
						</div>
					
				</div>
			</div>

			<div class="col-12 col-md-6 col-lg-5 ml-lg-auto">
				<div class="order-details-confirmation">

					<div class="cart-page-heading">
						<h5>Your Order</h5>
						<p>The Details</p>
					</div>

					<ul class="order-details-form mb-4">
						<li><span>Product</span> <span>Total</span></li>
						<li><span>Cocktail Yellow dress</span> <span>$<?php echo $total; ?></span></li>
					</ul>
					<!-- <a href="#" class="btn essence-btn">Place Order</a> -->
					<input type="submit" name="checkout" value="Place Order" class="btn essence-btn">
				</div>
			</div>
			</form>
		</div>
	</div>
</div>