<?php
require_once __DIR__ .'/fonctions.php';
echo '12+2='. additionner(12,2)."\n";
echo '12-2='. soustraire(12,2)."\n";
echo '12*2='. multiplication(12,2)."\n";
echo '12/2='. divier(12,2)."\n";
echo 'le nombre 6 estPsitif ?'.estPositif(6);
echo 'la valeure maximum  est :'. maximum(4,5,8);