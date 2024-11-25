<?php
//Algoritmo BubbleSort
/*Escribe un programa que ordene una lista de números de forma descendente utilizando el algoritmo Bubble Sort. 
La lista puede contener duplicados y valores negativos. Asegúrate de manejar estos casos y muestra la lista antes 
y después de aplicar el algoritmo.*/

function bubbleSort($arr){

    if(count($arr) <=1) return "Necesito al menos 2 datos en el arreglo";
    for($i=0;$i<count($arr)-1;$i++){
        for($j=0; $j < count($arr)-$i-1;$j++){      

            if($arr[$j]<$arr[$j+1]){
                $temp = $arr[$j]; 
                $arr[$j]=$arr[$j+1];
                $arr[$j+1]= $temp;
            }

        }
    }
    
    return $arr;
    

}

$array = [7,8,9,6,-6,5,-5,-8,87];

//lista antes de ordenar
print("Lista antes de ordenar:\n");
print_r($array);

//lista despues de ordenar
print("Lista despues de ordenar:\n");
print_r(bubbleSort($array));


/*Problema de Ordenar Lista con Merge Sort:
Implementa una función que ordene una lista de palabras alfabéticamente
 utilizando el algoritmo Merge Sort. Muestra la lista antes y después de aplicar el algoritmo*/ 

function mergerSort($arr){
    if(count($arr) <=1) return $arr;

    //dividir el arreglo en mitades 
    $mid = floor(count($arr)/2);
    $left= array_slice($arr,0,$mid);
    $right=array_slice($arr,$mid);

    //ordenar cada mitad recursiva 
    $left = mergerSort($left);
    $right=mergerSort($right);

    //combinar las mitades ordenadas 
    return merge($left,$right);

}


//fusionar dos arreglos ordenados 
function merge($left,$right){

    $result =[];
    $i=0;$j=0;
    while($i<count($left)&& $j<count($right)){
        if(strcasecmp($left[$i],$right[$j])<=0){//comparar alfabaticamente
           $result[]=$left[$i];
           $i++;
        }else{
            $result[]=$right[$j];
            $j++;
        }
    }

    while($i<count($left)){
        $result[]=$left[$i];
        $i++;
    }

    while($j<count($right)){
        $result[]=$right[$j];
        $j++;
    }

  
    return $result;
}



$palabras=["Hola","Karla","cachorro","playa"];
//arreglo antes de ordenar
print_r($palabras);
echo"\n";

//arreglo ordenado

print_r(mergerSort($palabras));

/*Problema de Ordenar Lista con Insertion Sort:
Crea un script que ordene una lista de nombres en orden
alfabético utilizando el algoritmo Insertion Sort. 
Muestra la lista antes y después de aplicar el algoritmo. */

function insertionSort($arr){
    if(count($arr) <=1) return "se necesitan 2 nombres";

    for($i=1; $i< count($arr);$i++){
        $key=$arr[$i];

    $j=$i-1;

    while($j >= 0 && strcasecmp($arr[$j],$key)>0){
        $arr[$j+1]=$arr[$j];
        $j--;

    }
    $arr[$j+1] = $key; //colocar el elemento en su posicion correcta
    }

    return $arr;
}

//lista de ejemplos de nombres
$nombres=["Eric","Karen","Marcia","Vane","Kevin","Kathy","Zeke"];

//lista antes de ordenar
print("Lista antes de ordenar \n ");
print_r($nombres);

//lista antes de ordenar
print("Lista ordenada \n");
print_r(insertionSort($nombres));





?>