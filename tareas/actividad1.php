<?php
/*Escribe una función llamada generar Fibonacci que reciba un número n como parámetro y genere los primeros n términos de la serie Fibonacci. La serie comienza con 0 y 1, y cada término subsiguiente es la suma de los dos anteriores*/ 

function generarFibonacci($n){
$n1=0;
$n2=1;

print $n1. "\n";

for($i=1; $i<$n;$i++){
    print $n2."\n";
    $next = $n1+$n2;
    $n1=$n2;
    $n2=$next;

}

}

//imprimimos
$n=20;
generarFibonacci($n);

/*Problema de números Primos:
Crea una función llamada esPrimo que determine si un número dado es primo o no. Un número primo es aquel que solo es divisible por 1 y por sí mismo.
*/ 

function esprimo($primo){

    for($i=2;$i<$primo;$i++){

        if(($primo%$i)==0){ //comprobamos si el numero es divisible solo por si mismo 
            return false;
        }
    }

  return true;
}

$primo=19;

if(esprimo($primo)){
    print "es primo";
}else{
    print "no es primo";
}


/*Problema de Palíndromos:
Implementa una función llamada esPalindromo que determine si una cadena de texto dada es un palíndromo. Un palíndromo es una palabra, frase o secuencia que se lee igual en ambas direcciones.*/

function esPolindromo($p=''){
    $palabra=trim($p);//funcion trim para eliminar espacios en blaco 
    if($palabra==''){
        return false;
    }
    else{
        $new_word='';//contendra la palabre invertida 
        for($i=strlen($palabra)-1;$i>=0;$i--){ //recorre cada caracter hacia el principio 
            $new_word.=substr($palabra,$i,1);
        }

        $cadena="La palabra [".$palabra;
        if(strtolower($palabra)==strtolower($new_word)){
            $cadena.="] si es polindrome";
            $estado=true;
        }else{
            $cadena .="] no es polindrome";
            $estado=false;
        }

        return $cadena;
    }

}

$p="somos";
$resultado=esPolindromo($p);//llamado a la funcion 
print $resultado;


?>