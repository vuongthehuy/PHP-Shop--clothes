<?php 
    ob_start(); 
    session_start();
    include("connecttion.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>Essence - Fashion Ecommerce Template</title>

    <!-- Favicon  -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Core Style CSS -->
    <link rel="stylesheet" href="css/core-style.css">
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <?php  
        include("modules/header.php");
        include("modules/cart.php");
        if(isset($_GET["view"])){
            $view = $_GET["view"];
             include("modules/".$view.".php");
        }else{
            include("modules/banner.php");
            include("modules/topCategory.php");
            include("modules/promotion.php");
            include("modules/newProduct.php");
            include("modules/brands.php");
        }
        
        // include("modules/cart.php");
        include("modules/footer.php");
    ?>

    <!-- jQuery (Necessary for All JavaScript Plugins) -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Plugins js -->
    <script src="js/plugins.js"></script>
    <!-- Classy Nav js -->
    <script src="js/classy-nav.min.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>
    <script>
        function likePro(id){
            $.post("likePro.php",{"id":id}, function(data, status){
                
            });
        }

        function addCart(id){
            color = $("#color").val();
            size = $("#size").val();
            if(color==0){
                $("#error_color").text("Bạn chưa chọn mầu");
            }else if(size==0){
                $("#error_size").text("Bạn chưa chọn cỡ");
            }else{
                $.post('addcart.php', {"id": id,"color":color,"size":size}, function(data) {
                    item = data.split(":-:");
                    // alert(data);
                    // alert(item[0]);
                    // alert(item[0]);
                    $("#amount").text(parseInt(item[0]));
                    $("#itemCart").text( parseInt(item[0]));
                    // alert(item[1]);
                    $("#abcs").append(item[1]);
                });
            }
        }
        function removeError(id){
            item = $("#removeError").val();
            if(item!=0){
                $("#error_"+id).text("");
            }else{
                $("#error_"+id).text("Bạn chưa chọn "+ id);
            }
        }

        function removeItem(id){
            $.post('removeitem.php', {"id": id}, function(data) {
                location.reload();
            });
        }
    </script>
</body>

</html>