<?php
$servidor = "localhost";
$usuario  = "root";
$senha    = "senha";
$banco    = "banco";

try {
  $conexao = new PDO("mysql:host=$servidor;dbname=$banco", $usuario, $senha);
  // set the PDO error mode to exception
  $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "<p>Bonitamente conectado!</p>";
} catch(PDOException $erro) {
  echo "<p>Conexão falhou: " . $erro->getMessage() . "</p>";
}

$conexao = null; //Finaliza a conexão

/* -------------------------------------------------------------------------------------------- */

try{
  $dbh = new PDO('mysql:host=127.0.0.1:3306;dbname='.$banco.'', $usuario, $senha, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
  die(json_encode(array('outcome' => true)));
}
catch(PDOException $ex){
  die(json_encode(array('outcome' => false, 'message' => 'Unable to connect')));
}

/* -------------------------------------------------------------------------------------------- */