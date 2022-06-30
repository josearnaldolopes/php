<?php
namespace Jose\Arnaldo;

class JoseArnaldo
{
    public $lingua;
    public $linguagem;
    function __construct($lingua, $linguagem) {
        $this->lingua = $lingua;
        $this->linguagem = $linguagem;
    }
    public function get_name() {
        return $this->lingua;
    }
    public function josearnaldo() {
        return "Será que vou trabalhar em {$this->get_name()} usando {$this->linguagem}?".PHP_EOL;
    }
}