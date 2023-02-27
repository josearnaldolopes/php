<?php
/*---- Tratando erros ----*/
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
/*---- Fim do Tratando erros ----*/

// spl_autoload_register(function ($class_name) {
//   include $class_name . '.php';
// });

// // echo '<h1>::Objetos::</h1>';

// $Objeto = new objetos;
// echo $Objeto->texto();


function __autoload($ClassName)
{
    include($ClassName.".php");
}
$Objeto = new objetos;
echo $Objeto->texto();