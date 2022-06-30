<?php
namespace Jose\Sobre\Namespaces;

class constant
{
    const MENSAGEM = "Constants, segundo a PSR-1, devem ser maiúscula com espaços separados por traço inferior (underscore)";
    public function constant()
    {
        echo self::MENSAGEM;
    }
}