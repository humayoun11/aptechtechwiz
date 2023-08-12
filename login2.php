<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="toogle.css">
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="style.css">

</head>
<style>
  @import url('https://fonts.googleapis.com/css2?family=Oswald:wght@400;600&family=Poppins:wght@500;700;900&display=swap');
  body{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: Poppins;
  }
  
  button {
  /* font-family: ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace; */
  font-size: 17px;
  padding: 1em 2.7em;
  font-weight: 500;
  background: #70c745;
  color: white;
  border: none;
  position: relative;
  overflow: hidden;
  border-radius: 0.6em;
}

.gradient {
  position: absolute;
  width: 100%;
  height: 100%;
  left: 0;
  top: 0;
  border-radius: 0.6em;
  margin-top: -0.25em;
  background-image: linear-gradient(rgba(0, 0, 0, 0), rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.3));
}

.label {
  position: relative;
  top: -1px;
}

.transition {
  transition-timing-function: cubic-bezier(0, 0, 0.2, 1);
  transition-duration: 500ms;
  background-color: rgba(109, 235, 104, 0.952);
  border-radius: 9999px;
  width: 0;
  height: 0;
  position: absolute;
  left: 50%;
  top: 50%;
  transform: translate(-50%, -50%);
}

button:hover .transition {
  width: 14em;
  height: 14em;
}

button:active {
  transform: scale(0.97);
}
   
 
  .asd{
    text-decoration: none;
  }
  @media only screen and (max-width: 600px) {
  .loginn {
    display: none;
  }
}
</style>
<body>
<!-- Preloader -->
<div class="preloader d-flex align-items-center justify-content-center">
  <div class="preloader-circle"></div>
  <div class="preloader-img">
      <img src="img/core-img/leaf.png" alt="">
  </div>
</div>

<!-- ##### Header Area Start ##### -->
<header class="header-area">

  <!-- ***** Top Header Area ***** -->
  <div class="top-header-area">
      <div class="container">
          <div class="row">
              <div class="col-12">
                  <div class="top-header-content d-flex align-items-center justify-content-between">
                      <!-- Top Header Content -->
                      <div class="top-header-meta">
                          <a href="#" data-toggle="tooltip" data-placement="bottom" title="infodeercreative@gmail.com"><i class="fa fa-envelope-o" aria-hidden="true"></i> <span>Email: infodeercreative@gmail.com</span></a>
                          <a href="#" data-toggle="tooltip" data-placement="bottom" title="+1 234 122 122"><i class="fa fa-phone" aria-hidden="true"></i> <span>Call Us: +1 234 122 122</span></a>
                      </div>

                      <!-- Top Header Content -->
                      <div class="top-header-meta d-flex">
                          <!-- Language Dropdown -->
                          <div class="language-dropdown">
                              <div class="dropdown">
                                  <button class="btn btn-secondary dropdown-toggle mr-30" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Language</button>
                                  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                      <a class="dropdown-item" href="#">USA</a>
                                      <a class="dropdown-item" href="#">UK</a>
                                      <a class="dropdown-item" href="#">Bangla</a>
                                      <a class="dropdown-item" href="#">Hindi</a>
                                      <a class="dropdown-item" href="#">Spanish</a>
                                      <a class="dropdown-item" href="#">Latin</a>
                                  </div>
                              </div>
                          </div>
                         
                          <div class="language-dropdown">
                              <div class="dropdown">
                                  <button class="btn btn-secondary dropdown-toggle mr-30" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user" style="color: #70c745;" aria-hidden="true"></i> <span class="account">Login / signup</span></button>
                             
                                  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                      <a class="dropdown-item" href="#">Sign up</a>
                                      <a class="dropdown-item" href="#">Login</a>
                                      
                                  </div>
                              </div>
                          </div>
                          <!-- Login
                          <div class="login">
                              <a href="#"><i class="fa fa-user" aria-hidden="true"></i> <span>Login / signup</span></a>
                          </div> -->
                          <!-- Cart -->
                          <div class="cart">
                              <a href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i> <span>Cart <span class="cart-quantity">(1)</span></span></a>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>

  <!-- ***** Navbar Area ***** -->
  <div class="alazea-main-menu">
      <div class="classy-nav-container breakpoint-off">
          <div class="container">
              <!-- Menu -->
              <nav class="classy-navbar justify-content-between" id="alazeaNav">

                  <!-- Nav Brand -->
                  <a href="index.html" class="nav-brand"><img src="img/core-img/logo.png" alt=""></a>

                  <!-- Navbar Toggler -->
                  <div class="classy-navbar-toggler">
                      <span class="navbarToggler"><span></span><span></span><span></span></span>
                  </div>

                  <!-- Menu -->
                  <div class="classy-menu">

                      <!-- Close Button -->
                      <div class="classycloseIcon">
                          <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                      </div>

                      <!-- Navbar Start -->
                      <div class="classynav">
                          <ul>
                              <li><a href="index.html">Home</a></li>
                              <li><a href="about.html">About</a></li>
                              <li><a href="#">Pages</a>
                                  <ul class="dropdown">
                                      <li><a href="index.html">Home</a></li>
                                      <li><a href="about.html">About</a></li>
                                      <li><a href="shop.html">Shop</a>
                                          <ul class="dropdown">
                                              <li><a href="shop.html">Shop</a></li>
                                              <li><a href="shop-details.html">Shop Details</a></li>
                                              <li><a href="cart.html">Shopping Cart</a></li>
                                              <li><a href="checkout.html">Checkout</a></li>
                                          </ul>
                                      </li>
                                      <li><a href="portfolio.html">Portfolio</a>
                                          <ul class="dropdown">
                                              <li><a href="portfolio.html">Portfolio</a></li>
                                              <li><a href="single-portfolio.html">Portfolio Details</a></li>
                                          </ul>
                                      </li>
                                      <li><a href="blog.html">Blog</a>
                                          <ul class="dropdown">
                                              <li><a href="blog.html">Blog</a></li>
                                              <li><a href="single-post.html">Blog Details</a></li>
                                          </ul>
                                      </li>
                                      <li><a href="contact.html">Contact</a></li>
                                  </ul>
                              </li>
                              <li><a href="shop.html">Shop</a></li>
                              <li><a href="portfolio.html">Portfolio</a></li>
                              <li><a href="contact.html">Contact</a></li>
                          </ul>

                          <!-- Search Icon -->
                          <div id="searchIcon">
                              <i class="fa fa-search" aria-hidden="true"></i>
                          </div>

                      </div>
                      <!-- Navbar End -->
                  </div>
              </nav>
    <div class="container">
    <br><br><br>
<section class="vh-100">
  <div class="container-fluid h-custom">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-md-9 col-lg-6 col-xl-5">
        <img class="loginn" width="100%" src="undraw_Unlock_re_a558.png"
          class="img-fluid" alt="Sample image">
      
      </div>
      <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
        <form>
        

          <!-- Name input -->
          <div class="form-outline mb-4">
              <label class="form-label" for="form3Example3">User Name</label>
            <input type="text"  id="username" class="form-control form-control-lg"
              placeholder="Enter your Name"  required>
          </div>
        

          <!-- Password input -->
          <div class="form-outline mb-3">
              <label class="form-label" for="form3Example4">Password</label>
            <input type="password"  id="userpassword" class="form-control form-control-lg"
              placeholder="Enter password"  required>
          </div>

          <!-- <div class="d-flex justify-content-between align-items-center"> -->
            

          <div class="text-center text-lg-start mt-4 pt-2">
        
              <center>
                <button>
                  <span class="transition"></span>
                  <span class="gradient"></span>
                  <span class="label">Login</span>
                </button>
              </center>
            <p class="small fw-bold mt-2 pt-1 mb-0 text-center">Don't have an account? <a href="signup.html"
                class="link-danger">Sign up</a></p>
          </div>

        </form>
      </div>
    </div>
  </div>
  <!--  -->
    <!-- Copyright -->

    
</section>
</div>
 <!-- ##### Footer Area Start ##### -->
 <footer class="footer-area bg-img" style="background-image: url(img/bg-img/3.jpg);">
  <!-- Main Footer Area -->
  <div class="main-footer-area">
      <div class="container">
          <div class="row">

              <!-- Single Footer Widget -->
              <div class="col-12 col-sm-6 col-lg-3">
                  <div class="single-footer-widget">
                      <div class="footer-logo mb-30">
                          <a href="#"><img src="img/core-img/logo.png" alt=""></a>
                      </div>
                      <p>Lorem ipsum dolor sit samet, consectetur adipiscing elit. India situs atione mantor</p>
                      <div class="social-info">
                          <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                          <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                          <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                          <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                          <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                      </div>
                  </div>
              </div>

              <!-- Single Footer Widget -->
              <div class="col-12 col-sm-6 col-lg-3">
                  <div class="single-footer-widget">
                      <div class="widget-title">
                          <h5>QUICK LINK</h5>
                      </div>
                      <nav class="widget-nav">
                          <ul>
                              <li><a href="#">Purchase</a></li>
                              <li><a href="#">FAQs</a></li>
                              <li><a href="#">Payment</a></li>
                              <li><a href="#">News</a></li>
                              <li><a href="#">Return</a></li>
                              <li><a href="#">Advertise</a></li>
                              <li><a href="#">Shipping</a></li>
                              <li><a href="#">Career</a></li>
                              <li><a href="#">Orders</a></li>
                              <li><a href="#">Policities</a></li>
                          </ul>
                      </nav>
                  </div>
              </div>

              <!-- Single Footer Widget -->
              <div class="col-12 col-sm-6 col-lg-3">
                  <div class="single-footer-widget">
                      <div class="widget-title">
                          <h5>BEST SELLER</h5>
                      </div>

                      <!-- Single Best Seller Products -->
                      <div class="single-best-seller-product d-flex align-items-center">
                          <div class="product-thumbnail">
                              <a href="shop-details.html"><img src="img/bg-img/4.jpg" alt=""></a>
                          </div>
                          <div class="product-info">
                              <a href="shop-details.html">Cactus Flower</a>
                              <p>$10.99</p>
                          </div>
                      </div>

                      <!-- Single Best Seller Products -->
                      <div class="single-best-seller-product d-flex align-items-center">
                          <div class="product-thumbnail">
                              <a href="shop-details.html"><img src="img/bg-img/5.jpg" alt=""></a>
                          </div>
                          <div class="product-info">
                              <a href="shop-details.html">Tulip Flower</a>
                              <p>$11.99</p>
                          </div>
                      </div>
                  </div>
              </div>

              <!-- Single Footer Widget -->
              <div class="col-12 col-sm-6 col-lg-3">
                  <div class="single-footer-widget">
                      <div class="widget-title">
                          <h5>CONTACT</h5>
                      </div>

                      <div class="contact-information">
                          <p><span>Address:</span> 505 Silk Rd, New York</p>
                          <p><span>Phone:</span> +1 234 122 122</p>
                          <p><span>Email:</span> info.deercreative@gmail.com</p>
                          <p><span>Open hours:</span> Mon - Sun: 8 AM to 9 PM</p>
                          <p><span>Happy hours:</span> Sat: 2 PM to 4 PM</p>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>

  <!-- Footer Bottom Area -->
  <div class="footer-bottom-area">
      <div class="container">
          <div class="row">
              <div class="col-12">
                  <div class="border-line"></div>
              </div>
              <!-- Copywrite Text -->
              <div class="col-12 col-md-6">
                  <div class="copywrite-text">
                      <p>&copy; <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
</p>
                  </div>
              </div>
              <!-- Footer Nav -->
              <div class="col-12 col-md-6">
                  <div class="footer-nav">
                      <nav>
                          <ul>
                              <li><a href="#">Home</a></li>
                              <li><a href="#">About</a></li>
                              <li><a href="#">Service</a></li>
                              <li><a href="#">Portfolio</a></li>
                              <li><a href="#">Blog</a></li>
                              <li><a href="#">Contact</a></li>
                          </ul>
                      </nav>
                  </div>
              </div>
          </div>
      </div>
  </div>
</footer>
<!-- ##### Footer Area End ##### -->

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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script src="index.js"></script>
    <script src="java.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  </body>
</html>