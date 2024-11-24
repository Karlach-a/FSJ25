<?php 
function busquedaBinaria($arr,$val){

    //iniciamos los limites del arreglo
    $inicio=0;
    $fin=count($arr)-1;

    while($inicio<=$fin){
        //calculamos el indice del punto medio
   $pm=floor(($inicio+$fin)/2);

   //comparamos el valor medio con el valor buscado
    
   if($arr[$pm]===$val){
    //si el valor medio es igual al buscado, devolvemos el indice
    return $pm;

   }elseif($arr[$pm]<$val){
    //si el valor buscado es mayor que el valor medio,
    // ajustamos el limite inferior(descartamos la mitad izquierda)
    $inicio=$pm+1;

   }else{
    //si el valor buscado es menor que el valor medio
    //ajustamos el limite superios (descartamos la mitad derecha)
    $fin=$pm-1;
   }
//si el bucle termina y no encontramos el valor, devolvemo -1


    }

    return -1;
}

//ejemplo de uso 
$arr=[1,3,5,7,9,11];//Array ordenado 
$valorBuscado=7;//valor que queremos buscar

$resultado=busquedaBinaria($arr,$valorBuscado);

//mostramos el resultado
if($resultado !==-1){
    echo "El Valor $valorBuscado se encotnro en el indice $resultado ";

}else{
    echo"El vaor $valorBuscado no esta en el array.";
}

?>