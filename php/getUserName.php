<?php
session_start();

include("../php/config.php");


$res_Fname = "";
 
if(isset($_SESSION['valid'])){
$id = $_SESSION['id'];


    $query = mysqli_query($con,"SELECT*FROM users WHERE Id=$id");
    while($result = mysqli_fetch_assoc($query)){
        $res_Fname = $result['Firstname'];
   
    }


}
echo json_encode($res_Fname);

?>


