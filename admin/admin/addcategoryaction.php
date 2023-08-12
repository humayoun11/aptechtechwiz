<?php
require 'connectdb.php';

if (isset($_POST["addcategory"])){

    $categoryname = $_POST["categoryname"];
    // echo $categoryname;

    $addcategoryquery = "INSERT INTO `category`(`categoryname`) VALUES ('$categoryname')";
    $addcategorysave = mysqli_query($connectiondb,$addcategoryquery);

    if($addcategorysave){
        header("Location: add-category.php");
        
    //  echo "data inserted success";
     }
}

?>