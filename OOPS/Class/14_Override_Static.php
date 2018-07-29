<?php
    
    class Anna
	 {
		 static $name="Anna";
		 const  mobile=8698;
		 static  function katravai()
		 {
			echo "Katravai <br>";
		 }
	 }
	 
	 class Periyar extends Anna 
	 {
		 static  function katravai()
		 {
			echo "Katravai Patravai";
		 }
		 		 
		 function puratchi()
		 {
			parent::katravai();
			
		 }
		 
		 
	 }
	 Periyar::puratchi();
	 Periyar::katravai();
	 print Periyar::$name;
	 print Periyar::mobile;
	 
?>

Result:

Katravai 
Katravai PatravaiAnna8698

