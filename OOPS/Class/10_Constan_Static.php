<?php
      class Tamilan
	  {  		  
		  public static $name="Tamilanda";
		  const age=20000;
		  function veeram()
		  {
			  print self::age;
			  print self::$name;
		  }
		 
	  }
	  
	  $obj = new Tamilan();
	  echo $obj->veeram();
	  
?>

Result:

20000Tamilanda
