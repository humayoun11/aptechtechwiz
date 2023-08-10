<?php
require 'connectdb.php';

$acceptId = $_GET["acceptId"];

// echo $acceptId;

$qyert = "select * from users_approved where user_id  = $acceptId";

$dlvry = mysqli_query($connectiondb,$qyert);

$fetchdata = mysqli_fetch_assoc($dlvry);

print_r($fetchdata["user_id "]);
    $userid = $fetchdata["user_id "];
    
    
     $deletquery = "DELETE FROM users_approved WHERE user_id = $acceptId";
     $datadelet = mysqli_query($connectiondb,$deletquery);
     if( $datadelet){
         header("Location: approved-users.php");
        //  header("Location: stsuspend.php.php");
         //  echo "<script>alert('operation completed')</script>";
     }

    // print_r($fetchdata["phone_number"]);


?>         


