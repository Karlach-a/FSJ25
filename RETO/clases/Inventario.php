<?php 

    class Inventario{
        private  $listaProductos;

        public function __construct($listaProductos)
        {
            $this->listaProductos = $listaProductos;}
	
        public function agregarProducto($producto){
            // validar que el dato que me ingresen sea un objeto de PRODUCTO
            $this->listaProductos[] = $producto; 
        }

        public function eliminarProducto($id){
            // Quitar un dato de la lista de PRODUCTOS

            foreach ($this->listaProductos as $key => $producto) 
            { if ($producto->getId() === $id) {
                 unset($this->listaProductos[$key]); 
                    return true;}
            }
            
        }

        public function buscarId($id){
            foreach ($this->listaProductos as $producto) 
            { if ($producto->getId() === $id) {
                 
                    return $producto;}
            }

        }

        public function buscarProductoPorCategoria($categoria){
            // Filtrar la lista de productos por la categoria buscada

            return array_filter($this->listaProductos, function($producto) use ($categoria) {
                return $producto->categoria === $categoria;
            });
        }

        public function generarInforme(){
            // Generar informe de productos de X precio
            // Generar informe de productos con stock mas bajo a X numero
            // Generar informe de productos sin stock
            // Generar informe de productos con stock actualizado
        }


    }


?>