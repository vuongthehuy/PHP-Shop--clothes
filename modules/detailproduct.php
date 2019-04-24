<section class="single_product_details_area d-flex align-items-center">
        <?php 
            $sqlDetail ="SELECT p.*,b.brand_name FROM tbl_product AS p";
            $sqlDetail .=" INNER JOIN tbl_brand AS b ON p.brand_id = b.brand_id";
            $sqlDetail .=" WHERE p.pro_id = ".$_GET["id"];
            $resultDetail = mysqli_query($conn,$sqlDetail) or die("chết truy vấn detail");
            $rowDetail  = mysqli_fetch_row($resultDetail);
            // echo "<pre>";
            // print_r($rowDetail);
            // die;
        ?>
        <!-- Single Product Thumb -->
        <div class="single_product_thumb clearfix">
            <div class="product_thumbnail_slides owl-carousel">
                <img src="<?php echo $rowDetail[2] ?>" alt="">
                <img src="img/product-img/product-big-2.jpg" alt="">
                <img src="img/product-img/product-big-3.jpg" alt="">
            </div>
        </div>

        <!-- Single Product Description -->
        <div class="single_product_desc clearfix">
            <span><?php echo $rowDetail[11] ?></span>
            <a href="cart.html">
                <h2><?php echo $rowDetail[1] ?></h2>
            </a>
            <p class="product-price"><span class="old-price">$<?php echo $rowDetail[7] ?></span> $<?php echo $rowDetail[7] ?></p>
            <p class="product-desc"><?php echo $row[9] ?></p>

            <!-- Form -->
            <form class="cart-form clearfix" method="post">
                <!-- Select Box -->
                <div class="select-box d-flex mt-50 mb-30">
                    <?php  
                        $sqlSize = "SELECT * FROM tbl_size";
                        $resultSize = mysqli_query($conn,$sqlSize) or die("chết truy vấn size");
                    ?>
                    <label for="" id="error_size" style="color: red"></label>
                    <select name="select" id="size" name="size" class="mr-5" onchange="removeError(this.id)">
                        <option value="0">Chọn size</option>
                    <?php  
                        while ($rowSize = mysqli_fetch_assoc($resultSize)) {
                    ?>
                            <option value="<?php echo $rowSize["size_id"] ?>">Size: <?php echo $rowSize["size_name"] ?></option>
                        <?php } ?>
                    </select>
                    <?php  
                        $sqlColor = "SELECT * FROM tbl_color";
                        $resultColor = mysqli_query($conn,$sqlColor) or die("chết truy vấn color");
                    ?>
                    <label for="" id="error_color" style="color: red"></label>
                    <select name="select" id="color" name="color" onchange="removeError(this.id)">
                    <option value="0">Chọn color</option>
                     <?php  
                        while ($rowColor = mysqli_fetch_assoc($resultColor)) {
                    ?>
                        <option value="<?php echo $rowColor["col_id"] ?>">Color: <?php echo $rowColor["col_name"] ?></option>
                        <?php } ?>
                    </select>
                </div>
                <!-- Cart & Favourite Box -->
                <div class="cart-fav-box d-flex align-items-center">
                    <!-- Cart -->
                    <a name="addtocart" href="javascript:void(0)" onclick="addCart(<?php echo $rowDetail[0]; ?>);" class="btn essence-btn">Add to cart</a>
                    <!-- Favourite -->
                    <div class="product-favourite ml-4">
                        <a href="#" class="favme fa fa-heart"></a>
                    </div>
                </div>
            </form>
        </div>
    </section>