<?php

$servername = "localhost";
$username = "root";
$password = "";
$db ="plants";

$connectiondb = mysqli_connect($servername,$username,$password,$db);

if($connectiondb){
    // echo '<script>alert("aptech database connected")</script>';
    
    // echo "connected";
}else{
    echo " not connected";

}


?>