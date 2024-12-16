
<?php
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

//getters de la clase libro 

        /**
         * Get the value of id
         */ 
        public function getId()
        {
                return $this->id;
        }

        /**
         * Get the value of titulo
         */ 
        public function getTitulo()
        {
                return $this->titulo;
        }

        /**
         * Get the value of autor
         */ 
        public function getAutor()
        {
                return $this->autor;
        }

        /**
         * Get the value of categoria
         */ 
        public function getCategoria()
        {
                return $this->categoria;
        }

        public function isDisponible(){
            return $this->disponible;
        }

        /**
         * Set the value of disponible
         *
         * @return  self
         */ 

         
//set de la clase libro 
        public function setDisponible($disponible)
        {
                $this->disponible = $disponible;

               
        }
}
?>