<?php
class Nokia{
	
	public $name="Guhan";
	
	function run()
	{ 
	    $this->name="Anbu";
		return   $this->name;
	}
}

$obj= new Nokia();

echo $obj->run();
echo $obj->name;

?>