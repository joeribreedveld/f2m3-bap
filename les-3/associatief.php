<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 

    $verbruik = ['Computer' => '600', 'Televisie' => '220', 'Wasmachine' => '180', 'Vaatwasmachine' => '160', 'Wasdroger' => '100'];

    foreach($verbruik as $key => $value) {
        echo "<h1>" . $key . "</h1>" . " " . "<li>" . $value . "</li>" . "<br>";
    }

    $totaal = 0;

    foreach($verbruik as $key => $value) {
        $totaal = $totaal + $value;
    }

    echo "<h1>- Totaal</h1>";
    echo "<li>" . $totaal . "</li>";

    ?>
</body>
</html>