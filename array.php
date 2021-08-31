<?php
$string = "1, 2, 3, 4";
$array = array(1, 2, 3, 4);
foreach ($array as &$value) {
    $value = $value * 2;
    echo $value;
}

$cars = array("Volvo", "BMW", "Toyota");
$arraylength = count($cars);

for($x = 0; $x < $arraylength; $x++) {
  echo $cars[$x];
  echo "<br>";
}

$os = array("Mac", "NT", "Irix", "Linux"); 
if (in_array("Irix", $os)) { 
    echo "Tem Irix";
}
if (in_array("mac", $os)) { 
    echo "Tem mac";
}

$estadosBrasileiros = array(
    'AC'=>'Acre',
    'AL'=>'Alagoas',
    'AP'=>'Amapá',
    'AM'=>'Amazonas',
    'BA'=>'Bahia',
    'CE'=>'Ceará',
    'DF'=>'Distrito Federal',
    'ES'=>'Espírito Santo',
    'GO'=>'Goiás',
    'MA'=>'Maranhão',
    'MT'=>'Mato Grosso',
    'MS'=>'Mato Grosso do Sul',
    'MG'=>'Minas Gerais',
    'PA'=>'Pará',
    'PB'=>'Paraíba',
    'PR'=>'Paraná',
    'PE'=>'Pernambuco',
    'PI'=>'Piauí',
    'RJ'=>'Rio de Janeiro',
    'RN'=>'Rio Grande do Norte',
    'RS'=>'Rio Grande do Sul',
    'RO'=>'Rondônia',
    'RR'=>'Roraima',
    'SC'=>'Santa Catarina',
    'SP'=>'São Paulo',
    'SE'=>'Sergipe',
    'TO'=>'Tocantins'
);

echo "<p>".$estadosBrasileiros['PB']."</p>";