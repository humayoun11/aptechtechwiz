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

    // echo $signupusername;
    // echo '<br>';
    // echo $signupemail;
    // echo '<br>';
    // echo $signuppassword;
    // echo '<br>';
    // echo $signupconpassword;
    // echo '<br>';
    // echo $signupcontactnumber;
    // echo '<br>';
    // echo $signupzipcode ;
    // echo '<br>';
    // echo $signupaddress;
    // echo '<br>';



    $signupquery = "INSERT INTO `users_approved`(`user_name`, `user_email`, `user_password`, `user_address`, `user_contactNo`, `user_zipCode`)
    VALUES ('$signupusername','$signupemail','$signuppassword','$signupaddress','$signupcontactnumber','$signupzipcode')";
    $signupdatasave = mysqli_query($connectiondb,$signupquery);

    if($signupdatasave){
        header("Location: signup.php");
        
    //  echo "data inserted success";
     }






}

?>