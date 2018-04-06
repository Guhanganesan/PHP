<?php

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  return $data;
}

$x=test_input("Guhan");

echo $x;

$a="Payilagam";

echo trim($a);
echo stripslashes($a);
?>