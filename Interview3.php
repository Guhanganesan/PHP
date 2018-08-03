<?php
       function hi()
	   {
		    echo "Hi"; //Hi
	   }
	   hi();
	   
	   function sub($x)
	   {
		     echo $x;
	   }
	   
	   sub(null);
	   
	   function mul($x,$y)
	   {
		     echo $x*$y;
	   }
	   
	   mul(10,null);
	   
	   function go($x,$y)
	   {
		   echo $x+$y;
	   }
	   go(10,null);
	   
	   function check($x=10,$y=20)
	   {
		   echo $x."and".$y;
	   }
	   check();
	   
	   function alt($x,$y)
	   {
		   echo $x+"and"+$y; 
	   }
	   alt($x=44,$y=33);
	   
	   function anony($x)
	   {
		   $z=function($m)
		   {
			   return $m+100;
		   };
		   return $z(20);
	   }
	   print(anony(100));
	   
	   
	   $name="Guhan";
	   function getValue()
	   {   global $name;
		   echo $name;
	   }
	   
	   getValue();


         $sum=1;
         function fact($i)
	 {   global $sum;
	     $sum=$sum*$i;
		 return $sum;
	 }
	 
	 for ($j=1; $j<=5; $j++)
	 {
		 $out=fact($j);
	 }
	 echo $out;
?>

Result:

Hi
0
10
10and20
77
120
Guhan
120
