<?php 

class Persona {
    private $nombre;

    function __($nombreParam)
    {
        $this->nombre =$nombreParam;
    }

    function respirar(){
        print("estoy respirando iffff");

    }

    //getters y setters

    function getNombre(){
        return $this->nombre;
    }

    function setNombre($nombreParam){
        $this->nombre = $nombreParam;
    }





}

class Programador extends Persona{ 
    private $chicharra;
    private $lenguajesProgramacion; 
    private $estado;

    function __construct($nombre, $pcParam, $lenguajesProgramacionParam, $estadoParam=
    "activo"){
        parent::__construct ($nombre);
        $this->estado = $estadoParam;
        $this->chicharra=$pcParam;
        $this->lenguajesProgramacion=
        $lenguajesProgramacionParam;

    }

    function respirar(){
        print("No respiro, la presion");
    }

    function getChicharra(){
        return $this->chicharra;
    }
    
    function setChicharra ($pcParam){
        $this->chicharra = $pcParam;
    }

    function getestado(){
        return $this->estado;
    }
    
    function setestado ($estadoParam){
        $this->estado= $estadoParam;
    }

    function getlenguajesProgramacion($lemguajesProgramacionParam){
        return $this->lenguajesProgramacion;
    }
    
    function setlenguajesProgramacion ($lenguajesProgramacionParam){

        $this->lenguajesProgramacion= $lenguajesProgramacionParam;
    }
}
    

?>