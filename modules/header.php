<header class="header_area">
        <div class="classy-nav-container breakpoint-off d-flex align-items-center justify-content-between">
            <!-- Classy Menu -->
            <nav class="classy-navbar" id="essenceNav">
                <!-- Logo -->
                <a class="nav-brand" href="index.php"><img src="img/core-img/logo.png" alt=""></a>
                <!-- Navbar Toggler -->
                <div class="classy-navbar-toggler">
                    <span class="navbarToggler"><span></span><span></span><span></span></span>
                </div>
                <!-- Menu -->
                <div class="classy-menu">
                    <!-- close btn -->
                    <div class="classycloseIcon">
                        <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                    </div>
                    <!-- Nav Start -->
                    <div class="classynav">
                        <ul>
                            <li><a href="#">Shop</a>
                                <div class="megamenu">
                                    
                                    <?php  
                                        $sqlMenu = "SELECT * FROM tbl_category WHERE parent_id = 0";
                                        $parentMenu = mysqli_query($conn,$sqlMenu) or die("Lỗi truy vấn");
                                        while ($rowParent = mysqli_fetch_assoc($parentMenu)) {
                                    ?>  <ul class="single-mega cn-col-4">
                                            <li class="title"><?php echo $rowParent["cat_name"]; ?></li>
                                            <?php  
                                                $sqlsubMenu = "SELECT * FROM tbl_category WHERE parent_id = ".$rowParent['cat_id'];
                                                $menu = mysqli_query($conn,$sqlsubMenu) or die("Lỗi truy vấn");
                                                while ($row = mysqli_fetch_assoc($menu)) {
                                            ?>
                                            <li><a href="index.php?view=product&id=<?php echo $row["cat_id"] ?>"><?php echo $row["cat_name"]; ?></a></li>
                                            <?php } ?>
                                        </ul>
                                    <?php }
                                    ?>
                                   

                                    <div class="single-mega cn-col-4">
                                        <img src="img/bg-img/bg-6.jpg" alt="">
                                    </div>
                                </div>
                            </li>
                            <li><a href="#">Pages</a>
                                <ul class="dropdown">
                                    <li><a href="index.html">Home</a></li>
                                    <li><a href="shop.html">Shop</a></li>
                                    <li><a href="single-product-details.html">Product Details</a></li>
                                    <li><a href="checkout.html">Checkout</a></li>
                                    <li><a href="blog.html">Blog</a></li>
                                    <li><a href="single-blog.html">Single Blog</a></li>
                                    <li><a href="regular-page.html">Regular Page</a></li>
                                    <li><a href="contact.html">Contact</a></li>
                                </ul>
                            </li>
                            <li><a href="index.php?view=blogs">Blog</a></li>
                            <li><a href="contact.html">Contact</a></li>
                        </ul>
                    </div>
                    <!-- Nav End -->
                </div>
            </nav>

            <!-- Header Meta Data -->
            <div class="header-meta d-flex clearfix justify-content-end">
                <!-- Search Area -->
                <div class="search-area">
                    <form action="#" method="post">
                        <input type="search" name="search" id="headerSearch" placeholder="Type for search">
                        <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                    </form>
                </div>
                <!-- Favourite Area -->
                <div class="favourite-area">
                    <a href="#"><img src="img/core-img/heart.svg" alt=""></a>
                </div>
                <!-- User Login Info -->
                <div class="user-login-info">
                    <?php 
                        if(isset($_SESSION["userInfo"])){
                    ?>
                        <a href="index.php?view=logout" title="Logout"><img src="img/core-img/user.svg" alt=""></a>
                    <?php
                        }else{
                    ?>
                        <a href="index.php?view=account" title="Login"><img src="img/core-img/user.svg" alt=""></a>
                    <?php
                        }
                    ?>
                    
                </div>
                <!-- Cart Area -->
                <?php  
                    $amount = 0;
                    if(isset($_SESSION["cart"])){
                        $cart = $_SESSION["cart"];
                        foreach ($cart as $key => $value) {
                            $amount+=$value["quanlity"];
                        }
                    }
                ?>
                <div class="cart-area">
                    <a href="#" id="essenceCartBtn"><img src="img/core-img/bag.svg" alt=""> <span id="amount"><?php echo $amount; ?></span></a>
                </div>
            </div>
            
        </div>
    </header>