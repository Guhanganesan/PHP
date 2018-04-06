<?php
session_destroy();
if(isset($_SESSION['user']))
	 {
		 
		 echo "Session is available";
	 }
	 else
	 {
		 header("location:login.php");
	 }
?>