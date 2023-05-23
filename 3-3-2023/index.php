<?php
require "namespace.php";
use calculator as C;

$x=10;
$y=30;
$obj = new C\Calc();
$obj->multiply($x,$y);
calculator\sum($x,$y);
echo "<br>";
calculator\diff($y,$x);
C\diff($x,$y);
?>