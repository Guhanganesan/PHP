<?php
      class RBI
	  {    
	      public $x,$y; # combined declarations
		  
		  function rate($x,$y)
		  {
			  echo $x+$y;
		  }
		  
		  
	  }
	  
	  $object = new RBI();
	  $object->rate(10,20);
?>

Result:

30
