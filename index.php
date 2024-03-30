<?php 
   session_start();

   include("php/config.php");
   if(!isset($_SESSION['valid'])){
    header("Location: index.html");
   }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home - TheTimeZone</title>
    
    <link rel="stylesheet"href="css/style.css">

    <link rel="stylesheet"href="css/header.css">
    <link rel="stylesheet"href="css/slider.css">
    <link rel="stylesheet"href="css/index.css">
    <link rel="stylesheet"href="css/footer.css">

    <!-- Fontawesome Icons -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>

    <!-- jquery plugins for a slider -->

      <link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
      <link href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css" rel="stylesheet" type="text/css">
  </head>

    
    
  <body>
    <!-- header starts here -->
    <header>
      <div class="container">
        <div class="header-first">
          <div class="hamburger-menu" id="hamburgerMenu">
            <div class="bar"></div>
            <div class="bar"></div>
            <div class="bar"></div>
          </div>
  
          <div class="logo">
            <a href="index.html"><h1>TheTimeZone</h1></a>
          </div>
          <div class="search-bar">
            <input type="text" placeholder="Search..">
            <i class="fa-solid fa-magnifying-glass search-icon"></i>
          </div>
          <div class="user-login">
            <?php 
                
                $id = $_SESSION['id'];
                $query = mysqli_query($con,"SELECT*FROM users WHERE Id=$id");

                while($result = mysqli_fetch_assoc($query)){
                    $res_Fname = $result['Firstname'];
                    $res_Lname = $result['Lastname'];
                    $res_Email = $result['Email'];
                    $res_Contact = $result['Contact'];
                    $res_dob = $result['DOB'];
                    $res_address = $result['Address'];
                    $res_gender = $result['Gender'];
                    $res_id = $result['Id'];
                }
                
                ?>
            <ul>
              <li>
                <a href="php/userprofile.php">
                  <span id="#show-option" class="username">Welcome <?php echo $res_Fname ?></span>
                  <i class="fa-solid fa-user" title="Profile/Login"></i
                ></a>
              </li>
              <li>
                <a href="#"
                  ><i
                    id="#show-option"
                    class="fa-solid fa-bag-shopping shopCart"
                    title="Your Cart"
                  >
                    <span class="cartItem"></span></i
                ></a>
              </li>
              <?php 
                    if(isset($_SESSION['valid'])) {
                ?>
                        <li>
                            <a href="php/logout.php"><i class="fa-solid fa-right-from-bracket" title="Logout"></i></a>
                        </li>
                <?php
                    }
                ?>
            </ul>
  
         
          </div>
        </div>
      </div>
  
      <div class="header-second">
        <nav>
          <div class="container nav-bar">
            <ul>
              <li>
                <a href="html/products.html">Products</a>
              </li>
              <li>
                <a href="html/aboutUs.html">About us</a>
              </li>
              <li>
                <a href="html/blog.html">Blogs</a>
              </li>
              <li>
                Products
              </li>
            </ul>
          </div>
        </nav>
      </div>
    </header>
    <!-- header ends here -->
    <!-- Main Content starts here-->
    <main>
        <!-- slider Section -->
        <div class="container">
          <!-- jquery plugin used here for a slider.
             link : https://www.jqueryscript.net/slider/Elegant-Banner-Slider-Carousel-Plugin-jQuery-kaiBanner.html-->
        <div class="kai_banner_container clearfix">
          <div class="kai_banner_body clearfix">
            <a href="html/products.html"><img src="media/img/slider1.jpeg" class="responsiveImage"></a>
            <a href="html/products.html"><img src="media/img/slider2.jpeg" class="responsiveImage"></a>
            <a href="html/products.html"><img src="media/img/slider3.jpeg" class="responsiveImage"></a>
            <a href="html/products.html"><img src="media/img/slider4.jpeg" class="responsiveImage"></a>
          </div>
          
          <div class="kai_banner_prevbtn side_btn"></div>
          <div class="kai_banner_nextbtn side_btn"></div>
        </div>
      </div>
      <div class="container">
       

        <section class="banner-2">
          <div class="banner-2Image">
            <picture>
              <img src="media/img/banner1.jpeg" class="responsiveImage">
            </picture>
          </div>
          <div class="banner-2Content">
            <h2>INDULGE IN OUR <span>PREMIUM GOLD AND PLATINUM WATCHES</span></h2>
            <p>
              And receive a complimentary<br>
              Breitling watch winder with the purchase of selected<br>
              gold or platinum watches.
            </p>
          </div>
          <div class="main-button">
            <a href="html/products.html"> DISCOVER </a>
          </div>
            
        
        </section>

        <section class="banner-3">
          <div class="banner-3Image">
            <picture>
              <img src="media/img/banner2.jpeg" class="responsiveImage">
            </picture>
          </div>
          <div class="banner-3Content">
            <h2>CHRONOMAT36 <span>DAVID BECKHAM</span></h2>
          </div>
          <div class="main-button">
            <a href="html/products.html"> DISCOVER </a>
          </div>
            
        </section>
        
        <div class="banner-1">
       
          <img src="media/img/rolex2.jpeg" class="responsiveImage image1">
       
          
       
          <img src="media/img/rolex1.jpeg" class="responsiveImage image2">
        </div>
          <div class="feature-product">
            <h2>Featured Products</h2>
          </div>
          <section class="banner-4">
            <div class="products" style="display: contents;">
              <!-- Products loads here dynamically from js -->
              
            </div>
          </section>
       
      </div>
    </main>
    <!-- Main Content ends here-->
    <!-- Footer starts here-->
    <footer>
      <section class="footer-links">
        <div class="location-footer">
          <h2>Location</h2>
          <ul>
            <li><a href="#">USA</a></li>
            <li><a href="#">CANADA</a></li>
            <li><a href="#">NEPAL</a></li>
            <li></li>
          </ul>
        </div>

        <div class="shop-footer">
          <h2>SHOP</h2>
          <ul>
            <li><a href="#">Collections</a></li>
            <li><a href="#">Men</a></li>
            <li><a href="#">Women</a></li>
            <li><a href="#">New</a></li>
          </ul>
        </div>

        <div class="customer-footer">
          <h2>CUSTOMER SERVICE</h2>
          <ul>
            <li><a href="#">My Account</a></li>
            <li><a href="#">Shipping</a></li>
            <li><a href="#">Returns</a></li>
            <li><a href="#">FAQ</a></li>
            <li><a href="#">Contact Us</a></li>
          </ul>
        </div>

        <div class="social-link">
          <ul>
            <li>
              <a href="#"><i class="fa-brands fa-facebook"></i></a>
            </li>
            <li>
              <a href="#"><i class="fa-brands fa-twitter"></i></a>
            </li>
            <li>
              <a href="#"><i class="fa-brands fa-instagram"></i></a>
            </li>
            <li>
              <a href="#"><i class="fa-brands fa-youtube"></i></a>
            </li>
          </ul>
        </div>
      </section>
    </footer>
    <!-- Footer ends here-->
  </body>
</html>
<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
<script type="text/javascript" src="lib/jquery.kaibanner.js"></script>
<script type="text/javascript" src="js/slider.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<script type="module" src="js/index.js"></script>

