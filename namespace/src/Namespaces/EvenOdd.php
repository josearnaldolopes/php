<?php
namespace Jose\Sobre\Namespaces;

class EvenOdd
{
    protected $initial;
    protected $final;

    public function __construct(int $initial, int $final)
    {
        $this->initial = $initial;
        $this->final = $final;
    }
    public function __destruct()
    {
        for ($number=$this->initial; $number<$this->final +1; $number++)
        {
            $evenodd = $number % 2 == 0;
            $evResult = $evenodd ? "É Par" : "É Impar";
            echo "Num. " . $number . " é " . $evResult .PHP_EOL;
        }
    }

}