<?php
require 'connectdb.php';

if (isset($_POST["addaccessories"])){

    $accessoryname = $_POST["accessoryname"];
    $accessoryquantity = $_POST["accessoryquantity"];
    $accessoryprice = $_POST["accessoryprice"];
    // $accessoryimage = $_POST["accessoryimage"];
    $accessoryimage = $_FILES["accessoryimage"];
    // echo $categoryname;
    $accessoryimagename= $accessoryimage["name"];

    $imagetemporarypath = $accessoryimage["tmp_name"];

    $mypatch = "productimages/".$accessoryimagename;
    move_uploaded_file($imagetemporarypath,$mypatch);

    $addaccessoriesquery = "INSERT INTO `accessories`(`accessoryname`, `accessoryquantity`, `accessoryprice` , `accessoriesimage`)
     VALUES ('$accessoryname','$accessoryquantity ','$accessoryprice','$mypatch')";
    $addaccessoriessave = mysqli_query($connectiondb,$addaccessoriesquery);

    if($addaccessoriessave){
        header("Location: add-category.php");
        
    //  echo "data inserted success";
     }
}

?>