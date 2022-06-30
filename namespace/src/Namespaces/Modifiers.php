<?php
namespace Jose\Sobre\Namespaces;

class Modifiers
{
    protected $protegido;
    protected function modifiers($valor)
    {
        return 'Um protegido: '.$this->protegido = $valor;
    }
    public function getModifiers($valor)
    {
        return $this->modifiers($valor);
    }
}