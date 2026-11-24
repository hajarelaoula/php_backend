<?php
require_once __DIR__ .'/fonctions.php';
echo '12+2='. additionner(12,2)."\n";
echo '12-2='. soustraire(12,2)."\n";
echo '12*2='. multiplication(12,2)."\n";
echo '12/2='. divier(12,2)."\n";
echo 'le nombre 6 estPsitif ?'.estPositif(6)."\n";
echo 'la valeure maximum  est :'. maximum(4,5,8)."\n";
echo 'Ce nombre est premier ? ' .
    (estPremier(6) ? 'true' : 'false') . "\n";
echo 'TTc :'.calculerTTC(288, 20.0)."\n";
echo 'Remise :'. calculerRemise(200,0.2)."\n";
$montant= calculerFacture(100, 10, 10, 20);
echo number_format($montant, 2, ",", " ") . " MAD"."\n";
echo 'la moyenne est '.moyenne(6,7,3,45)."\n";
echo aireCercle(5)."\n";
echo perimetreCercle(5)."\n";
echo celsiusVersFahrenheit(25)."\n";
echo fahrenheitVersCelsius(77)."\n";
echo factorielle(5)."\n";