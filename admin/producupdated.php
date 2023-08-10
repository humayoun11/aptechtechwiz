<?php
require 'connectdb.php';
session_start();
if(isset($_POST["done"]))
echo "updated";
// $_SESSION['updateid'] = $productid;
$plantid = $_SESSION['updateid'];
$plantname = $_POST['plantname'];
$plantprice = $_POST['plantprice'];
$plantquantity = $_POST['plantquantity'];
$plantdescription = $_POST['plantdescription'];
// $plantcategory = $_POST['category'];
// echo $stname;


$updatequery= "UPDATE `plantsinfo` SET `plantname`='$plantname',`price`='$plantprice ',`description`='$plantdescription ',`quantity`='$plantquantity' WHERE plantsid = $plantid";

$updatedata = mysqli_query($connectiondb,$updatequery);
     if( $updatedata){
        header("Location: display-products.php");
     }
?>