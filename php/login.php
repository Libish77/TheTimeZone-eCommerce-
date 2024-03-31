<?php 
   session_start();
?>
<?php 
             
             include("../php/config.php");
             if(isset($_POST['submit'])){
               $email = mysqli_real_escape_string($con,$_POST['email']);
               $password = mysqli_real_escape_string($con,$_POST['password']);

               $result = mysqli_query($con,"SELECT * FROM users WHERE Email='$email' AND Password='$password' ") or die("Select Error");
               $row = mysqli_fetch_assoc($result);

               if(is_array($row) && !empty($row)){
                   $_SESSION['valid'] = $row['Email'];
                   $_SESSION['firstname'] = $row['Firstname'];
                   $_SESSION['lastname'] = $row['Lastname'];
                   $_SESSION['contact'] = $row['Contact'];
                   $_SESSION['dob'] = $row['DOB'];
                   $_SESSION['address'] = $row['Address'];
                   $_SESSION['gender'] = $row['Gender'];
                   $_SESSION['id'] = $row['Id'];
               }else{
                   echo "<div class='message'>
                     <p>Wrong Username or Password</p>
                      </div> <br>";
                  echo "<a href='../html/login.html'><button class='btn'>Go Back</button>";
        
               }
               if(isset($_SESSION['valid'])){
                   header("Location:../index.html");
               }
             }else{

           
           ?>
           <?php } ?>