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
	  
	  $object = new RBI();
	  $object->getValue(10,20);
	  $result=$object->add();
	  print($result);
	  
?>

     Result:
            30
            
