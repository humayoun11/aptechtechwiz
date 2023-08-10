<?php
require 'connectdb.php';


if (isset($_POST["addProduct"])){

    $productname = $_POST["productname"];
    $productspecies = $_POST["productspecies"];
    $productquantity = $_POST["productquantity"];
    $productcategory = $_POST["productcategory"];
    $productdescription = $_POST["productdescription"];
    $productprice = $_POST["productprice"];
    $productimage = $_POST["productimage"];


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




    $addproductquery = "INSERT INTO `plantsinfo`(`plantsid`, `plantname`, `species`, `price`, `description`,`categoryid`, `categoryname`, `quantity`) 
    VALUES ('[value-1]','$productname ','$productspecies','$productprice','$productdescription','$productcategory','$categoryname','$productquantity')";
    $addproductsave = mysqli_query($connectiondb,$addproductquery);

    if($addproductsave){
        header("Location: add-product.php");
        
    //  echo "data inserted success";
     }




}

?>