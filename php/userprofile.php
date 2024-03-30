<?php 
   session_start();

   include("../php/config.php");
   if(!isset($_SESSION['valid'])){
    header("Location: index.html");
   }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"href="../css/style.css">
    <link rel="stylesheet"href="../css/header.css">
    <link rel="stylesheet"href="../css/footer.css">
    <link rel="stylesheet" href="../css/form.css">

     <!-- Fontawesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
    
    <title>Home</title>
</head>
<body>
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
    <div class="nav">
        <header>
        <div class="container">
            <div class="header-first">
            <div class="hamburger-menu" id="hamburgerMenu">
                <div class="bar"></div>
                <div class="bar"></div>
                <div class="bar"></div>
            </div>
    
            <div class="logo">
                <a href="../index.php"><h1>TheTimeZone</h1></a>
            </div>
            <div class="search-bar">
                <input type="text" placeholder="Search..">
                <i class="fa-solid fa-magnifying-glass search-icon"></i>
            </div>
            <div class="user-login">
                <ul>
                <li>
                    <a href="#">
                    <span id="#show-option" class="username"></span>
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
                            <a href="../php/logout.php"><i class="fa-solid fa-right-from-bracket" title="Logout"></i></a>
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
       
            
    </div>
    <main>

        <div class="container main-box top">
            <div class="top">
                
                <div class="box">
                    <label for="fname">First Name:</label>
                    <div class="info"><?php echo $res_Fname ?></div>
                </div>
                <div class="box">
                    <label for="lname">Last Name:</label>
                    <div class="info"><?php echo $res_Lname ?></div>
                </div>
                <div class="box">
                    <label for="email">Email:</label>
                    <div class="info"><?php echo $res_Email ?></div>
                </div>
                <div class="box">
                    <label for="dob">Date of Birth:</label>
                    <div class="info"><?php echo $res_dob ?></div>
                </div>
                <div class="box">
                    <label for="contact">Contact:</label>
                    <div class="info"><?php echo $res_Contact ?></div>
                </div>
                <div class="box">
                    <label for="address">Address:</label>
                    <div class="info"><?php echo $res_address ?></div>
                </div>
                <div class="box">
                    <label for="gender">Gender:</label>
                    <div class="info"><?php echo $res_gender ?></div>
                </div>
            </div>
        
        </div>

        
    </main>
    <div class="button-container">
        <a class="btn" href="../php/changeprofile.php?Id=<?php echo $res_id ?>">Change Profile</a>
    </div>

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
<script type="text/javascript" src="../js/script.js"></script>