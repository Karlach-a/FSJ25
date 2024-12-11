<?php

abstract class Ave{
    abstract function caminar();
}
class Aguila{
    function caminar(){}
}

class Aguilajuguete extends Aguila{
    function volar(){
        return new Exception("Eres un Juguete! Estoy planeando con esto ");

    }
}

?>