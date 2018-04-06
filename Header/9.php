
<?php
      $x=10;
	  if($x==20)
	  {
		  echo "True";
		  
	  }
      else
	  {
			header('Content-Type: application/octet-stream');
			header('Content-Type: image/jpeg');
			header('Content-Disposition: attachment; filename="2.jpg"'); 
			header('Content-Transfer-Encoding: binary');
			// load the file to send:
			readfile('2.jpg');   // it downloads the php file
 
	  }
?>