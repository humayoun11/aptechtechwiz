<?php
require 'connectdb.php';

if (isset($_POST["signup"])){

    $signupusername = $_POST["signupusername"];
    $signupemail = $_POST["signupemail"];
    $signuppassword = $_POST["signuppassword"];
    $signupconpassword = $_POST["signupconpassword"];
    $signupcontactnumber = $_POST["signupcontactnumber"];
    $signupzipcode = $_POST["signupzipcode"];
    $signupaddress = $_POST["signupaddress"];


    $signupquery = "INSERT INTO `users_pending`(`user_name`, `user_email`, `user_password`, `user_address`, `user_contactNo`, `user_zipCode`)
    VALUES ('$signupusername','$signupemail','$signuppassword','$signupaddress','$signupcontactnumber','$signupzipcode')";
    $signupdatasave = mysqli_query($connectiondb,$signupquery);

    if($signupdatasave){
        header("Location: signup.php");
        
    //  echo "data inserted success";
     }






}

?>