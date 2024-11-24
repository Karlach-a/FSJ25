<?php
//algoritmos
//serie de intrucciones
//pasos logicos para realizar una tarea 
//pasos ordenados 
//secuencia de acciones que conlleva la resolucion de un problema 

//realizar un maximo de 10 pasos (instrucciones) para agarrar un celular

/*
1- localizar donde esta el telefono
2-verificar que no tenemos ocupadas las manos
3-caminar o movernos hacia donde esta el celular
4-tomar el celular
5-desbloquear el celular 
*/

//BubbleSort- metodo burbuja -> algoritmo pensado en longitud mediana

function bubbleSort($arr){

    if(count($arr) <=1) return "Necesito al menos 2 datos en el arreglo";
    
    for($i=0;$i<count($arr);$i++){
     
        print("este es el buccle con i \n");

        for($j=0; $j+1 < count($arr);$j++){
            //print("Este es el bucle con J y vale : {$arr[$j]} \n");
            //print("Este es el bucle con J y su siguiente es  : {$arr[$j+1]} \n");

            if($arr[$j]<$arr[$j+1]){
                $temp = $arr[$j]; 
                $arr[$j]=$arr[$j+1];
                $arr[$j+1]= $temp;
            }

        }
    }
    
    return $arr;
    //return "ahora si al menos dos datos";

}

$array = [8,10,5,40,7];
print_r(bubbleSort($array));
//print(bubbleSort($array));

function insertionSort($arr){
    if(count($arr) <=1) return "Que gracioso que sos!";

    for($i=1; $i< count($arr);$i++){
        $key=$arr[$i];

    $j=$i-1;

    while($j >= 0 && $arr[$j]>$key){
        $arr[$j+1]=$arr[$j];
        $j--;

    }
    $arr[$j+1] = $key;
    }

    return $arr;


}

//merge sort 

function mergerSort($arr){
    if(count($arr) <=1) return $arr;

    $mid = floor(count($arr)/2);

    $left= array_slice($arr,0,$mid);
    $right=array_slice($arr,$mid);

    $left = mergerSort($left);
    $right=mergerSort($right);

   // print_r($left);
   // print_r($right);

    return merge($left,$right);

}

function merge($left,$right){

    $result =[];//donde se guardan los valores que se comparan 

    while(count($left)>0 && count($right) >0){
        if($left[0] <= $right[0]){
            array_push($result,array_shift($left));
        }else{
            array_push($result,array_shift($right));
        }
    }

    while(count($left) >0){
        array_push($result,array_shift($left));
    }

    while(count($right) >0){
        array_push($result,array_shift($right));
    }
    return $result;
}

print_r(mergerSort([5,1,3,2,8,7,6]));

?>