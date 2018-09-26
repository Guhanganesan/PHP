<?php
   $date= date("d/m/y");
	 echo $date;          //26/09/18
	 $day = date("d");
	 echo $day;           //26
	 $month=date("m");
	 echo $month;         //09
	 $year=date("y");
	 echo $year;          //18
	 
	 $date_time=date("d/m/y h:i:s A");
	 echo $date_time;     //26/09/18 06:55:13 AM
	 
	 
	 $timestamp=time();
	 
	 echo $timestamp;  // 1537937919
	 
	 
	 $date_time=date("d/m/y h:i:s",1537937919);
	 echo $date_time;     //26/09/18 06:58:39
	 
	 $futureDate = mktime(0,0,0,date("m")+2, date("d"), date("Y"));
     echo date("d/m/Y", $futureDate); //26/11/2018
	  
?>
	 
