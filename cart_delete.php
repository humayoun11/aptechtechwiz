<?php
session_start();
include("connectdb.php");

if (isset($_GET['remove_from_acc_cart'])) {
    $product_id = $_GET['remove_from_acc_cart'];
    $user_id = $_SESSION['user_id'];
    $delete_query = "DELETE FROM `cart` WHERE  cart.cart_item_id= $product_id";
    $delete_result = mysqli_query($connectiondb, $delete_query);
    if ($delete_result) {
        header('location:cartview.php');
    } else {
        echo "Error removing item from cart: " . mysqli_error($connectiondb);
    }
}
?>