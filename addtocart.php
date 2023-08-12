<?php
session_start();
include("connectdb.php");
$_POST["accessoryid"] = $_SESSION["accessoryid"];
    $_POST["accessoryquantity"] = $_SESSION["accessoryquantity"];

if(isset($_POST["addtocart"])){
    
    $userid = $_SESSION["user_id"];
    $plantsid = $_POST["plantsid"];
    $plantquantity = $_POST["plantquantity"];
    $accessoryid = $_SESSION["accessoryid"];
    $accessoryquantity = $_SESSION["accessoryquantity"];
    if($accessoryid && $accessoryquantity == NULL){
  $sql = "INSERT INTO `cart`(`user_id`, `plantsid`, `accessoryid`, `accessory_quantity`, `plant_quantity`) VALUES('$userid','$plantsid','$accessoryid','$accessoryid','$accessoryquantity')";        
$result = mysqli_query($connectiondb, $sql);
    }
  
if(!$result){
    echo "not inserted in cart";
}

}

?>
