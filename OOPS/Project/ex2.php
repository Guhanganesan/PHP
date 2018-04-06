<?php
       include("ex1.php");
       echo $m;
	   class B extends A {
		        public  $x ="Ranjith";
		        function run()
				{
					$this->x ="Ram";
					return $this->x;
				}
				
	  }
	  $obj = new B();
	  $m = $obj->run();
	  echo $m;
?>
