<?php
     $char='A';
	 for($i=0;$i<=25;$i++)
	 {
		 echo $char++."<br>";
	 }
?>


<br><br>
<?php
foreach (range('A', 'Z') as $char) {
    echo $char . "\n";
}
?>
<br><br>
<?php
foreach (range(1,30) as $char) {
    echo $char . "\n";
}
?>
<br><br>
<?php
for ($char = 'A'; $char <= 'Z'; $char++) {
    echo $char."<br>";
}
?>
<br><br>