<?php
// Inicia o cURL
$curl = curl_init();
// Retorna a resposta de setado como false
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
// Configura a URL
curl_setopt($curl, CURLOPT_URL, 'https://cat-fact.herokuapp.com/facts');
// Executa
$resultado = curl_exec($curl);
// Fecha a lojinha
curl_close($curl);

// Mostra o json (Statham)
$json = json_decode($resultado, true);
// var_dump($json);

for ($number=0; $number <= 4; $number++) {
    echo $json[$number]["text"]."<br>";
}
echo $json[0]["text"];
echo "<br>";
echo $json["status"]["title"];
echo "<br>";
echo "<img src=".$json["status"]["default_thumb"].">";
echo "<br>";
// echo $json["video"]["tags"];
echo "<br>";

// echo $resultado;
