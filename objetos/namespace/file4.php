<?php
// /*---- Tratando erros ----*/
// ini_set('display_errors', '1');
// ini_set('display_startup_errors', '1');
// error_reporting(E_ALL);
// /*---- Fim do Tratando erros ----*/
  namespace fub;
  /*---- Fontes: http://www.diogomatheus.com.br/blog/php/entendendo-namespaces-no-php/ and https://www.php.net/manual/en/language.namespaces.php#104136 ----*/
  // The keyword 'use' has two different applications, but the reserved word table links to here.
  //It can apply to namespace constucts:
  include 'file1.php';
  // include 'file2.php';
  // include 'file3.php';
  function __autoload($ClassName)
{
    include($ClassName.".php");
}
  use foo as feline;
  use foo\Cat;
  use bar as canine;
  use animate;
  use adicional;
  echo feline\Cat::says(), "<br />\n";
  echo Cat::says(), "<br />\n";
  echo canine\Dog::says(), "<br />\n";
  echo animate\Animal::breathes(), "<br />\n"; 
  echo animate\Animalfly::flys(), "<br />\n";
  echo adicional\MaisUm::algomais(), "<br />\n";  ?>