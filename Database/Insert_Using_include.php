<?php
     include('Connect.php');
	 $query="Insert into details values('Kathir', 'Anbu', '7786****')";
	 $mysql=mysql_query($query);
	 if($mysql)
	 {
		 echo "The Data is inserted into the table is success!!";
	 } 
?>