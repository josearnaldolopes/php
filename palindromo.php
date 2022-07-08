<?php
function polindroma($palavra) {
    $palavra = preg_replace(array("/(á|à|ã|â|ä)/","/(Á|À|Ã|Â|Ä)/","/(é|è|ê|ë)/","/(É|È|Ê|Ë)/","/(í|ì|î|ï)/","/(Í|Ì|Î|Ï)/","/(ó|ò|õ|ô|ö)/","/(Ó|Ò|Õ|Ô|Ö)/","/(ú|ù|û|ü)/","/(Ú|Ù|Û|Ü)/","/(ñ)/","/(Ñ)/"),explode(" ","a A e E i I o O u U n N"),$palavra);
    $invertida = strrev($palavra);
    $teste = $invertida == $palavra ? 1 : 0;
    return $teste;
}

echo polindroma("omissíssimo") . PHP_EOL;
echo polindroma("sopapos") . PHP_EOL;
echo polindroma("osso") . PHP_EOL;
echo polindroma("jose") . PHP_EOL;
echo polindroma("ovo") . PHP_EOL;
echo polindroma("rasar") . PHP_EOL;