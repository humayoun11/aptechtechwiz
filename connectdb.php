<?php

$servername = "localhost";
$username = "root";
$password = "";
$db ="plantnest";

$connectiondb = mysqli_connect($servername,$username,$password,$db);

if(!$connectiondb){
    echo " not connected";

}


?>