<?php
      $conn=mysql_connect("localhost","root","");
      $db=mysql_list_dbs($conn);
      if($db)
      {
          echo mysql_db_name($db,0);
      }
  
	  $rows=mysql_num_rows($db);
	  
	  //echo $rows;
  
        for($i=0; $i<15; $i++)
       {
		   echo mysql_db_name($db, $i)."<br>";
	   }		  
?>
<?php
/*  
$con=mysql_connect('localhost', 'root', '');   
$list = mysql_list_dbs($con);  
$rows = mysql_num_rows($list); 
$i = 0; 
while ($i < $rows)   
{  
echo mysql_db_name($list, $i) . "<br />";  
$i++;  
}  */
?>  