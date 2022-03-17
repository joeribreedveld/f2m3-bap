<?php
include 'functions.php';
$answer1 = berekenVliegKosten(3722, 2.05, 20, "Business");
$answer2 = berekenVliegKosten(9276, 3.11, 10, "Business");
$answer3 = berekenVliegKosten(803, 2.83, 0, "Business");

$result1 = number_format($answer1, 2, '.', '');
$result2 = number_format($answer2, 2, '.', '');
$result3 = number_format($answer3, 2, '.', '');


echo $result1."<br>";
echo $result2."<br>";
echo $result3."<br>";
?>