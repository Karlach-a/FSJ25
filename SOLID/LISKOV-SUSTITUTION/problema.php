<?php 

//una clase padre tiene que poder ser remplasada por su clase hija sin bloqueos o problemas en la ejecucion 

class Persona{
    function comer(){}
    
    function dormir(){}
   
    function trabajar(){}
    
    function respirar(){}
}

class bebe extends Persona{

    function trabajar(){
        return new Exception("un bebe no deberia trabajar");
    }
}

class Aguila{
    function volar(){}
}

class Aguilajuguete extends Aguila{
    function volar(){
        return new Exception("Eres un Juguete! Estoy planeando con esto ");

    }
}
?>