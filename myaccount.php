<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Plant Nest &amp; </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.15.0/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="style.css">

</head>

<body>
<?php
include("header.php");
?>
    <!-- ##### Breadcrumb Area Start ##### -->
    <div class="breadcrumb-area">
        <!-- Top Breadcrumb Area -->
        <div class="top-breadcrumb-area bg-img bg-overlay d-flex align-items-center justify-content-center" style="background-image: url(img/bg-img/24.jpg);">
            <h2>My Account</h2>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i> Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">My Account</li>
                            <li class="mx-auto active"><a class="link-success" href="accountsetting.php?u_id=<?php echo $_SESSION["user_id"]; ?>">Edit Profile</a></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Breadcrumb Area End ##### -->

   
<div class="container">

    <div class="row">
        
        <div class="col-md-8">
        <h4>Order history</h4>
        <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Order</th>
      <th scope="col">Date</th>
      <th scope="col">Total Price</th>
    </tr>
  </thead>
  <tbody>
 
    <tr>
      <th scope="row">1</th>
      <td>Order Number</td>
      <td>1-1-2023</td>
      <td>8770</td>
    </tr>
  </tbody>
</table>
        </div>
  
        <!-- d-flex justify-content-center -->
<div class="col-md-4  ">
<h4>Customer Info</h4>
 <div class="container">
 <p><strong>  <?php echo $_SESSION["user_name"];?></strong></p>
  <p><strong>  <?php echo $_SESSION["user_email"];?></strong></p>
  <p><strong>  <?php echo $_SESSION["user_address"];?></strong></p>
  <p><strong>  <?php echo $_SESSION["user_contactNo"];?></strong></p>
  <p><strong>  <?php echo $_SESSION["user_zipCode"];?></strong></p>
 </div>
</div>
</div>
</div>















<?php
include("footer.php");
?>

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