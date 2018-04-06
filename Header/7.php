<?php
      $x=10;
	  if($x==20)
	  {
		  echo "True";
		  
	  }
      else
	  {    
	        $time = time() - 60; // or filemtime($fn), etc
            header('Last-Modified: '.gmdate('D, d M Y H:i:s', $time).' GMT');
		  
	  }
?>
