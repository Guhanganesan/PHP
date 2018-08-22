<?php
      $x=10;
	  if($x==20)
	  {
		  echo "True";
		  
	  }
      else
	  {    // // Access forbidden:
	      //Access to localhost was denied
		  header('HTTP/1.1 403 Not Found');
	  }
?>
