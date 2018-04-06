<?php
       /* It is a collection of abstract method. 
	      It does not spport multiple inheritance.
		  We should implements all the methods of parent class(interface). */
	   

     Interface RBI{
		         
				//public $r=10; cannot include
				
				/*public function loan(){
					//echo "RBI provides loan upto 20000<br>"; // cannot contain body
				}*/
				public function loan();
	            public function interest();
				
				
}
 
     class SBI implements RBI {
		 
	     function loan(){
			 
							echo "SBI provides loan upto"."30000"."<br>"; 
			            }
						
		 function interest(){echo "SBI Provides Interest rate at 3% <br>";}
		 
		 function getSubsidy(){echo "SBI Provides subsidy also"; }
	 }
 
	 $obj=new SBI();
	 $obj->interest();
	 $obj->loan();
	 $obj->getSubsidy();
?>