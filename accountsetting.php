<?php ob_start(); ?>
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

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <?php
  include("header.php");
  
    if(isset($_GET["error"]) && $_GET["error"] === "UserDeleted"){
        echo "<script>alert('Your Account Has been deleted')</script>";
    }

  ?>

    <!-- ##### Breadcrumb Area Start ##### -->
    <div class="breadcrumb-area">
        <!-- Top Breadcrumb Area -->
        <div class="top-breadcrumb-area bg-img bg-overlay d-flex align-items-center justify-content-center" style="background-image: url(img/bg-img/24.jpg);">
            <h2></i>Edit profile</h2>
        </div>
        <?php     
                             
                             $u_id = $_GET["u_id"];
                             
                             $query1 = "SELECT * FROM `users_approved` WHERE `user_id` ='$u_id'";
                             
                             $result1 = mysqli_query($connectiondb , $query1);
                             
                             $row = mysqli_fetch_row($result1);
                             if(isset($_POST["update"])){
                                 $name = $_POST["name"];
                                 $email = $_POST["email"];
                                 $password = $_POST["password"];
                                 $address = $_POST["address"];
                                 $contactno = $_POST["contactno"];
                                 $zipcode = $_POST["zipcode"];
                                 $query2 = "UPDATE `users_approved` SET `user_name`='$name',`user_email`='$email',`user_password`='$password',`user_address`='$address',`user_contactNo`='$contactno',`user_zipCode`='$zipcode' WHERE `user_id` ='$u_id'";
                                 $result2 = mysqli_query($connectiondb,$query2);
                                 if($result2)
                                 {
                                     header("location:myaccount.php");
                                 }
                                
                                 
                             }
                             if(isset($_POST["delete"])){
                             $query3 = "DELETE FROM `users_approved` WHERE `user_id` ='$u_id'";
                             $result3 = mysqli_query($connectiondb,$query3);
                             if($result3){
                                 header("location:login.php?error=UserDeleted");
                                 exit;
                             }
                             else{
                                 echo "data cannot be deleted";
                             
                             }
                             }
                             
                             ?>

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i> Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Account Settings</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Breadcrumb Area End ##### -->

    <!-- ##### Contact Area Start ##### -->
    <section class="contact-area">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-12 col-lg-5 mx-auto">
                    <!-- Section Heading -->
                    <div class="section-heading">
                        <h2>EDIT YOUR PROFILE</h2>
                    </div>
                    
                    <!-- Contact Form Area -->
                    <div class="contact-form-area mb-100">
                        <form action="" method="post">
                            <div class="row">
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="name" value="<?php echo $row['1'];?>" class="form-control" id="name"  placeholder="Your Name">
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <input type="email" name="email" value="<?php echo $row['2'];?>" class="form-control" id="email" placeholder="Your Email">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <input type="password" name="password" value="<?php echo $row['3'];?>" class="form-control" id="subject" placeholder="Password">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <input type="text" name="address" value="<?php echo $row['4'];?>" class="form-control" id="address" placeholder="Address">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <input type="number" name="contactno" value="<?php echo $row['5'];?>"  class="form-control" id="number" placeholder="Contact No">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <input type="number" name="zipcode" value="<?php echo $row['6'];?>" class="form-control" id="code" placeholder="Zipcode">
                                    </div>
                                </div>
                                
                                <div class="col-6">
                                    <button type="submit" name="update" class="btn alazea-btn mt-15">Save Changes</button>
                                </div>
                                <div class="col-6">
                                    <button type="submit" name="delete" class="btn alazea-btn mt-15">Delete  My Account</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

               
    </section>
    <!-- ##### Contact Area End ##### -->

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