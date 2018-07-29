<?php
    
    class Anna
	 {
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
?>


Result:

Katravai 
Katravai Patravai

