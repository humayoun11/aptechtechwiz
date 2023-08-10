<?php
require 'connectdb.php';
?>





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
    .btn {
      background-color: #FFFF00 ;
      border: none;
      border-radius: 20px;
      color: white;
      width: 200px;
      height: 50px;
      font-family: "";
      font-size: 20px;
    }
    .btnn:hover {
      background: linear-gradient(
        rgba(142, 50, 234, 0.7),
        rgba(246, 6, 246, 0.6)
      );
    }
    .card img:hover {
      transform: scale(1.1);
      transition: 0.2s ease-in-out;
    }
    .imagee img {
      transition: 0.5s ease-in-out;
    }
    .imagee img:hover {
      transform: translateY(30px);
      transition: 0.5s ease-in-out;
    }
    .card {
      width: 290px;
      height: 100%;
      text-align: center;
      padding: 10px 20px;
      font-family: sans-serif;
      border-radius: 5px;
      background-color: #f6f6f6;
      box-shadow: 0 0 8px #14d043;
    }
    .card-title {
      font-weight: 800;
      font-size: 20px;
    }
    .btn{
      color: white;
      background-color: #006400;
      font-family: sans-serif;
      height: 40px;
    }
    /* .card-display{
        display:  !important;
    } */
  </style>

  <body>
    <!-- Preloader -->
    <div class="preloader d-flex align-items-center justify-content-center">
      <div class="preloader-circle"></div>
      <div class="preloader-img">
        <img src="img/core-img/leaf.png" alt="" />
      </div>
    </div>

    <!-- ##### Header Area Start ##### -->
    <header class="header-area">
      <!-- ***** Top Header Area ***** -->
      <div class="top-header-area">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <div
                class="top-header-content d-flex align-items-center justify-content-between"
              >
                <!-- Top Header Content -->
                <div class="top-header-meta">
                  <a
                    href="#"
                    data-toggle="tooltip"
                    data-placement="bottom"
                    title="infodeercreative@gmail.com"
                    ><i class="fa fa-envelope-o" aria-hidden="true"></i>
                    <span>Email: infodeercreative@gmail.com</span></a
                  >
                  <a
                    href="#"
                    data-toggle="tooltip"
                    data-placement="bottom"
                    title="+1 234 122 122"
                    ><i class="fa fa-phone" aria-hidden="true"></i>
                    <span>Call Us: +1 234 122 122</span></a
                  >
                </div>

                <!-- Top Header Content -->
                <div class="top-header-meta d-flex">
                  <!-- Language Dropdown -->
                  <div class="language-dropdown">
                    <div class="dropdown">
                      <button
                        class="btn btn-secondary dropdown-toggle mr-30"
                        type="button"
                        id="dropdownMenuButton"
                        data-toggle="dropdown"
                        aria-haspopup="true"
                        aria-expanded="false"
                      >
                        Language
                      </button>
                      <div
                        class="dropdown-menu"
                        aria-labelledby="dropdownMenuButton"
                      >
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
                      <button
                        class="btn btn-secondary dropdown-toggle mr-30"
                        type="button"
                        id="dropdownMenuButton"
                        data-toggle="dropdown"
                        aria-haspopup="true"
                        aria-expanded="false"
                      >
                        <i
                          class="fa fa-user"
                          style="color: #70c745"
                          aria-hidden="true"
                        ></i>
                        <span class="account">Login / signup</span>
                      </button>

                      <div
                        class="dropdown-menu"
                        aria-labelledby="dropdownMenuButton"
                      >
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
                  <!-- <div class="cart">
                                    <a href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i> <span>Cart <span class="cart-quantity">(1)</span></span></a>
                                </div> -->
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
              <a href="index.html" class="nav-brand"
                ><img src="img/core-img/logo.png" alt=""
              /></a>

              <!-- Navbar Toggler -->
              <div class="classy-navbar-toggler">
                <span class="navbarToggler"
                  ><span></span><span></span><span></span
                ></span>
              </div>

              <!-- Menu -->
              <div class="classy-menu">
                <!-- Close Button -->
                <div class="classycloseIcon">
                  <div class="cross-wrap">
                    <span class="top"></span><span class="bottom"></span>
                  </div>
                </div>

                <!-- Navbar Start -->
                <div class="classynav">
                  <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="about.php">About</a></li>
                    <li>
                      <a href="#">Category</a>
                      <ul class="dropdown">
                        <li><a href="Flowering.php">Flowering</a></li>
                        <li><a href="Non-flowering.php"> Non-flowering</a></li>
                        <li><a href="Indoor.php">Indoor</a></li>
                        <li><a href="Outdoor.php">Outdoor</a></li>
                        <li><a href="Succulents.php">Succulents</a></li>
                        <li>
                          <a href="Medicinalandsoon.php"
                            >Medicinal and so on
                          </a>
                        </li>
                      </ul>
                    </li>
                    <!-- <li><a href="shop.html">Shop</a></li> -->
                    <!-- <li><a href="portfolio.html">Portfolio</a></li> -->
                    <li><a href="contact.php">Contact</a></li>
                  </ul>

                  <!-- Search Icon -->
                  <div id="searchIcon">
                    <i class="fa fa-search" aria-hidden="true"></i>
                  </div>
                </div>
                <!-- Navbar End -->
              </div>
            </nav>

            <!-- Search Form -->
            <div class="search-form">
              <form action="#" method="get">
                <input
                  type="search"
                  name="search"
                  id="search"
                  placeholder="Type keywords &amp; press enter..."
                />
                <button type="submit" class="d-none"></button>
              </form>
              <!-- Close Icon -->
              <div class="closeIcon">
                <i class="fa fa-times" aria-hidden="true"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>
    <!-- ##### Header Area End ##### -->

    <!-- ##### Hero Area Start ##### -->
    <section class="hero-area">
      <div class="hero-post-slides owl-carousel">
        <!-- Single Hero Post -->
        <div class="single-hero-post bg-overlay">
          <!-- Post Image -->
          <div
            class="slide-img bg-img"
            style="background-image: url(img/bg-img/1.jpg)"
          ></div>
          <div class="container h-100">
            <div class="row h-100 align-items-center">
              <div class="col-12">
                <!-- Post Content -->
                <div class="hero-slides-content text-center">
                  <h2>
                    Plants exist in the weather and light rays that surround
                    them
                  </h2>
                  <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Curabitur pellentesque ante nec ipsum iaculis, ac iaculis
                    ipsum porttitor. Vivamus cursus nisl lectus, id mattis nisl
                    lobortis eu. Duis diam augue, dapibus ut dolor at, mattis
                    maximus dolor.
                  </p>
                  <div class="welcome-btn-group">
                    <a href="#" class="btn alazea-btn mr-30">GET STARTED</a>
                    <a href="#" class="btn alazea-btn active">CONTACT US</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Single Hero Post -->
        <div class="single-hero-post bg-overlay">
          <!-- Post Image -->
          <div
            class="slide-img bg-img"
            style="background-image: url(img/bg-img/2.jpg)"
          ></div>
          <div class="container h-100">
            <div class="row h-100 align-items-center">
              <div class="col-12">
                <!-- Post Content -->
                <div class="hero-slides-content text-center">
                  <h2>
                    Plants exist in the weather and light rays that surround
                    them
                  </h2>
                  <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Curabitur pellentesque ante nec ipsum iaculis, ac iaculis
                    ipsum porttitor. Vivamus cursus nisl lectus, id mattis nisl
                    lobortis eu. Duis diam augue, dapibus ut dolor at, mattis
                    maximus dolor.
                  </p>
                  <div class="welcome-btn-group">
                    <a href="#" class="btn alazea-btn mr-30">GET STARTED</a>
                    <a href="#" class="btn alazea-btn active">CONTACT US</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- ##### Hero Area End ##### -->

<div class="container ">
    <div class="row">
        <div class="col-md-3">
            

  
  </div>
 </div>
</div>
    
  

   

   

    

    

   

    

    

    

    <!-- ##### Footer Area Start ##### -->
    <footer
      class="footer-area bg-img"
      style="background-image: url(img/bg-img/3.jpg)"
    >
      <!-- Main Footer Area -->
      <div class="main-footer-area">
        <div class="container">
          <div class="row">
            <!-- Single Footer Widget -->
            <div class="col-12 col-sm-6 col-lg-3">
              <div class="single-footer-widget">
                <div class="footer-logo mb-30">
                  <a href="#"><img src="img/core-img/logo.png" alt="" /></a>
                </div>
                <p>
                  Lorem ipsum dolor sit samet, consectetur adipiscing elit.
                  India situs atione mantor
                </p>
                <div class="social-info">
                  <a href="#"
                    ><i class="fa fa-facebook" aria-hidden="true"></i
                  ></a>
                  <a href="#"
                    ><i class="fa fa-twitter" aria-hidden="true"></i
                  ></a>
                  <a href="#"
                    ><i class="fa fa-google-plus" aria-hidden="true"></i
                  ></a>
                  <a href="#"
                    ><i class="fa fa-instagram" aria-hidden="true"></i
                  ></a>
                  <a href="#"
                    ><i class="fa fa-linkedin" aria-hidden="true"></i
                  ></a>
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
                <div
                  class="single-best-seller-product d-flex align-items-center"
                >
                  <div class="product-thumbnail">
                    <a href="shop-details.html"
                      ><img src="img/bg-img/4.jpg" alt=""
                    /></a>
                  </div>
                  <div class="product-info">
                    <a href="shop-details.html">Cactus Flower</a>
                    <p>$10.99</p>
                  </div>
                </div>

                <!-- Single Best Seller Products -->
                <div
                  class="single-best-seller-product d-flex align-items-center"
                >
                  <div class="product-thumbnail">
                    <a href="shop-details.html"
                      ><img src="img/bg-img/5.jpg" alt=""
                    /></a>
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
                <p>
                  &copy;
                  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                  Copyright &copy;
                  <script>
                    document.write(new Date().getFullYear());
                  </script>
                  All rights reserved | This template is made with
                  <i class="fa fa-heart-o" aria-hidden="true"></i> by
                  <a href="https://colorlib.com" target="_blank">Colorlib</a>
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
  </body>
</html>
