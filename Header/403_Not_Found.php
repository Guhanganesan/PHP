<?php
      $x=10;
	  if($x==20)
	  {
		  echo "True";
		  
	  }
      else
	  {    // // Access forbidden:
		  header('HTTP/1.1 403 Not Found');
	  }
?>
