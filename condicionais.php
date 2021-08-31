<?php
$string = "VidaLonga";
$num1   = 1;
$num2   = 2;

echo $string ? "True" : "False"; //Ternario

echo "<p>";
echo ($num1 < $num2) ? "Menor" : "Maior"; //Ternario
echo "</p>";

echo "<p>";
echo ($num1 > $num2) ? "Menor" : "Maior"; //Ternario
echo "</p>";

if ($num1 < $num2)
    echo "<p>" . $num1 . " é menor que " . $num2 . "</p>";
