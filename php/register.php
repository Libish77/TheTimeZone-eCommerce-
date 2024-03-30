<?php

include("../php/config.php");
if(isset($_POST['submit'])){
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $password = $_POST['password'];
    $dob = $_POST['dob'];
    $address = $_POST['address'];
    $gender = $_POST['gender'];

    //verifying the unique email

$verify_query = mysqli_query($con,"SELECT Email FROM users WHERE Email='$email'");

if(mysqli_num_rows($verify_query) !=0){
    echo"<div class='message'>
            <p>This email is used, Try another One Please!</p>
         </div> <br>";
    echo "<a href='javascript:self.history.back()'><button class='btn'>Go Back</button>";
}
else{

    mysqli_query($con,"INSERT INTO users(FirstName,LastName,Email,Contact,Password,DOB,address,gender)       VALUES('$firstname','$lastname','$email','$contact','$password','$dob','$address','$gender')") or die("Error Occured");

    echo "<div class='message'>
              <p>Registration successfully!</p>
          </div> <br>";
    echo "<a href='../html/login.html'><button class='btn'>Login Now</button>";
 

 }

}else{
?>
<?php } ?>