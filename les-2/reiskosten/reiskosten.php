<?php

$afstand = 1082.52;

$benzineprijs = 2.311;

$tankinhoud = 50;

$aantalkerentanken = round(($afstand / 15) / 50);

$totalekosten = round(($afstand / 15) * $benzineprijs, 2);

$treinkoste = 63;

echo "De totale afstand = $afstand km <br>";
echo "De totale prijs met de auto = €$totalekosten<br>";
echo "Het aantal keer dat je moet tanken = $aantalkerentanken keer<br>";

if ($totalekosten < 200) {
    echo "Ik ga met de auto";
}

else {
    echo "Ik ga met de trein";
}

?>