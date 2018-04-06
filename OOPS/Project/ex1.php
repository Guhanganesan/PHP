<?php
    class A {
		        public  $x ="Ramesh";
		        function run()
				{
					$this->x ="nandha";
					//return $this->x;
					echo $this->x;
				}
				
	  }
	  $obj = new A();
	  //$m = $obj->run();
	  //echo $m;
	  $obj->run();
?>
