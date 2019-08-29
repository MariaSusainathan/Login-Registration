<?php
include_once "db.php";
if(isset($_POST['submit']))
{
$a = $_POST['email'];
$b = $_POST['password'];
$c = $_POST['cpassword'];
$pas = md5($b);
$query = mysqli_query($con, "UPDATE `register` SET `password`= '$pas' WHERE email='$a'");
  echo'<script> alert("Password is Successfully resetted");</script>';
  $loc = "login.html";
  header("location:$loc");
  }
  else {
    echo "Could not connect. Please contact the administrator!";
  }
  mysqli_close($con);
?>
