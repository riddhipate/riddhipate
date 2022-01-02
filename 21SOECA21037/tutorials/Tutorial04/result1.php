<?php

$principal=$_POST['p'];
$rate=$_POST['r'];
$year=$_POST['y'];

$si=($principal*$rate*$year)/100;

echo "$si";
?>