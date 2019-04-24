<section class="single_product_details_area d-flex align-items-center">
	<div class="container">
		<div class="row">
			<div class="col-12 col-md-6 col-lg-6">
				<br />
				<legend>
				<?php 
					if(isset($_POST["login"])){
						$userName = $_POST["userName"];
						$password = $_POST["password"];

						$sqlLogin = "SELECT * FROM tbl_user WHERE user_name=\"$userName\" AND `password` =\"$password\"";
						// die($sqlLogin);
						$result = mysqli_query($conn,$sqlLogin) or die("CHết login");
						$row = mysqli_fetch_row($result);
						$count = count($row);
						if($count){
							$_SESSION["userInfo"]=$row;
							header("location:index.php");
						}
					}
				?>
				<fieldset><h2>Login</h2></fieldset>
					<form method="post">
						<div class="form-group">
						<label for="exampleInputEmail1">User Name</label>
							<input type="text" class="form-control" name="userName" id="userName" placeholder="User Name">
						</div>
						<div class="form-group">
							<label for="exampleInputPassword1">Password</label>
							<input type="password" class="form-control" id="password" name="password" placeholder="Password">
						</div>
						<div class="checkbox">
							<label>
								<input type="checkbox" name="rememberMe" id="rememberMy"> Check me out
							</label>
						</div>
						<button type="submit" class="btn btn-default" name="login">Submit</button>
					</form>
				</legend>
				<br />
			</div>
			<div class="col-12 col-md-6 col-lg-6">
				Register
			</div>
		</div>
	</div>
</section>