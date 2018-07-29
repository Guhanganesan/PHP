<?php
/*
Traits are a mechanism for code reuse in single inheritance languages such as PHP. 
A Trait is intended to reduce some limitations of single inheritance by enabling a developer
to reuse sets of methods freely in several independent classes living in different class hierarchies.
*/
    Trait Anna
	 {
		public function katravai()
		 {
			echo "Katravai";
		 }
	 }
	 
	 class Periyar 
	 {
		 use Anna;
		 
		 function puratchi()
		 {
			echo "Patravai";
			
		 }
		 
	 }
	 $obj = new Periyar();
	 $obj->puratchi();
	 $obj->katravai();
?>

     
    Result:
    
    
    PatravaiKatravai
    
