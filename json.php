
<?php
$array = array('a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5);
echo json_encode($array);

echo "<hr>";

$a = array('<foo>',"'bar'",'"baz"','&blong&', "\xc3\xa9");
echo "Normal: ",  json_encode($a), "\n";
echo "<hr>";
echo "Tags: ",    json_encode($a, JSON_HEX_TAG), "\n";
echo "<hr>";
echo "Apos: ",    json_encode($a, JSON_HEX_APOS), "\n";
echo "<hr>";
echo "Quot: ",    json_encode($a, JSON_HEX_QUOT), "\n";
echo "<hr>";
echo "Amp: ",     json_encode($a, JSON_HEX_AMP), "\n";
echo "<hr>";
echo "Unicode: ", json_encode($a, JSON_UNESCAPED_UNICODE), "\n";
echo "<hr>";
echo "All: ",     json_encode($a, JSON_HEX_TAG | JSON_HEX_APOS | JSON_HEX_QUOT | JSON_HEX_AMP | JSON_UNESCAPED_UNICODE), "\n\n";

echo "<hr>";

$json = '{"Peter":35,"Ben":37,"Joe":43}';
$jsondecode = json_decode($json);
echo $jsondecode->Peter;
echo $jsondecode->Ben;
echo $jsondecode->Joe;

echo "<hr>";