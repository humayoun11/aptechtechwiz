<?php
session_start();
include("connectdb.php");
if(isset($_POST["reviewsubmit"])){
    $name = $_POST["name"];
    $email = $_POST["email"];
    $ratings = $_POST["ratings"];
    $comments = $_POST["comments"];
$insert = "INSERT INTO `reviews`(`name`, `email`, `ratings`, `message`) VALUES ('$name','$email','$ratings',$comments)";
$query = mysqli_query($connectiondb,$insert);





}



?>