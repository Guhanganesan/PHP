<?php
      $first=0; $second=1;
	  for($i=1;$i<=8;$i++) // upto 8
	  {    // 0, 1, 
		  echo $first."<br>";//0
		  $next=$first+$second; //1
		  $first=$second;//1
		  $second=$next;//1
	  }
       // for $i=1, $next=1,       (0) 
	   // for $i=2; $next=1+1=2,   ( 0, 1)
	   // for $i=3, $next=1+2=3    (0,1,1)..
?>