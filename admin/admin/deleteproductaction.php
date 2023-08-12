<?php
require 'connectdb.php';

$acceptId = $_GET["acceptId"];

// echo $acceptId;

$qyert = "select * from plantsinfo where plantsid  = $acceptId";

$dlvry = mysqli_query($connectiondb,$qyert);

$fetchdata = mysqli_fetch_assoc($dlvry);

// print_r($fetchdata["Id"]);
    $prductid = $fetchdata["plantsid"];
   
    
     $deletquery = "DELETE FROM plantsinfo WHERE plantsid = $prductid";
     $datadelet = mysqli_query($connectiondb,$deletquery);
     if( $datadelet){
         header("Location: display-products.php");
        //  header("Location: stsuspend.php.php");
         //  echo "<script>alert('operation completed')</script>";
     }

    // print_r($fetchdata["phone_number"]);


?>         


