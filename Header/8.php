<?php
      $x=10;
	  if($x==20)
	  {
		  echo "True";
		  
	  }
      else
	  {   // not modified
		  header('HTTP/1.1 304 Not Modified');
	  }
?>