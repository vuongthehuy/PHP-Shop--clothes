<div class="cart-bg-overlay"></div>

    <div class="right-side-cart-area">

        <!-- Cart Button -->
        <div class="cart-button">
            <a href="#" id="rightSideCart"><img src="img/core-img/bag.svg" alt=""> <span id="itemCart">
                <?php  
                    $total = 0;
                    if(isset($_SESSION["cart"])){
                        foreach ($_SESSION["cart"] as $key => $value) {
                            $total += $value["quanlity"];
                        }
                    }
                    echo $total;
                ?>
            </span></a>
        </div>

        <div class="cart-content d-flex">

            <!-- Cart List Area -->
            <div class="cart-list" id="abcs">
                <!-- Single Cart Item -->
                <?php  
                $total = 0;
                    if(isset($_SESSION["cart"])){
                        foreach ($_SESSION["cart"] as $key => $value) {
                            $total += $value["price"]*$value["quanlity"];
                ?>
                    <div class="single-cart-item">
                        <a href="#" class="product-image">
                            <img src="<?php echo $value["image"] ?>" class="cart-thumb" alt="">
                            <!-- Cart Item Desc -->
                            <div class="cart-item-desc">
                              <span class="product-remove" onclick="removeItem(<?php echo $key ?>)"><i class="fa fa-close" aria-hidden="true"></i></span>
                                <span class="badge">Mango</span>
                                <h6><?php echo $value["nameProduct"] ?></h6>
                                <p class="size">Size: <?php echo $value["size"] ?></p>
                                <p class="color">Color: <?php echo $value["color"] ?></p>
                                <p class="price">$<?php echo $value["price"] ?></p>
                            </div>
                        </a>
                    </div>
                <?php }} ?>
            </div>

            <!-- Cart Summary -->
            <div class="cart-amount-summary">

                <h2>Summary</h2>
                <ul class="summary-table">
                    <li><span>subtotal:</span> <span>$ <?php echo number_format($total,0,",","."); ?></span></li>
                    <li><span>total:</span> <span>$<?php echo number_format($total,0,",","."); ?></span></li>
                </ul>
                <div class="checkout-btn mt-100">
                    <a href="index.php?view=checkout" class="btn essence-btn">check out</a>
                </div>
            </div>
        </div>
    </div>