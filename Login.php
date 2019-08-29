<?php
include_once "db.php";
if(isset($_POST['submit']))
{
$c = $_POST['email'];
$d = $_POST['password'];
$pas = md5($d);
$query = mysqli_query($con, "select password from register where email='$c'");
$query1 = mysqli_query($con, "select fname from register where email='$c'");
$query2 = mysqli_query($con, "select lname from register where email='$c'");
$flag = 0;
while($row = mysqli_fetch_row($query))
{
  if($pas == $row[0])
  {
    $flag = 1;
    $loc = "homepage.php";
    session_start();
    $_SESSION['username'] = $c;
    header("location:$loc");
  }

  }
if($flag == 0)
{
    echo'<script> alert("Invalid Username or Password. Please check !");
    window.location.href = "login.html";
    </script>';
}
while($row = mysqli_fetch_row($query1))
{
    $_SESSION['firstname'] = $row[0];
}
while($row = mysqli_fetch_row($query2))
{
  $_SESSION['lastname'] = $row[0];
}
  }
  else {
    echo "Could not connect. Please contact the administrator!";
  }
  mysqli_close($con);
?>
