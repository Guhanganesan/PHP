<?php
    class A {
		        public  $x ="Ramesh";
		        function run()
				{
					$this->x ="Guhan";
					//return $this->x;
					echo $this->x;
				}
				
	  }
	  $obj = new A();
	  //$m = $obj->run();
	  //echo $m;
	  $obj->run();
?>
