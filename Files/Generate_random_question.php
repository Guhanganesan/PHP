<style>
table, th, td {
    border: 1px solid black;
	border-collapse:collapse;
}
</style>
<?php
   $file=file_get_contents("Guhan.txt");
   //print_r($file);
   
   $arr= preg_split('/\s+/', $file);
   print_r($arr);
   
   shuffle($arr);
  
   $count=0;
      echo "<table>";
	  echo "<tr><td>Sl.No</td><td>Questions</td></tr>";
	  foreach($arr as $value)
	  {   $count++;
		  echo "<tr><td>$count</td><td>$value</td></tr>";
	  }
	  echo "</table>";
   
   
?>

