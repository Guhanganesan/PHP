<?php
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
    
