<?php
      class RBI{
		 public $name="Anbu";
		 protected $mobile=9876; 
         private $pin=2233;		 
		 function  rate()   
		   {
			  echo "This is parent class<br>"; 
		   }
	   }
	   
	   class SBI extends RBI{
		   
		   function rate1()
		   {
			   echo "This is child class<br>";
			   
			   echo $this->name;
			   echo $this->mobile;
			   echo $this->pin;
			   
			  
		   }
	   }
	   
	   $obj1 = new SBI();
	   $obj1->rate();
	   $obj1->rate1();
?>


Result:

This is parent class
This is child class
Anbu9876
Notice: Undefined property: SBI::$pin in C:\xampp\htdocs\test.php on line 20


