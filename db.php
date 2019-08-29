<?php
$con = mysqli_connect('localhost','Client_user','admin2020@wintec');
if(!$con)
{
die("Could not connect. Please make sure the Database is set") or mysqli_error();
}
mysqli_select_db($con,"project") or mysqli_error();
 ?>
