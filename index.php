<?php
    //Comentario de una linea
    /* Comentario
    Multilinea
    */

    //Imprimir datos
    echo "Holiwis llegamos a PHP \n";
    print "Holiwis desde print \n";

    //Variables
    //Inicializar una variable
    $nombre;
    $nombre = "Jairo ";

    $apellido = "Vega Romero";

    $string = 'Cadena de texto';
    $boolean = true;
    $numero = 10;
    $decimal = 7.5;
    
    //Template String
    //$template = `${nombre} ${apellido} `;
    $template = "{$nombre} {$apellido}";
    print($template);


    //Operadores 
    //Operador de concatenacion
    print($nombre.$apellido."\n");

    //Operador matematico
    $suma = $numero + $decimal;
    $resta = $numero - $decimal;
    $multiplicacion = $numero * $decimal;
    $division = $numero / $decimal;
    $residuo = $numero % $decimal;

    //operadores de comparacion 
    $igualdad = 5== "5";
    $igualdadEstricta = 5 === "5";
    $desigualdad =5 != "5";
     $desigualdadEstricta =5 !== "5";

    $mayorQue = 5>5;
    $mennorQue= 5<5;
    $mayorIgual= 5>=5;
    $menorIgual = 5<= 5;

    //estructuras de coltrol 
    //if-if Else- if Else 

    $condicion = true;

     if ($condicion){
        print('Caso true');
     } else {
        print('Caso false');
     }

     //swith

     $opcion;

     switch($opcion){
        case 1:
            print("Elegiste la opcion 1");
            break;

        default:"Elige una opcion correcta";
     }

//ternario 

$ternario = 5 > 5 ? print("holis") : print("chao");

//operadores logicos
//and &&
//Or 

//funciones
function Saludar(){
    print("hola");

}

function Despedir(){
    return
    print("CHao \n");
    
}

$resultado = Saludar();

//funciones anonimas

$funcioncita = function(){
    print("soy anonima ");
};

//funcion flecha

$flechita =fn()=>(print("Soy una funcion flechita"));



?> 