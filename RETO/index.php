<?php 

require_once './clases/Producto.php';
require_once './clases/Inventario.php';

    function displayMenu(){
        echo "---- Menu de la Tiendita ---- \n";
        echo "1. Agregar nuevo producto \n";
        echo "2. Eliminar producto \n";
        echo "3. Actualizar producto \n";
        echo "4. Generar Venta \n";
        echo "5. Generar informe \n";
        echo "6. Salir \n";
        echo "Seleccione una opcion: ";
    }

    function prompt($mensaje){
        echo $mensaje;
        $input = trim(fgets(STDIN));
        return $input;
    }

    $inventario = new Inventario([]);

    $producto1 = new Producto(1, "Cuadril", "Ala, Piernita, Culito de pollo empanizado", 1, 10, "Don Pollo", "Comida");
    $producto2 = new Producto(2, "SuperCheese", "Pizza con orilla de queso", 5, 10, "Little Pizza", "Comida");
    $producto3 = new Producto(3, "Texas Whopper", "Hamburguesa con jalapeño", 8, 10, "Burguerking", "Comida");
    $inventario->agregarProducto($producto1);
    $inventario->agregarProducto($producto2);
    $inventario->agregarProducto($producto3);
    
    $flag = true;
    $idProducto = 0;
    while($flag){
        displayMenu();
       $opcion = prompt("");
        switch($opcion){
            case 1: 
                //Obtenemos valores de producto a traves del uso de prompt (funcion para obtener valores de la terminal)
                $idProducto = $idProducto+1;
                $nombre = prompt("Ingrese el nombre del producto:\n");
                $descripcion = prompt("Ingrese la descripcion del producto:\n");
                $precio = prompt("Ingrese el precio del producto:\n");
                $cantidad = prompt("Ingrese la cantidad del producto:\n");
                $categoria = prompt("Ingrese la categoria de su producto: \n");
                $proveedor = prompt("Ingrese quien es el proveedor de su producto: \n");
                //Creamos nuevo producto con los valores recibidos por prompt
                $producto = new Producto($idProducto,$nombre,$descripcion,$precio,$cantidad,$proveedor,$categoria);
                
                //Agregamos el nuevo producto a nuestro inventario
                $inventario->agregarProducto($producto);
                echo "Ingresaste el siguiente producto: \n";
                print_r($inventario);
                break;
            case 2: 
                echo "Estas eliminando un producto \n";
                $idProducto = (int) prompt("Ingrese Id de producto que desea eliminar: \n");

                $resultado = $inventario->eliminarProducto($idProducto);
                if ($resultado){
                    echo"producto eliminado";
                    print_r($inventario);
                }
               else{
                echo "producto no encontrado";
                print_r($inventario);
               }
                break;
            case 3:
                echo "Estas actualizando un producto \n";
                
                $idProducto = (int) prompt("Ingrese Id de producto que desea editar: \n");
                

                break;
            case 4: 
                echo "Estas generando una nueva venta \n";
                break;
            case 5:
                echo "Estas generando un informe \n";
                break;
            case 6:
                echo "Estas saliendo ... \n";
                $flag = false;
                break;

            default: 
            echo "Seleccione una opcion valida \n";

        }


    }
?>