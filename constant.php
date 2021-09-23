<?php
#Constants case-insensitive
define("SAUDACAO", "Olá Mundo!", true);
echo saudacao;

echo "\n\n";

#Constants case-sensitive
define("salve", "Olá Mundo novamente!");
echo salve;

#Constante array
define("bicicleta", ["Groove Overdrive", "Absolute Wild-R", "Caloi 10"]);
echo bicicleta[0];
echo "\n\n";
echo bicicleta[1];
echo "\n\n";
echo bicicleta[2];

#Constante array case-insensitive
define("ESPORTE", ["Corrida", "Ciclismo", "Musculação"], true);
echo ESPORTE[0];
echo "\n\n";
echo esporte[1];
echo "\n\n";
echo EsPoRtE[2];