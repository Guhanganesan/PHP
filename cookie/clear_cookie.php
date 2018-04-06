     <?php
	 setcookie('user','Guhan',time()+20);
	 $check=$_COOKIE['user'];
	 if($check)
     {
	    $clear= setcookie('user','Guhan',time()-20);
     }
	 if(!$clear)
	 {
		 echo "your cookie has enabled";
	 }
	 else
	 {
		 echo "Your cookie has expired";
	 }
	 ?>