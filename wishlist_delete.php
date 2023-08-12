<?php
session_start();
include("connectdb.php");



if (isset($_GET['remove_from_wishlist'])) {
    $product_id = $_GET['remove_from_wishlist'];
    $user_id = $_SESSION['user_id'];

   
    $delete_query = "DELETE FROM `wishlist` WHERE wishlist.w_id = $product_id";
    $delete_result = mysqli_query($connectiondb, $delete_query);

    if ($delete_result) {
        
        header('location:wishlistview.php');
    } else {
        echo "Error removing item from wishlist: " . mysqli_error($connectiondb);
    }
}
?>