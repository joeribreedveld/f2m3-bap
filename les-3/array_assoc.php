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

    $weer = ['maandag' => '13', 'dinsdag' => '14', 'woensdag' => '15', 'donderdag' => '14', 'vrijdag' => '13', 'zaterdag' => '11', 'zondag' => '11'];

    print_r($weer);

    ?>

    <table>
        <tr>
            <th>Naam</th>
            <th>Temperatuur</th>
        </tr>
        <tr>
            <th>Maandag</th>
            <th><?php echo $weer['maandag'];?> ℃</th>
        </tr>
        <tr>
            <th>Dinsdag</th>
            <th><?php echo $weer['dinsdag'];?> ℃</th>
        </tr>
        <tr>
            <th>Woensdag</th>
            <th><?php echo $weer['woensdag'];?> ℃</th>
        </tr>
        <tr>
            <th>Donderdag</th>
            <th><?php echo $weer['donderdag'];?> ℃</th>
        </tr>
        <tr>
            <th>Vrijdag</th>
            <th><?php echo $weer['vrijdag'];?> ℃</th>
        </tr>
        <tr>
            <th>Zaterdag</th>
            <th><?php echo $weer['zaterdag'];?> ℃</th>
        </tr>
        <tr>
            <th>zondag</th>
            <th><?php echo $weer['zondag'];?> ℃</th>
        </tr>
    </table>
</body>
</html>