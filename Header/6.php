<?php
      $x=10;
	  if($x==20)
	  {
		  echo "True";
		  
	  }
      else
	  {    // Redirect with delay
		  header('Refresh: 10; url=1.php');
          print 'You will be redirected in 10 seconds';
	  }
?>
