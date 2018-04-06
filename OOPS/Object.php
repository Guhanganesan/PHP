<?php
      class Mobile{
	                 public $name="Samsung";
					 public $color="Blue";
					function __construct()
					{   
					    $this->name="Samsung";
						echo $this->name;
					}
				    function makeCall()
					{
						echo "<br>I call to my friend<br>";
					}
	                function switchOff()
					{ 
					     $this->color="pink";
						  
						echo "I am going to switch off the".$this->name;
					}
	  }
       $Obj = new Mobile();
	   
	   $Obj->makeCall();
	   $Obj->switchOff();
?>