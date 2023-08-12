<?php
require 'connectdb.php';


if (isset($_POST["addProduct"])){

    $productname = $_POST["productname"];
    $productspecies = $_POST["productspecies"];
    $productquantity = $_POST["productquantity"];
    $productcategory = $_POST["productcategory"];
    $productdescription = $_POST["productdescription"];
    $productprice = $_POST["productprice"];
    // $productimage = $_POST["productimage"];


    $productimage = $_FILES["productimage"];
    // echo $categoryname;
    $productimagename= $productimage["name"];

    $imagetemporarypath = $productimage["tmp_name"];

    $mypatch = "productimages/".$productimagename;
    
    move_uploaded_file($imagetemporarypath,$mypatch);


    // echo $productname;
    // echo "<br>";
    // echo $productspecies;
    // echo "<br>";
    // echo $productquantity;
    // echo "<br>";
    // echo $productcategory;
    // echo "<br>";
    // echo $productdescription;
    // echo "<br>";
    // echo $productprice;
    // echo "<br>";
    // echo $productimage;
    // echo "<br>";
    $queryr= "select * from category where categoryid = $productcategory";
    $categorydata = mysqli_query($connectiondb,$queryr);
    $categoryid = mysqli_fetch_assoc($categorydata);
    $categoryname = $categoryid['categoryname'];




    $addproductquery = "INSERT INTO `plantsinfo`(`plantsid`, `plantname`, `species`, `price`,`prdouctimage`, `description`, `productimage`)
     VALUES ('[value-1]','$productname','$productspecies','$productprice','$mypatch','$productdescription','$mypatch')";
    $addproductsave = mysqli_query($connectiondb,$addproductquery);

    if($addproductsave){
        header("Location: add-product.php");
        
    //  echo "data inserted success";
     }




}

?>