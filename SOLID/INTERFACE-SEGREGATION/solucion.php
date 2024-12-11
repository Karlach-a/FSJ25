<?php

interface Persona{
    function comer();
    function respirar();
    function dormir();
    function trabajar();
}

interface PersonaTrabajadora{
    function trabajar();
}

class Adulto implements Persona{
    function comer(){}
    function respitat(){}
    function dormir(){}
    function trabajar()
    {
        
    }

}

class Bebe implements Person{
    function comer(){}
    function respirar(){}
    function dormir(){}
    
}

?>