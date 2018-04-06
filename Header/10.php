<?php
      $x=10;
	  if($x==20)
	  {
		  echo "True";
		  
	  }
      else
	  {
		  // show sign in box
           header('HTTP/1.1 401 Unauthorized');
	  }
?>
