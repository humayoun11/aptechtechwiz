<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="description" content="" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Alazea - Gardening &amp; Landscaping HTML Template</title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico" />

    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="style.css" />
    <link
  href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
  rel="stylesheet"
  integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD"
  crossorigin="anonymous"
/>
<link
  rel="stylesheet"
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
  integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
  crossorigin="anonymous"
  referrerpolicy="no-referrer"
/>
<link
  rel="stylesheet"
  href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
/>
  </head>
  <style>
    @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@700&family=Roboto&family=Stylish&display=swap");
    @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@700&family=Roboto&family=Stylish&display=swap");
    @media screen and (max-width: 600px) {
      .account {
        display: none;
      }
    }
    /* .btn {
      background-color: #FFFF00 ;
      border: none;
      border-radius: 20px;
      color: white;
      width: 200px;
      height: 50px;
      font-family: "";
      font-size: 20px;
    } */
    /* .btnn:hover {
      background: linear-gradient(
        rgba(142, 50, 234, 0.7),
        rgba(246, 6, 246, 0.6)
      );
    } */
    /* .card img:hover {
      transform: scale(1.1);
      transition: 0.2s ease-in-out;
    } */
    /* .imagee img {
      transition: 0.5s ease-in-out;
    } */
    /* .imagee img:hover {
      transform: translateY(30px);
      transition: 0.5s ease-in-out;
    } */
    /* .card {
      width: 290px;
      height: 100%;
      text-align: center;
      padding: 10px 20px;
      font-family: sans-serif;
      border-radius: 5px;
      background-color: #f6f6f6;
      box-shadow: 0 0 8px #14d043;
    } */
    /* .card-title {
      font-weight: 800;
      font-size: 20px;
    } */
    /* .btn{
      color: white;
      background-color: #006400;
      font-family: sans-serif;
      height: 40px;
    } */
    /* .card-display{
        display:  !important;
    } */

    .crd-parent{
      border: .5px solid #006400;
    }

    .crd{
      display: flex;
      flex-wrap: wrap;
      align-items: center;
      justify-content: space-between;
    }
    .crd a{
      font-size: 12px;
      text-decoration: none;
      background-color: #006400;
      color: white;
      border-radius: 2px;
      font-family: sans-serif;
      border: 1px solid #006400;
      padding: 0px;
    }

    .crd a:hover{
      color: #006400;
      background-color: white;
      border: 1px solid #006400;
    }
  </style>

  <body>
  <?php
include("header.php");
?>

  <!-- ##### Breadcrumb Area Start ##### -->
  <div class="breadcrumb-area">
        <!-- Top Breadcrumb Area -->
        <div class="top-breadcrumb-area bg-img bg-overlay d-flex align-items-center justify-content-center" style="background-image: url(img/bg-img/24.jpg);">
           <h2>Categories</h2>
        </div>
<div class="container">
<div class="row">
          <!-- Single Product Area -->
          <?php
        if (isset($_GET['category'])) {
    $categoryId = $_GET['category'];

    $sql2 = "SELECT * FROM `plantsinfo` WHERE `categoryid` = '$categoryId'";
    $result2 = mysqli_query($connectiondb, $sql2);
    while ($row = mysqli_fetch_assoc($result2)) {
    ?>
         <div class="col-12 col-sm-6 col-lg-3">
         <form action="" method="post">
            <div
              class="single-product-area mb-50 wow fadeInUp"
              data-wow-delay="100ms">
              <!-- Product Image -->
              <div class="product-img">
                <a href="plants_details.php"><img src="img/bg-img/9.jpg" alt="image"/></a>
                <!-- Product Tag -->
                <!-- <div class="product-tag">
                  <a href="#"></a>
                </div> -->
                <div class="product-meta d-flex">
                  <a href="#" class="wishlist-btn"
                    ><i class="icon_heart_alt"></i
                  ></a>
                  <a href="cart.html" class="add-to-cart-btn">Add to cart</a>
                  <a href="#" class="compare-btn"
                    ><i class="arrow_left-right_alt"></i
                  ></a>
                </div>
              </div>
              <!-- Product Info -->
              <div class="product-info mt-15 text-center">
                <a href="plants_details.php?category=<?php echo $row["categoryid"];?>">
                  <p><?php echo $row["plantname"];?></p>
                </a>
                <h6>Rs. <?php echo $row["price"];?></h6>
              </div>
            </div>
          </div>
         </form>
          <?php } } ?>
  </div>
</div>


   

   

    

    

   

    

    

    

  

      <?php
include("footer.php");
?>
 <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
      crossorigin="anonymous"
    ></script>
    <!-- ##### All Javascript Files ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="js/plugins/plugins.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>
  </body>
</html>
