<?php
      class RBI
	  {  		  
		  public $name="RBI";
		  
		  function RBI()
		  {
			  $this->x=10;
			  $this->y=20;
			  
			  echo $this->name;
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

RBI30
