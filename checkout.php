<?php
session_start();
include("connectdb.php");
if(isset($_post["checkout"])){
$insert_order_query = "INSERT INTO orders(`user_id`, `total_amount`, `status` ) VALUES ('$user_id','$total_amount','$status')";
mysqli_query($connectiondb, $insert_order_query);
$order_id = mysqli_insert_id($connectiondb); 

while ($row = mysqli_fetch_assoc($cart_result)) {
    $product_id = $row["plantsid"];
    $quantity = $row["plant_quantity"];
    
    
    $insert_order_item_query = "INSERT INTO order_items (order_id, product_id, quantity) 
                                VALUES ('$order_id', '$product_id', '$quantity')";
    mysqli_query($connectiondb, $insert_order_item_query);
}

// Clear the cart for the user
$clear_cart_query = "DELETE FROM cart WHERE user_id = '$user_id'";
mysqli_query($connectiondb, $clear_cart_query);
}
?>