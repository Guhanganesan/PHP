<?php
     $number=454; $r=0;$sum=0;
     for($i=1;$i<=3;$i++)
	 {
		
		$r=$number%10; //3
		$number=$number/10;//25
        $sum=$sum+$r;		
	 }
	 echo $sum;
?>