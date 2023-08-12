<?php
session_start();
require("authsession.php");
include("connectdb.php");

if(isset($_POST["checkout"])){
    $cart_query = "SELECT cart.cart_item_id , users_approved.user_name , plantsinfo.plantname , plantsinfo.species ,cart.plant_quantity ,plantsinfo.price from cart join users_approved
on cart.user_id = users_approved.user_id join plantsinfo 
on plantsinfo.plantsid = cart.plantsid 
 WHERE cart.user_id = '$user_id';";
$cart_result = mysqli_query($connectiondb, $cart_query);
if($cart_query>0){
    $userid = $_SESSION["user_id"];
    $totalamount = $_POST["price"]*$row["price"];
  $sql = "INSERT INTO `cart`(`user_id`, `plantsid`,  `plant_quantity`) VALUES ('$userid','$totalamount','booked')";        
$result = mysqli_query($connectiondb, $sql);
if(!$result){
    echo "not inserted in cart";
}
}
else{
    header("location:plants.php");
}

}

?>
