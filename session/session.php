<a href="session_destroy.php"> logout </a>
<?php

    session_start();
    $name =$_POST['name'];
	//echo $name;
	$_SESSION['name']=$name;//$_POST['user'];
	 if(isset($name))
	 {
		 
		 echo $name;
	 }
	 else
	 {
		 header("location:login.php");
	 }
	 
?>