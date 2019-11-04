<?php
if(!empty($_GET['excel1']))
{
	        @header("Content-Disposition: attachment; filename=mysql_to_excel.csv");
		    
			
			$setData = "Id" . "\t" .",".
            		   "Name" . "\t" .",". 
					   "ACTIVE" . "\t"."\n";			
			
			$row=array(
			array("A","B","C"),
			array("C","D","E"),
			array("F","G","H")
			);
			
			for($i=0; $i<sizeof($row); $i++) 
			{
				$rowData = '';  
				for($j=0; $j<sizeof($row[0]);$j++)
				{
					$setData .= $row[$i][$j].",";    
				}
				 $setData .= "\n";
			} 
            echo $setData;
		
}
?>
