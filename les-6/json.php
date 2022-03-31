<?php

$data = [12, 45,67, "Joeri", "2022-12-31", true, "Amsterdam", [234,67,124]];
$jsondata = json_encode($data);

header('Content-Type: application/json');
echo $jsondata;

?>