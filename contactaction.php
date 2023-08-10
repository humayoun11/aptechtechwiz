<?php
require 'connectdb.php';



if (isset($_POST["contactsubmit"])){

    $contactname = $_POST["contactname"];
    $contactemail = $_POST["contactemail"];
    $contactsubject = $_POST["contactsubject"];
    $contactmessage = $_POST["contactmessage"];

    $contactquery = "INSERT INTO `contactus`( `Your Name`, `email`, `subject`, `Message`) 
    VALUES ('$contactname','$contactemail','$contactsubject','$contactmessage')";
    $contactdatasave = mysqli_query($connectiondb,$contactquery);

    if($contactdatasave){
        header("Location: contact.php");
        
    //  echo "data inserted success";
     }


}

?>