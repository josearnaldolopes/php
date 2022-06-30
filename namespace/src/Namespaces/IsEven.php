<?php
namespace Jose\Sobre\Namespaces;

class IsEven
{
    public function isEven(int $value)
    {
        $value = $value % 2 == 0;
        return $value ? true : false;
    }
}