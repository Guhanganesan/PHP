<?php
if(file_exists('test.txt'))
{
    
	$fh = fopen('test.txt', 'r');
	$theData = fread($fh, 20);
	echo $theData;
}
else
{
    die("<p style='color:red;'>Error: The file you are trying to access doesn't exist.</p>");
}
?>
