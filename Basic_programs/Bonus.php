<?php
     $x=12000;
	 $y=10000;
	 $bonus=0;
	 if($x<$y)
	 {
		 $bonus=$x+(10/100*10000); //10%
		 echo $bonus;
	 }
	 else if($x>$y)
	 {
		 $bonus=$x+(20/100*10000); //10%
		 echo $bonus;
	 }
?>