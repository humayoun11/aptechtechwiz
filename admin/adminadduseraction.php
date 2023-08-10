<?php
require 'connectdb.php';
if (isset($_POST["addUser"])){

    $addusername = $_POST["addusername"];
    $adduseremail = $_POST["adduseremail"];
    $adduserpassword = $_POST["adduserpassword"];
    $adduserphonenumber = $_POST["adduserphonenumber"];
    $adduserzipcode = $_POST["adduserzipcode"];
    $adduseraddress = $_POST["adduseraddress"];



    $adduserquery = "INSERT INTO `users_approved`(`user_name`, `user_email`, `user_password`, `user_address`, `user_contactNo`, `user_zipCode`)
    VALUES ('$addusername','$adduseremail','$adduserpassword','$adduseraddress','$adduserphonenumber','$adduserzipcode')";
    $adduserasave = mysqli_query($connectiondb,$adduserquery);

    if($adduserasave){
        header("Location: approved-users.php");
        
    //  echo "data inserted success";
     }


}




?>