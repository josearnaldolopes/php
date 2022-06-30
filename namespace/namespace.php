<?php
require "vendor/autoload.php";

use Jose\Sobre\AboutNamespace;
use Jose\Sobre\NamespaceInPOO;
use Jose\Sobre\Porsche\NineEleven, Jose\Sobre\Audi\Rs2;
use Jose\Sobre\Namespaces\Name, Jose\Sobre\Namespaces\Local, Jose\Sobre\Namespaces\Fundos as Fundo;
use Jose\Sobre\Namespaces\Porsche, Jose\Sobre\Namespaces\Ferrari, Jose\Sobre\Namespaces\Volkswagen;
use Jose\Sobre\Namespaces\Endereco, Jose\Sobre\Namespaces\EvenOdd, Jose\Sobre\Namespaces\IsEven;
use Jose\Sobre\Namespaces\Modifiers, Jose\Sobre\Namespaces\Inherit, Jose\Sobre\Namespaces\Car;
use Jose\Sobre\Namespaces\Constant, Jose\Sobre\Namespaces\ImplementClass, Jose\Sobre\Namespaces\StaticMethods;
use Jose\Sobre\Namespaces\StaticProperties, Jose\Sobre\Namespaces\XmlFile;

// Instancia de AboutNamespace
$about = new AboutNamespace;
echo $about->namespace() . PHP_EOL;

$about = new NamespaceInPOO;
echo $about->POO() . PHP_EOL;

// Instancia de NineEleven
$porsche = new NineEleven;
echo $porsche->launch() . PHP_EOL;
echo $porsche->turbo() . PHP_EOL;
echo $porsche->internalName() . PHP_EOL;

// Instancia de RS2
$audi = new Rs2;
echo $audi->launch() . PHP_EOL;
echo $audi->wheels() . PHP_EOL;

// Instancia de Name
$espaco = new Name;
echo $espaco->space() . PHP_EOL;

// instancia de Local
Local::onde() . PHP_EOL;

// instancia de Fundo
$fundo = new Fundo;
echo $fundo->quintal() . PHP_EOL;

// instancia de Porsche
$porsche = new Porsche;
echo $porsche->carrera() . PHP_EOL;

// instancia de ferrari
$ferrari = new Ferrari;
echo $ferrari->california() . PHP_EOL;
echo $ferrari->cor("Amarela") . PHP_EOL;

// instancia de Volkswagen
$volkswagen = new Volkswagen;
echo $volkswagen->golf() . PHP_EOL;

// instancia de Endereco
$endereco = new Endereco;
$endereco->arquivo = $_SERVER['PHP_SELF'];
echo "Endereço: " . $endereco->endereco() . PHP_EOL;

// instancia de EvenOdd
$parouimpar = new EvenOdd(1, 3);

// instancia de IsEven
$isEven = new IsEven;
echo $isEven->isEven(267) ? "Par" . PHP_EOL : "Impar" . PHP_EOL;
// echo var_dump($parouimpar->test(669));

// instancia de Modifiers
$modifier = new Modifiers;
echo $modifier->getModifiers("String de Modifier") . PHP_EOL;

// instancia de Inherit
$inherit = new Inherit;
echo $inherit->kid() . PHP_EOL;

// instancia de Constant
$constant = new Constant;
echo $constant->constant() . PHP_EOL;

// instancia de Car
$german = new Car("Porsche Cayman");
echo $german->intro() . PHP_EOL;

// instancia de Interface
$interface = new ImplementClass;
echo $interface->sound() . PHP_EOL;

// instancia de StaticMethods
StaticMethods::welcome() . PHP_EOL;

// instancia de StaticProperties
echo StaticProperties::$value . PHP_EOL;

// instancia de XmlFile, lendo um XML
$xml = new XmlFile;
echo $xml->lerXml();

// is_object testa se é um objeto ou não
if (is_object($xml)) {
    echo "É objeto" . PHP_EOL;
} else {
    echo "Não é" . PHP_EOL;
}

// Aqui vamos trabalhar com namespaces diferentes
use jose\arnaldo\diferente, jose\arnaldo\JoseArnaldo;
$diferente = new diferente;
echo $diferente->namespaceDiferente();

$josearnaldo = new JoseArnaldo("Inglês", "PHP 'with OOP'");
echo $josearnaldo->josearnaldo();

$josearnaldoEsp = new JoseArnaldo("Espanhol", "PHP");
echo $josearnaldoEsp->josearnaldo();