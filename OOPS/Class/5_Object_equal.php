<?php
      class RBI
	  {    
	      public $sal1,$sal2;
		  
		  function getValue($x,$y)
		  {   
			  $this->sal1=$x;
			  $this->sal2=$y;
		  }
		  
		  function add()
		  {
			  return $this->sal1+$this->sal2;
		  }
		  
		  
	  }
	  
	  $obj1 = new RBI();
	  $obj2=$obj1; // Assigning one object reference to another variable
	  $obj2->getValue(10,20);
	  $result=$obj2->add();
	  print($result);
	  
?>

Result:
      30

