<?php
namespace Jose\Sobre\Namespaces;

class XmlFile
{
    public function lerXml()
    {
        $xml = simplexml_load_file("xmlFile.xml") or die("Error: Cannot create object");
        echo "Leitura do XML" . PHP_EOL;
        echo $xml->to . PHP_EOL;
        echo $xml->from . PHP_EOL;
        echo $xml->heading . PHP_EOL;
        echo $xml->body. PHP_EOL;
    }
}