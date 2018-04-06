
<p>apples</p>

<?php

function callback($buffer)
{
  // replace all the apples with oranges
  return (str_replace("apples", "oranges", $buffer));
}

echo "apples";

ob_start("callback");


/*
Description. This function will turn output buffering on. 
While output buffering is active no output is sent from the script 
(other than headers), instead the output is stored in an internal buffer. 
The contents of this internal buffer may be copied into a string variable
 using ob_get_contents()[ Return the contents of the output buffer].
*/
?>
<html>
<body>
<p>apples</p>
apples

</body>
</html>
<?php

ob_end_flush();

?>

<p> apples</p>