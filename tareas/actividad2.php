<?php 
/*Problema de Lista Invertida:
Escribe un programa que tome un array de números y devuelva una nueva lista que contenga los mismos elementos en orden inverso. */
$array=[];
function invertirlista($array){
    return array_reverse($array);//funcion que invierte el arreglo 
}

$array = [1,2,3,4,5,6,7,8,9,10];
$result=invertirlista($array);
print "lista invertida:";
print_r($result);

/*  Problema de Suma de Números Pares:
Crea un script que sume todos los números pares en un array de números enteros*/


function sumarPares($array){
    $suma=0;
    foreach($array as $numeros){
        if($numeros%2 == 0){
            $suma += $numeros;
        }
    }
      return $suma;
}

$array=[1,2,3,4,5,6,7,8,9,10];
$resultado = sumarPares($array);
print"Suma de numeros pares: " .$resultado;

/*Problema de Frecuencia de Caracteres:
Implementa una función que tome una cadena de texto y devuelva un array asociativo que muestre la frecuencia de cada carácter en la cadena.*/

function frecuenciadeCaracteres($cadena){
    $frecuencia=[];

    for ($i=0; $i<strlen($cadena);$i++){ 
        $caracter=$cadena[$i];

        if(array_key_exists($caracter,$frecuencia)){//verificamos si el caracter existe con la funcion array_key_exists
            $frecuencia[$caracter]++;// acumulamos el caracter igual 

        } else {
            $frecuencia[$caracter]=1;
        }
    }

    return $frecuencia;
}

$cadena="hola como estas";
$resultado=frecuenciadeCaracteres($cadena);
print_r($resultado);

/*Problema de Bucle Anidado:
Escribe un programa que utilice bucles anidados para imprimir un patrón de asteriscos en forma de pirámide.
*/ 

function imprimirPiramide($alto){
    //para cada fila

    for($i=1; $i<=$alto;$i++){
        for($j=$i;$j < $alto;$j++){
            print " ";
        }

        //imprimir asteriscos

        for($k=1;$k <= (2* $i-1);$k++){
            print "*";
        }

        print "\n";
    }
}

$alto=7;
imprimirPiramide($alto);
?>