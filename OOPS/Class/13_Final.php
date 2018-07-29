<?php
    /*
	prevents child classes from overriding a method by prefixing the definition with final. 
	If the class itself is being defined final then it cannot be extended.
	*/
	
    class Anna
	 {
		final public function katravai()
		 {
			echo "Katravai";
		 }
	 }
	 
	 class Periyar extends Anna 
	 {
		 function katravai(){ # Cannot override final method Anna::katravai() =>Fatal Error 
			 echo "Varumai ennum noyai theerka vaa...";
		 }
		 
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
Fatal error: Cannot override final method Anna::katravai()

