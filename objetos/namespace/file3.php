<?php namespace animate;
  class Animal {
    static function breathes() {echo 'air';}  }
    
  class Animalfly {
    static function flys() {echo 'Fly in the: ';Animal::breathes();}  }
    
//não é recomendável, mas pode usar dois namespaces no mesmo arquivo    
namespace adicional; 
    
class MaisUm {
  static function algomais() {echo 'Segundo namespace no mesmo arquivo \'file3.php\'';}  }?>