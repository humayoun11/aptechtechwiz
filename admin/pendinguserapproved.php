<?php
require 'connectdb.php';

$acceptId = $_GET["acceptId"];

// echo $acceptId;

$getpendinguser = "select * from users_pending where user_id = $acceptId";

$approvedquery = mysqli_query($connectiondb,$getpendinguser);

$fetchdata = mysqli_fetch_assoc($approvedquery);

print_r($fetchdata["user_id"]);
    $userid = $fetchdata["user_id"];
    $username = $fetchdata["user_name"];
    $useremail = $fetchdata["user_email"];
    $userpassword = $fetchdata["user_password"];
    $useraddress = $fetchdata["user_address"];
    $usercontactno = $fetchdata["user_contactNo"];
    $userzipcode = $fetchdata["user_zipCode"];
    // $sttime = $fetchdata["time"];
    // $stfaculty = $fetchdata["faculty"];


    $insertquery = "INSERT INTO `users_approved`(`user_name`, `user_email`, `user_password`, `user_address`, `user_contactNo`, `user_zipCode`)
     VALUES ('$username','$useremail','$userpassword','$useraddress','$usercontactno','$userzipcode')";
     $datasave = mysqli_query($connectiondb,$insertquery);
     $deletquery = "DELETE FROM users_pending WHERE user_id = $userid";
     $datadelet = mysqli_query($connectiondb,$deletquery);
     if($datasave && $datadelet){
        header("Location: ./pending-users.php");
    //  echo "<script>alert('operation completed')</script>";
     }

    // print_r($fetchdata["phone_number"]);


?>         


