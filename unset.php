<?php
session_start();
if( isset($_SESSION['ID']) && ($_SESSION['ID'] == "000000"))
{
session_unset();
header("location:Register.html");
}
 ?>
