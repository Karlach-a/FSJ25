<?php 
class Biblioteca{
    private $libros=[];
    private $usuarios=[];
    private $prestamos = [];

    public function agregarLibro($libro){
        $this->libros[]=$libro;
    }



}
Class Libro{
    private $id;
    private $titulo;
    private $autor;
    private $categoria;
    private $disponible;

    public function __construct($id,$titulo,$autor,$categoria,$disponible=true)
    {
        $this->id=$id;
        $this->titulo=$titulo;
        $this->autor=$autor;
        $this->categoria=$categoria;
        $this->disponible=$disponible;
    }


}
Class Autor{
    private $id;
    private $nombre;

    public function __construct($id,$nombre)
    {
        $this->id=$id;
        $this->nombre=$nombre;
    }
}

Class Categoria{
    private $id;
    private $nombre;
    
    public function __construct($id,$nombre){
        $this->id=$id;
        $this->nombre=$nombre;
    }
}

Class Usuario{
    private $id;
    private $nombre;
    private $email;

    public function __construct($id,$nombre,$email)
{
    $this->id=$id;
    $this->nombre=$nombre;
    $this->email=$email;
}

}
Class Prestamo{
    private $id;
    private $libro;
    private $usuario;
    private $fechaInicio;
    private $fechafin;

    public function __construct($id,$libro,$usuario,$fechainicio,$fechafin)
    {
        $this->id=$id;
        $this->libro=$libro;
        $this->usuario=$usuario;
        $this->fechaInicio=$fechainicio;
        $this->fechafin=$fechafin;
    }

        
}



?>