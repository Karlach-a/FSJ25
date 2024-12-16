<?php 

require_once __DIR__.'/interfaces/IBusqueda.php';
require_once __DIR__.'/interfaces/IGestionPrestamos.php';

class Biblioteca implements IBusqueda, IGestionPrestamos{

    private $libros=[]; //guarda los libros
    private $prestamos=[];//se guardan los prestamos realizdos

    public function agregarLibro($libro){
        $this->libros[]=$libro; //agregamos un libro al array 
    }

    public function buscarLibro($titulo=null, $autor=null,$categoria = null){
        $resultado=[];
        foreach($this->libros as $libro){
            if(($titulo&&$libro->getTitulo()===$titulo)||
                ($autor && $libro->getAutor()=== $autor) ||
                ($categoria && $libro -> getCategoria()===$categoria)){
                    $resultado[]=$libro;
                }
            
            
        }

        return $resultado;
    }


    public function prestarLibro($libroId,$usuario){
        foreach($this->libros as $libro){
            if($libro->getId()=== $libroId&& $libro -> isDisponible()){
                $libro->setDisponible(false);
                $prestamo = new Prestamo($libro,$usuario,date('Y-m-d'),null);
                $this->prestamos[]=$prestamo;
                return "su prestamo de libro ha sido registrado";

            
            }
        }

        return "El libro no esta disponile";
    }

    public function getLibros(){
        return $this->libros;//devuelve el arreglo de los libros almacenados 
    }

    public function getPrestamos(){
        return $this->prestamos;//devuelve el arreglo de los prestamos de libros 
    }

}









?>