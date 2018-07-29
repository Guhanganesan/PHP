<?php
    class Anna
	 {
		 function katravai()
		 {
			echo "Katravai Patravai";
		 }
	 }
	 
	 class Periyar extends Anna 
	 {
		 function puratchi()
		 {
			parent::katravai();
			
		 }
		 function neruppuda()
		 {
			 echo "Neruppuda";
		 }
		 
	 }
	 $obj = new Periyar();
	 $obj1= clone $obj;
	 $obj1->puratchi();
	 $obj1 = $obj;
	 $obj1->neruppuda();
?>

Result:

Katravai PatravaiNeruppuda
