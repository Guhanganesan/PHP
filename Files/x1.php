<?php
     //include("x2.php");
     // $open=fopen("Sudhan.txt","w");
	 //fwrite($open,$data);
	 //$file=fopen("Guhan.txt","r");
	 //$read=fread($file,10);
	 //echo $read;
	 
	 //$read1=file_get_contents("Guhan.txt");
	 //echo $read1;
	 //file_put_contents("Guhan.txt","Hey dear friend");
     $d=fopen("Guhan.txt","w+");
	// echo $d;
	if($d)
	{
		echo "your data is removed";
	}
?>