<?php 
   session_start();

   include("../php/config.php");
   if(!isset($_SESSION['valid'])){
    header("Location:../html/login.html");
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

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js"></script>
    <script src="../js/update.js"></script>
    <script type="text/javascript" src="../js/script.js"></script>
    <title>Change Profile</title>
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
            <a href="../index.html"><h1>TheTimeZone</h1></a>
          </div>
          <div class="search-bar">
            <input type="text" placeholder="Search..">
            <i class="fa-solid fa-magnifying-glass search-icon"></i>
          </div>
          <div class="user-login">
            <ul>
              <li>
                <a class="userIcon">
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
              <li class="logout">
                <a href="../php/logout.php"><i class="fa-solid fa-right-from-bracket" title="Logout"></i></a>
             </li>
            </ul>
  
         
          </div>
        </div>
      </div>
  
      <div class="header-second">
        <nav>
          <div class="container nav-bar">
            <ul>
              <li>
                <a href="../html/products.html">Products</a>
              </li>
              <li>
                <a href="../html/aboutUs.html">About us</a>
              </li>
              <li>
                <a href="../html/blog.html">Blogs</a>
              </li>
              <li>
                <a href="../html/blog.html">Blogs</a>
              </li>
            </ul>
          </div>
        </nav>
      </div>
    </header>
    <!-- header ends here -->

    <div class="container form-container1">
        <div class="form-box">
        <?php 
               if(isset($_POST['submit'])){
                $contact = $_POST['contact'];
                $address = $_POST['address'];
                $password = $_POST['password'];

                $id = $_SESSION['id'];

                $edit_query = mysqli_query($con,"UPDATE users SET Contact='$contact', Address='$address', Password='$password' WHERE Id=$id ") or die("error occurred");

                if($edit_query){
                    echo "<div class='message'>
                    <p>Profile Updated!</p>
                </div> <br>";
              echo "<a href='userprofile.php'><button class='btn'>Go Home</button>";
       
                }
               }else{

                $id = $_SESSION['id'];
                $query = mysqli_query($con,"SELECT*FROM users WHERE Id=$id ");

                while($result = mysqli_fetch_assoc($query)){
                    $res_Contact = $result['Contact'];
                    $res_Address = $result['Address'];
                    $res_Password = $result['Password'];
                }

            ?>
            <h1>Change Profile</h1>
            <form action="" method="post" id="edit-form">

                <div class="field-input">
                    <label for="contact">Contact</label>
                    <input type="tel" name="contact" id="contact" autocomplete="off" value="<?php echo $res_Contact; ?>" required>
                </div>

                <div class="field-input">
                    <label for="address">Address</label>
                    <input type="text" name="address" id="address" autocomplete="off" value="<?php echo $res_Address; ?>" required>
                </div>

                <div class="field-input">
                    <label for="password"> Password</label>
                    <input type="password" name="password" id="password" autocomplete="off" value="<?php echo $res_Password; ?>" >
                </div>
                <div class="field-input">
                    <label for="confirmPassword">Re-Type Password</label>
                    <input type="password" name="confirmPassword" id="confirmPassword" >
                </div>

                <div class="field-input">
                    <input type="submit" class="btn" name="submit" value="Update" required>
                </div>
                
            </form>
        </div>
        <?php } ?>
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

            