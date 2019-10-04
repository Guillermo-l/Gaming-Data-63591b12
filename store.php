<?php

$games = array(
    array("Call of duty", "Shooter", 59.95),
    array("Rocket League", "Sport", 19.95),
    array("Assassins Creed", "RP", 49.95)
);

for($i = 0; $i < count($games); $i++){
    $totalePrijs += $games[$i][2];
    $totaleLengte += strlen($games[$i][0]);
}

$gemiddeldePrijs = round($totalePrijs / count($games), 2);
$gemiddeldeLengteTitel = round($totaleLengte / count($games));

var_dump($games);
echo "_________________________________________" . PHP_EOL;
echo "Gemiddelde prijs: €$gemiddeldePrijs" . PHP_EOL;
echo "Gemiddelde lengte van titel: $gemiddeldeLengteTitel karakter" . PHP_EOL;