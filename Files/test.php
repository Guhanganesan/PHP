<?php
     $open=fopen("Anbu.txt","w");
	 fwrite($open,"Hey my friend");
	 $open=fopen("Anbu.txt","r");	
	 $read=fread($open,10);
	 //echo $read;
	 fopen("Anbu.txt","w+");
?>