<?php
require 'connectdb.php';
session_start();
if(isset($_POST["done"]))
echo "updated";
// $_SESSION['updateid'] = $productid;
$plantid = $_SESSION['updateid'];
$plantname = $_POST['plantname'];
$plantprice = $_POST['plantprice'];
// $plantquantity = $_POST['plantquantity'];
$plantdescription = $_POST['plantdescription'];
// $plantimage = $_POST['plantimage'];
// $plantcategory = $_POST['category'];
// echo $stname;
$productimage = $_FILES["plantimage"];
    // echo $categoryname;
    $productimagename= $productimage["name"];

    $imagetemporarypath = $productimage["tmp_name"];

    $mypatch = "productimages/".$productimagename;
    
    move_uploaded_file($imagetemporarypath,$mypatch);


// $updatequery= "UPDATE `plantsinfo` SET `plantname`='$plantname',`price`='$plantprice ',`description`='$plantdescription ',`prdouctimage`='$mypatch' WHERE plantsid = $plantid" ;
$updatequery="UPDATE `plantsinfo` SET `plantname`='$plantname',`species`='$plantdescription',`price`='$plantprice',`prdouctimage`='$productimage',`description`='$plantdescription', WHERE plantsinfo.plantsid=$plantid";

$updatedata = mysqli_query($connectiondb,$updatequery);
     if( $updatedata){
        header("Location: display-products.php");
     }
?>