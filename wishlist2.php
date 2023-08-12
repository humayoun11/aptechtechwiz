<?php
session_start();
require("connectdb.php");
include("authsession.php");

if(isset($_GET["wishlist2"]))
{
    $accessory = $_GET["wishlist2"];
    $userid = $_SESSION["user_id"];

    $insert = "INSERT INTO `wishlist2`(`accessoryid`, `user_id`) VALUES ('$accessory','$userid')";

    $result = mysqli_query($connectiondb , $insert);
    if(!$result){
      echo "ERROR";
    }
  
}
?>