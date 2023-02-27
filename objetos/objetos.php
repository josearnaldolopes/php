<?php

class Objeto {
  public $propriedade; //Pode ser acessada por qualquer um em qualquer momento
  private $propriedadeprivada = "Não Publica"; //Pode ser acessado pela classe que foi criada
  protected $propriedade2 = "Valor da segunda propriedade"; //Pode ser acessada pela classe que foi criada e as herdadas
  function metodo($valor) {
    echo "Propriedade um: " . $this->propriedade."<br>";
    echo "Propriedade dois: " . $this->propriedade2."<br>";
    echo "Propriedade privada: " . $this->propriedadeprivada."<br>";
    echo "\$valor: ".$valor."<br>";
  }
}

class ObjetoDois extends Objeto {
  public $propriedade3;
  // echo "Propriedade privada: " . $this->propriedade2;
  function metodoDois($valor, $valor2, $data) {
    echo "MetodoDois(): ".$valor.". Data: ".$data;
    if ($valor2) {
      $variavel = "Variável dentro de um metodo";
      print '<p>$valor2 é verdadeiro.</p>'.$variavel;
    }
    parent::metodo($data);
  }
}

class estatico {
  static $estatico = "<p>Estático</p>";
  public static $value = "Propriedade direto na tela";
  public static function ola() {
    echo "<p>Printa na tela direto</p>";
  }
}

class pi {
  public static $value = 3.14159;
  public function staticValue() {
    return self::$value;
  }
}

class pistatic {
  public static $value = 3.14159;
}

class greeting {
  public static function welcome() {
    echo "Hello World!";
  }
}


class Fruit {
  protected $name;
  public $color;
  protected const FAMILIA = "Legumes";
  const Nome = "José Arnaldo de Almeida Lopes";
  
  public function __construct($name) {
    $this->name = $name;
  }
  public function __destruct() {
    $this->name;
    // echo "Comendo a {$this->name}";
  }
  function name() {
    return $this->name;
  }
  function color() {
    return $this->color;
  }
  function familia() {
    echo "<p>Familia: ".self::FAMILIA."</p>";
  }
}

class Product extends Fruit {
  public $coast;
  public $produto;
  function __construct($produto) {
    $this->$produto = $produto;
  }
  function __destruct() {
  }
  function coast() {
    return $this->coast * 2 . parent::familia() . parent::name();
  }
}


abstract class ParentClass {
  // Abstract method with an argument
  abstract protected function prefixName($name);
}

class ChildClass extends ParentClass {
  public function prefixName($name) {
    if ($name == "John Doe") {
      $prefix = "Mr.";
    } elseif ($name == "Jane Doe") {
      $prefix = "Mrs.";
    } else {
      $prefix = "";
    }
    return "{$prefix} {$name}";
  }
}


// Interface definition
interface Animal {
  public function makeSound();
}

// Class definitions
class Cat implements Animal {
  public function makeSound() {
    echo " Meow ";
  }
}

class Dog implements Animal {
  public function makeSound() {
    echo " Bark ";
  }
}

class Mouse implements Animal {
  public function makeSound() {
    echo " Squeak ";
  }
}


trait message1 {
  public function msg1() {
    echo "OOP is fun! ";
  }
}

trait message2 {
  public function msg2() {
    echo "OOP reduces code duplication!";
  }
}

class Welcome {
  use message1;
}

class Welcome2 {
  use message1, message2;
}

// Create an Iterator
class MyIterator implements Iterator {
  private $items = [];
  private $pointer = 0;

  public function __construct($items) {
    // array_values() makes sure that the keys are numbers
    $this->items = array_values($items);
  }

  public function current() {
    return $this->items[$this->pointer];
  }

  public function key() {
    return $this->pointer;
  }

  public function next() {
    $this->pointer++;
  }

  public function rewind() {
    $this->pointer = 0;
  }

  public function valid() {
    // count() indicates how many items are in the list
    return $this->pointer < count($this->items);
  }
}

// A function that uses iterables
function printIterable(iterable $myIterable) {
  foreach($myIterable as $item) {
    echo $item;
  }
}


class Construcao {
  function __construct($valor, $outro = "Outro"){
    $this->valor = $valor;
    $this->outro = $outro;
  }
  function __destruct() {
  }
}


// Parent class
abstract class Car {
  public $name;
  public function __construct($name) {
    $this->name = $name;
  }
  abstract public function intro() : string;
}

// Child classes
class Audi extends Car {
  public function intro() : string {
    return "Choose German quality! I'm an $this->name!";
  }
}

class Volvo extends Car {
  public function intro() : string {
    return "Proud to be Swedish! I'm a $this->name!";
  }
}

class Citroen extends Car {
  public function intro() : string {
    return "French extravagance! I'm a $this->name!";
  }
}

class Aplicacoes {
  public static $quantidade;
  function __construct($app) 
  {
    self::$quantidade ++;
    $num = self::$quantidade;
    if ($num == 3) {
      echo "Terc. Aplicação nr . $num: $app<br>\n";
    } else {
      echo "Uma Aplicação nr . $num: $app<br>\n";
    }
  }
}



class matematica {
  private $apresentacao = "Isso é Matemática!";
  private $historia = "Surgiu no Antigo Egito e no Império Babilônico, por volta de 3500 a.C.";
  public function apresenta() {
    return $this->apresentacao;
  }
  public function historia() {
    return $this->historia;
  }
}

class operacoes extends matematica {
  public function apresentacao() {
    return parent::apresenta() ." ". parent::historia();
  }
  public function somar($um, $dois) {
    return $um + $dois;
  }
  public function dividir($um, $dois): float {
    return $um / $dois;
  }
  public function multiplicar($um, $dois): float {
    return $um * $dois;
  }
  public function subtracao($um, $dois): float {
    return $um - $dois;
  }
  public function porcentagem($parte, $total): float {
    return round($parte * 100 / $total);
  }
  public function regradetres($v1, $v2, $novo): float {
    return round($v1 * $v2 / $novo, 2);
  }
  public function historia() {
    return "Funcao Historia sobreescrita";
  }
}

class soma {
  public function __construct($NumUm, $NumDois)
  {
    echo $NumUm + $NumDois . PHP_EOL;
  }
  public function __destruct() {
    // print "Destruindo " . __CLASS__ . "\n";
  }
}