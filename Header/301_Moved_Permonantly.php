<?php
      $x=10;
	  if($x==20)
	  {
		  echo "True";
		  
	  }
      else
	  {     // The page moved permanently should be used for
			// all redrictions, because search engines know
			// what's going on and can easily update their urls.
		  header('HTTP/1.1 301 Moved Permanently');
	  }
?>
