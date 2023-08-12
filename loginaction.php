<?php
session_start();
include("connectdb.php");
if(isset($_POST["submit"])){
    $email = $_POST["name_email"];
    $password = $_POST["password"];

    $login = "SELECT * FROM `users_approved` WHERE `user_email` ='$email' && `user_password` ='$password'";
    $deliver = mysqli_query($connectiondb , $login);
    $row = mysqli_fetch_assoc($deliver);
    $counnt = mysqli_num_rows($deliver);
    if($counnt>0){
        $_SESSION["user_id"] = $row["user_id"]; 
        $_SESSION["user_name"] = $row["user_name"]; 
        $_SESSION["user_email"] = $row["user_email"]; 
        $_SESSION["user_password"] = $row["user_password"]; 
        $_SESSION["user_address"] = $row["user_address"];
        $_SESSION["user_contactNo"] = $row["user_contactNo"];
        $_SESSION["user_zipCode"] = $row["user_zipCode"];
        header("location:myaccount.php");
        exit;
}
else{
  header("location:login.php?error=InvalidCredentials");
  exit;
}
}
?>