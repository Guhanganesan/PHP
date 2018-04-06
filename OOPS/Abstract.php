<?php
      abstract class RBI{
		  public static $name="Guhan";
		   function  rate() // abstract function should not contain a body
		   {
			  echo "This is an abstract class<br>"; 
		   }
	   }
	   
	   class SBI extends RBI{
		   
		   function rate1()
		   {
			   echo self::$name; // access to undeclared static property
			   parent::rate();
		   }
	   }
	   
	   $obj1 = new SBI();
	   $obj1->rate1();
?>