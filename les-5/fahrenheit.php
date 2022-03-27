<?php
$input = $_GET['celsius']; 
$celsius = floatval($input);
$fahrenheit = $celsius * 1.8 + 32;
echo $fahrenheit;
?>