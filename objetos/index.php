<?php
/*---- Tratando erros ----*/
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
/*---- Fim do Tratando erros ----*/

include "objetos.php";

echo "<title>PHP programando por Objetos</title>"; //Title do HTML
echo '<h1>::Objetos::</h1>';


$Objeto = new Objeto;
$Objeto->propriedade = "Valor da propriedade com tags <b>HTML</b>"; //Ela foi criada, mas seu valor foi dado aqui
$Objeto->metodo("Chamando o método"); //Método criado acima, mas com valor dado aqui

$ObjetoDois = new ObjetoDois;
$ObjetoDois->propriedade = "<p>Valor da \$propriedade herdada (Está na Class ObjetoDois)</p>";
$ObjetoDois->metodo("Parente herdade em 'parent::metodo(\$data);'");
echo "<h4>";
$ObjetoDois->metodoDois("Valor para se passar para o método", true, date("D M j G:i:s T Y"));
echo "</h4>";

/* -------------------------------------------------------------------------------------------- */

$operacoes = new operacoes();
echo $operacoes->apresentacao() . PHP_EOL;
echo $operacoes->somar(5.5, 2) . PHP_EOL;
echo $operacoes->dividir(5, 2) . PHP_EOL;
echo $operacoes->multiplicar(2.5, 2.7) . PHP_EOL;
echo $operacoes->subtracao(25, 2) . PHP_EOL;
echo $operacoes->historia() . PHP_EOL;
echo $operacoes->regradetres(3, 5, 7). "m2" . PHP_EOL;
echo $operacoes->regradetres(15, 18, 10). " Horas" . PHP_EOL;
echo $operacoes->porcentagem(77, 85)."%" . PHP_EOL;

// echo $operacoes->somar($operacoes->dividir(18, 2), $operacoes->subtracao(5, 6)) . PHP_EOL;

new soma(10, 11);

/* -------------------------------------------------------------------------------------------- */

echo '<h2>::Estático::</h2>';

echo estatico::$estatico;
echo estatico::$value;
estatico::ola();

$pi = new pi();
echo "<p>".$pi->staticValue()."</p>"; //Evocando pela function
echo "<p>".pi::$value."</p>"; //Evocando pela class > propriedade

echo "<p>".pistatic::$value."</p>"; // Mostra a propriedade static

new Aplicacoes('Gimp');
new Aplicacoes('Atom');
new Aplicacoes('vscode');
new Aplicacoes('Postman');
new Aplicacoes('Audacious');
new Aplicacoes('Inkscape');

greeting::welcome(); // chamando metodo static

/* -------------------------------------------------------------------------------------------- */

echo '<h2>::Constantes::</h2>';

$apple = new Fruit("Maça");
echo "<h3>Nome:".$apple->name()."</h3>";
echo "<br>";
echo "familia():".$apple->familia();
$apple->color = "Green";
echo "<p>".$apple->color()."</p>";

$Product = new Product("A Fruta");
$Product->coast = 25.76;
echo "Valor R$: ".$Product->coast()."<br>".$Product->familia();
echo "<p>".Fruit::Nome."</p>";

/* -------------------------------------------------------------------------------------------- */

echo '<h2>::Classes Abstratas::</h2>';

// Create objects from the child classes
$audi = new audi("Audi");
echo $audi->intro();
echo "<br>";

$volvo = new volvo("Volvo");
echo $volvo->intro();
echo "<br>";

$citroen = new citroen("Citroen");
echo $citroen->intro();

echo '<h2>::Objetos de uma classe herdada::</h2>';

$class = new ChildClass;
echo $class->prefixName("John Doe");
echo "<br>";
echo $class->prefixName("Jane Doe");

/* -------------------------------------------------------------------------------------------- */

echo '<h2>::Interface::</h2>';


// Create a list of animals
$cat = new Cat();
$dog = new Dog();
$mouse = new Mouse();
$animals = array($cat, $dog, $mouse);

// Tell the animals to make a sound
foreach($animals as $animal) {
  $animal->makeSound();
}

/* -------------------------------------------------------------------------------------------- */

echo '<h2>::Traits::</h2>';

$obj = new Welcome();
$obj->msg1();
echo "<br>";

$obj2 = new Welcome2();
$obj2->msg1();
$obj2->msg2();

/* -------------------------------------------------------------------------------------------- */

echo '<h2>::Traits::</h2>';

// Use the iterator as an iterable
$iterator = new MyIterator(["a", "b", "c"]);
printIterable($iterator);

/* -------------------------------------------------------------------------------------------- */

echo '<h2>::Construtor::</h2>';

$construtor = new Construcao("Primeiro valor", "Segundo Valor");
echo "Valor: {$construtor->valor} <br>";
echo "Outro: {$construtor->outro}";

/* -------------------------------------------------------------------------------------------- */

echo '<h2>::Variáveis Dinamicas::</h2>';

$variavel = new StdClass;
$variavel->Nome = "Zé";
$variavel->SobreNome = "Arnaldo";

echo "O nome é {$variavel->Nome} e o Sobrenome {$variavel->SobreNome}, anote!";