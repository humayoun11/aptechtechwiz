<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Plant Nest | Cart View</title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="style.css">

</head>

<body>
<?php

include("header.php");
require("authsession.php");
?>

    <!-- ##### Breadcrumb Area Start ##### -->
    <div class="breadcrumb-area">
        <!-- Top Breadcrumb Area -->
        <div class="top-breadcrumb-area bg-img bg-overlay d-flex align-items-center justify-content-center" style="background-image: url(img/bg-img/24.jpg);">
            <h2>Cart Details</h2>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i> Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">WishList</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
   
    <!-- ##### Breadcrumb Area End ##### -->
    <?php
                            $user_id = $_SESSION["user_id"];

$cart_query = "SELECT cart.cart_item_id , users_approved.user_name , plantsinfo.plantname , plantsinfo.species ,cart.plant_quantity ,plantsinfo.price from cart join users_approved
on cart.user_id = users_approved.user_id join plantsinfo 
on plantsinfo.plantsid = cart.plantsid 
 WHERE cart.user_id = '$user_id';";
$cart_result = mysqli_query($connectiondb, $cart_query);

while ($row = mysqli_fetch_assoc($cart_result)) {
?>
    <!-- ##### Cart Area Start ##### -->
    <div class="cart-area section-padding-0-100 clearfix">
        <div class="container">
            
            <div class="row">
                <div class="col-8">
                    <div class="cart-table clearfix">
                        
                        <table class="table table-responsive">
                            <thead>
                                <tr>
           
                                    <th>Product</th>
                                    <th>Product Name</th>
                                    <th>  Price</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
            
                                <tr>
                                    <td class="cart_product_img">
                                        <a href="#"><img src="img/bg-img/34.jpg" alt="Product"></a>
                                        <h5</h5>
                                    </td>
                                  
                                    <td class="price"><span><?php echo $row["plantname"];?></span></td>
                                    <td class="total_price"><span>Rs. <?php echo $row["price"];?></span></td>
                                    <td class="action"><a href="cart_delete.php?remove_from_acc_cart=<?php echo $row['cart_item_id']; ?>"><i class="icon_close"></i></a></td>
                                </tr>
                            </tbody>
                      
                           </form>
                        </table>
                    </div>
                </div>
                <!-- <div class="col-md-12 mx-auto">
    <form action="#"  method="post">
                           <button class="btn btn-success" type="submit" name="checkout">Proceed to checkout</button> -->
    </div>
            </div>
    

        </div>
    </div>
    <?php } ?>
    
    
    <!-- ##### Cart Area End ##### -->

    <!-- ##### Footer Area Start ##### -->
   <?php
   include("footer.php");
   ?>
    <!-- ##### Footer Area End ##### -->

    <!-- ##### All Javascript Files ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="js/plugins/plugins.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>
</body>

</html>