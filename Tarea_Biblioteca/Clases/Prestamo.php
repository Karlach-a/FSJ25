
<?php
Class Prestamo{
    
    private $libro;
    private $usuario;
    private $fechaInicio;
    private $fechafin;

    public function __construct($libro,$usuario,$fechaInicio,$fechafin)
    {
        $this->libro=$libro;
        $this->usuario=$usuario;
        $this->fechaInicio=$fechaInicio;
        $this->fechafin=$fechafin;
    }


   
        

        /**
         * Get the value of libro
         */ 
        public function getLibro()
        {
                return $this->libro;
        }

        /**
         * Get the value of usuario
         */ 
        public function getUsuario()
        {
                return $this->usuario;
        }

        /**
         * Get the value of fechainicio
         */ 
        public function getFechaInicio()
        {
                return $this->fechaInicio;
        }

        /**
         * Get the value of fechafin
         */ 
        public function getFechafin()
        {
                return $this->fechafin;
        }

        public function finalizarPrestamo(){ //establece la fecha de fin del prestamo 
            $this->fechafin=date('Y-m-d');
            $this->libro->setDisponible(true);
        }
}

?>
