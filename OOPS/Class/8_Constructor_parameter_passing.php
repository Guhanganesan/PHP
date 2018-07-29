<?php
      class RBI
	  {  		  
		  
		  
		  function RBI($x,$y)
		  {
			  $this->x=$x;
			  $this->y=$y;
			  
			  
		  }
		  function add()
		  {
			  
			  
			  echo $this->x+$this->y;
			  
			 
		  }
	  }
	  
	  $obj1 = new RBI(10,20);
	  $obj1->add();
?>

     
Result:
30

