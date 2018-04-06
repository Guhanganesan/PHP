<?php
extract($_POST);
echo "\$m= $m; \$n = $n; \$a = $a";
session_start();
$_SESSION['name']=$m;
?>