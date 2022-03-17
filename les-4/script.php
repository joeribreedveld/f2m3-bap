<?php
include 'functions.php';

currentDateTime();

$add_result = add(100, 200);
echo $add_result."<br>";

$subtract_result = subtract(100, 200);
echo $subtract_result."<br>";

$divide_result = divide(100, 200);
echo $divide_result."<br>";

$multiply_result = multiply(100, 200);
echo $multiply_result."<br>";

$reken1 = berekenRitKosten(633, 15, 1.90);
$reken2 = berekenRitKosten(1438, 20, 1.46);
$reken3 = berekenRitKosten(1991, 18.47, 2.23);


$result1 = number_format($reken1, 2, '.', '');
$result2 = number_format($reken2, 2, '.', '');
$result3 = number_format($reken3, 2, '.', '');

echo $result1."<br>";
echo $result2."<br>";
echo $result3."<br>";





?>