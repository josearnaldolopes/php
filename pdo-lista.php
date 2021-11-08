<?php
$user = "root";
$password = "password";
$database = "database";
$table = "tabela";

try {
  $db = new PDO("mysql:host=localhost;dbname=$database", $user, $password);
  echo "<h2>TODO</h2><ol>";
  foreach($db->query("SELECT DISTINCT termo FROM $table WHERE termo <> '' ORDER BY termo ASC") as $row) {
    echo "<li>" . $row['termo'] . "</li>";
  }
  echo "</ol>";
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}

//veja tb o arquivo conexao.php