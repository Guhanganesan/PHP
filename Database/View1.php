<?php
$dbhost="localhost";
     $dbuser="root";
     $dbpass="";
     $conn=mysql_connect($dbhost,$dbuser,$dbpass);
     mysql_select_db("trainee"); 
     $result = mysql_query("select * from details");
     $no_result = mysql_num_rows($result);
     
	 //echo $no_result;	 
	
	for ($i=0;$i<$no_result;$i++)  
	{  
	echo "<p>".mysql_result($result,$i)."</p>";   
	}  
	//mysql_close($conn);  
	?>  
