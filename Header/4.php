<?php
      $x=10;
	  if($x==20)
	  {
		  echo "True";
		  
	  }
      else
	  {    // server Error
		  header('HTTP/1.1 500 Not Found');
	  }
?>
