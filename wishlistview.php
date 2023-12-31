<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Alazea - Gardening &amp; Landscaping HTML Template</title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="style.css">

</head>

<body>
<?php
include("header.php");

?>

    <!-- ##### Breadcrumb Area Start ##### -->
    <div class="breadcrumb-area">
        <!-- Top Breadcrumb Area -->
        <div class="top-breadcrumb-area bg-img bg-overlay d-flex align-items-center justify-content-center" style="background-image: url(img/bg-img/24.jpg);">
            <h2>WishList</h2>
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

$wishlist_query = "SELECT w.w2_id, a.accessoryname AS name, a.accessoryprice AS price, 'accessory' AS type FROM wishlist2 w INNER JOIN accessories a ON w.accessoryid = a.accessoryid WHERE w.user_id = '$user_id' UNION SELECT w.w_id, p.plantname AS name, p.price AS price, 'plant' AS type FROM wishlist w INNER JOIN plantsinfo p ON w.plantsid = p.plantsid WHERE w.user_id = '$user_id';";
$wishlist_result = mysqli_query($connectiondb, $wishlist_query);

while ($row = mysqli_fetch_assoc($wishlist_result)) {
?>
    <!-- ##### Cart Area Start ##### -->
    <div class="cart-area section-padding-0-100 clearfix">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="cart-table clearfix">
                        <table class="table table-responsive">
                            <thead>
                                <tr>
           
                                    <th><?php
                                         if ($row['type'] === 'accessory') {
        echo '<h6> Accessory</h6>';
        
    } else {
        echo '<h6> Plant</h6>';
       
    }
        ?></th>
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
                                  
                                    <td class="price"><span><?php echo $row["name"];?></span></td>
                                    <td class="total_price"><span>Rs. <?php echo $row["price"];?></span></td>
                                    
                                    
                                    <?php if($row['type'] === 'accessory'){
                                    ?>
                                    <td class="action"><a href="accesoryDelete.php?remove_from_acc_wishlist=<?php echo $row['w2_id']; ?>"><i class="icon_close"></i>accss</a></td>
                                }else{ <?php } else{?>
                                    
                                    <td class="action"><a href="wishlist_delete.php?remove_from_wishlist=<?php echo $row['w2_id']; ?>"><i class="icon_close"></i>plnts</a></td>
                                    
                                    
                                <?php }?>
                                
                                
                                </tr>
                            </tbody>
                        </table>
                    </div>
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