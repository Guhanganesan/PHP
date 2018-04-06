<?php
session_destroy();
//echo $_SESSION['name'];
if(!$_SESSION['name'])
{
	header("location:login.php");
}

?>