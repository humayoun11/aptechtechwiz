<?php
session_start();
include("connectdb.php");
if(isset($_POST["addtocart"])){
    
    $userid = $_SESSION["user_id"];
    $accessoryid = $_POST["accessoryid"];
    $accessoryquantity = $_POST["accessoryquantity"];

  $sql = "INSERT INTO `cart`(`user_id`, `accessoryid`,  `accessory_quantity`) VALUES ('$userid','$accessoryid','$accessoryquantity')";        
$result = mysqli_query($connectiondb, $sql);
if(!$result){
    echo "not inserted in cart";
}else{
    header('location:cartview.php');
}

}

?>
