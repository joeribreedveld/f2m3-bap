<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "duurzaamhuis";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  // echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}

// selecteer alle meterstanden
$result = $conn->query("SELECT * FROM `meterstanden`");

$data = ["labels" => [], "values" => []];

foreach ($result as $rij) {
    $data['labels'][] = $rij['datum'];
    $data['values'][] = $rij['stand'];
}

header('Content-Type: application/json');
$json = json_encode($data);
echo $json;
?>