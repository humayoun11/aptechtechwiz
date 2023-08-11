<?php
session_start();
include("connectdb.php");
?>
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
                      <a class="dropdown-item" href="signup.php">Sign up</a>
                        <a class="dropdown-item" href="login.php">Login</a>
                      <!-- <?php
                        if(isset($_SESSION["user_name"])){ ?>
                          <a class="dropdown-item" href="myaccount.php">My Account</a>
                          <a class="dropdown-item" href="logout.php">Logout</a>

                      <?php } else{ ?>  


                        <a class="dropdown-item" href="signup.php">Sign up</a>
                        <a class="dropdown-item" href="login.php">Login</a>
                        <?php } ?> -->
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
              <a href="index.php" class="nav-brand"
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
<style>
  /* styles.css */
.navbar {
    overflow: hidden;
    background-color: #333;
}

.navbar ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
}

.navbar li {
    float: left;
}

.navbar li a, .dropbtn {
    display: inline-block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: green;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-content a:hover {
  background-color: #05472A;
}

.dropdown:hover .dropdown-content {
    display: block;
}

</style>
                <!-- Navbar Start -->
                <div class="classynav">
                  <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="about.php">About</a></li>
                    <?php
                    $sql = "SELECT * FROM category";
$result = mysqli_query($connectiondb, $sql);
echo '<li class="dropdown">';
echo '<a href="javascript:void(0)" class="dropbtn">Categories</a>';
echo '<div class="dropdown-content">';
while ($row = mysqli_fetch_assoc($result)) {
  echo '<a href="plants.php?category=' . $row['categoryid'] . '">' . $row['categoryname'] . '</a>';
}
echo '</div>';
echo '</li>';
?>
 <li><a href="accessories.php">Accessories</a></li>
                    <!-- <li>
                      <a href="#">Category</a>
                      <ul class="dropdown">
                        <li><a href="Flowering.php">Flowering</a></li>
                        <li><a href="Non-flowering.php"> Non-flowering</a></li>
                        <li><a href="Indoor.php">Indoor</a></li>
                        <li><a href="Outdoor.php">Outdoor</a></li>
                        <li><a href="Succulents.php">Succulents</a></li>
                        <li>
                          <a href="Medicinalandsoon.php"
                            >Aromatic
                          </a>
                        </li>
                        <li>
                          <a href="Medicinalandsoon.php"
                            >Climbing
                          </a>
                        </li>
                        <li>
                          <a href="Medicinalandsoon.php"
                            >Evergreen
                          </a>
                        </li>
                        <li>
                          <a href="Medicinalandsoon.php"
                            >Water 
                          </a>
                        </li>
                        <li>
                          <a href="Medicinalandsoon.php"
                            >Edible
                          </a>
                        </li>
                      </ul>
                    </li> -->
                    <!-- <li><a href="shop.php">Shop</a></li> -->
                    <!-- <li><a href="portfolio.php">Portfolio</a></li> -->
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
