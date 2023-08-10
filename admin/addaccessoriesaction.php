<?php
require 'connectdb.php';

if (isset($_POST["addaccessories"])){

    $accessoryname = $_POST["accessoryname"];
    $accessoryquantity = $_POST["accessoryquantity"];
    $accessoryprice = $_POST["accessoryprice"];
    $accessoryimage = $_POST["accessoryimage"];
    // echo $categoryname;

    $addaccessoriesquery = "INSERT INTO `accessories`(`accessoryname`, `accessoryquantity`, `accessoryprice`)
     VALUES ('$accessoryname','$accessoryquantity ','$accessoryprice')";
    $addaccessoriessave = mysqli_query($connectiondb,$addaccessoriesquery);

    if($addcategorysave){
        header("Location: add-category.php");
        
    //  echo "data inserted success";
     }
}

?>