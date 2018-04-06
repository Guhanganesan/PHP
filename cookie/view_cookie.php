<?php
     $check=$_COOKIE['user'];
	 if($check)
     {
	 echo "your cookie is:".$check;
     }
	 else
	 {
		 echo "your cookie has expired";
	 }
?>