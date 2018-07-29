<?php
      /*
	      type method_name( parameter-list)
		  {
			  method-body;
		  }
		  
		  
	  
	  */
	  
	  class RBI
	  {
		  function rate()
		  {
			  echo "Rate is 12%";
		  }
		  
		  
	  }
	  
	  $object = new RBI();
          # RBI() is the default constructor of the class
          
	  $object->rate();
?>


Result:

Rate is 12%


