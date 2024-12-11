<?PHP 

//Responsabiliad unica- cada parte funcional de nnuestra codigo tiene que tener un unica responsabilidad 
//no sobrecargar clases



class MenuTiendaRopa{

    function mostrarProductosMenu(){}       // SI
    function agregarProductosMenu(){}       // SI
    function eliminarProductoMenu(){}       // SI 
}

class Carrito{
    function agregarProductoCarrito(){}     // SI
    
    function pagarCarrito(){}               // NO
}

class Sesion{
    function logIn(){}                      // SI
    function logOut(){}                     // SI
}

?>

