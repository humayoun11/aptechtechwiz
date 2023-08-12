<?php
session_start();
require("connectdb.php");
require("authsession.php");
if(isset($_GET["wishlist"]))
{
    $plants = $_GET["wishlist"];
    $userid = $_SESSION["user_id"];

    $insert = "INSERT INTO `wishlist`(`user_id`, `plantsid`) VALUES ('$userid','$plants')";

    $result = mysqli_query($connectiondb , $insert);
    if(!$result){
      echo "ERROR";
    }
}
?>