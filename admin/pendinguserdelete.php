<?php
require 'connectdb.php';

$acceptId = $_GET["acceptId"];

// echo $acceptId;

$deletequery = "select * from users_pending where user_id = $acceptId";

$delete = mysqli_query($connectiondb,$deletequery);

$fetchdata = mysqli_fetch_assoc($delete);

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
    
     $deletquery = "DELETE FROM users_pending WHERE user_id = $userid";
     $datadelet = mysqli_query($connectiondb,$deletquery);
     if( $datadelet){
        header("Location: ./pending-users.php");
    //  echo "<script>alert('operation completed')</script>";
     }

    // print_r($fetchdata["phone_number"]);


?>         


