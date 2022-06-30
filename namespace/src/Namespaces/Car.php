<?php
namespace Jose\Sobre\Namespaces;

class Car extends Abstrato
{
    public function intro() : string
    {
        return "Choose German! $this->name!";
    }
}