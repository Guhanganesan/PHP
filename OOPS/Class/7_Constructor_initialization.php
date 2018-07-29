<?php
      class RBI
	  {  		  
		  
		  function RBI()
		  {
			  $this->x=10;
			  $this->y=20;
		  }
		  function add()
		  {
			  
			  echo $this->x+$this->y;
			 
		  }
	  }
	  
	  $obj1 = new RBI();
	  $obj1->add();
?>

Result:

30
