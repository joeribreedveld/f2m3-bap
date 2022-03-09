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

    $namen = ["Joeri", "Davy", "Joey", "Tim", "Jacob"];

    echo count($namen);

    sort($namen);

    print_r($namen);

    echo array_pop($namen);

    array_push($namen, "Bob");

    $namen[] = "Piet";

    print_r($namen);

    $namen_tekst = implode("<br>", $namen);

    echo $namen_tekst;

    $namen_explode = explode("<br>",$namen_tekst);

    print_r($namen_explode);

    ?>
</body>
</html>