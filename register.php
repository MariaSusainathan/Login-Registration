<?php
include_once "db.php";
if(isset($_POST['submit']))
{
$a = $_POST['First_Name'];
$b = $_POST['Last_Name'];
$c = $_POST['email'];
$d = $_POST['password'];
$e = $_POST['mobile'];
$pas = md5($d);
$q = mysqli_query($con, "select * from register");
while($row = mysqli_fetch_row($q))
{
$emailvalidation = $row[2];
$mobilevalidation = $row[4];

if($c == $emailvalidation)
{
  echo'<script> alert("Email already exists. Please check");
  window.document.location.href="register.html";
  </script>';
}
if($e == $mobilevalidation)
{
  echo'<script> alert("Mobile Number already exists. Please check");
  window.document.location.href="register.html";
  </script>';
}
}
mysqli_query($con, "insert into register
values('$a','$b','$c','$pas','$e')");
echo'<script> alert("Successfully Registered !. Please Signin")</script>';
echo'<script>window.document.location.href="register.html";</script>';
}
else {
  echo "Could not connect. Please contact the administrator!";
}
mysqli_close($con);
?>
