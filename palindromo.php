<?php
$string = "Morram após a sopa marrom";
$string = strtolower($string);
$string = preg_replace(array("/(á|à|ã|â|ä)/","/(Á|À|Ã|Â|Ä)/","/(é|è|ê|ë)/","/(É|È|Ê|Ë)/","/(í|ì|î|ï)/","/(Í|Ì|Î|Ï)/","/(ó|ò|õ|ô|ö)/","/(Ó|Ò|Õ|Ô|Ö)/","/(ú|ù|û|ü)/","/(Ú|Ù|Û|Ü)/","/(ñ)/","/(Ñ)/"),explode(" ","a A e E i I o O u U n N"),$string);
$palindromo = strrev($string);
if ($string == $palindromo) {
    echo "Palindromo de: " . $string . " é " . $palindromo;
} else {
    echo "Não há palindromo em: " . $string;
}