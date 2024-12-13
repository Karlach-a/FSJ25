<?php 

    class Venta{
        private $idVenta;
        private $listaProductos;
        private $total;

        public function __construct( $idVenta,  $listaProductos)
        {$this->idVenta = $idVenta;
        $this->listaProductos = $listaProductos;
        $this->total = 0;
        }
	
        
        function registroVenta($usuario){
            //Registrar una venta con un usario referenciado
         
            $this->calcularTotal();
            echo"Venta de registrada exitosamente:\n";
            echo "id Venta:".$this->idVenta."\n";
            echo "Usuario:".$usuario->getNombre()."\n";
           
            foreach($this->listaProductos as $producto){
                echo "-" . $producto->getNombre()."| precio".$producto->getPrecio()."\n";
            }

            echo "Total: ".$this->total."\n";

        }

        function calcularTotal(){
            //Metodo para  calcular total de la venta
            foreach ($this->listaProductos as $key => $producto) {
               $this->total += $producto->getPrecio();
            }
            return $this->total;
        }

        /**
         * Get the value of listaProductos
         */ 
        public function getListaProductos()
        {
                return $this->listaProductos;
        }

        /**
         * Set the value of listaProductos
         *
         * @return  self
         */ 
        public function setListaProductos($listaProductos)
        {
                $this->listaProductos = $listaProductos;

                return $this;
        }

        /**
         * Get the value of total
         */ 
        public function getTotal()
        {
                return $this->total;
        }

        /**
         * Set the value of total
         *
         * @return  self
         */ 
        public function setTotal($total)
        {
                $this->total = $total;

                return $this;
        }

        /**
         * Get the value of idVenta
         */ 
        public function getIdVenta()
        {
                return $this->idVenta;
        }
    }

?>