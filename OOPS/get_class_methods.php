

<?php

class Nokia{
	
	public $name="Guhan";
	
	private function run()
	{ 
	    $this->name="Anbu";
		return $this->name;
	}
	function __construct(){
		
		$this->name="Guhan";
		return $this->name;
				
	}
}

//$obj= new Nokia();

$methods= get_class_methods("Nokia");

foreach($methods as $values)
{
	echo $values;
}



?>





<!--
get_browser
		get_class
		get_class_methods
		get_headers
		get_object_vars
		
		-->