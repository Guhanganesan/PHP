<?php
      class RBI
	  {  		  
		  function __construct()
		  {
			  echo "I am a Constructor";
		  }
		  
		  
	  }
	  
	  $obj1 = new RBI();
?>

Result:
       I am a constructor
       
       
<?php
      class RBI
	  {  		  
		  
		  function RBI()
		  {
			  echo "I am a constructor";
		  }
	  }
	  
	  $obj1 = new RBI();
?>



Result:
       I am a constructor
       


