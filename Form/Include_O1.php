<?php
session_start();
$x=$_SESSION['name'];
echo $x;
//session_destroy();
?>