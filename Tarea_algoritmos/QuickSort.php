<?php
//funcion para intercambiar dos elementos 
function intercambio(&$a,&$b){
    $temp=$a;
    $a=$b;
    $b=$temp;
}

//funcion para la particion

function particion(&$arr,$bajo,$alto){
    //elegir pivote
    $pivote=$arr[$alto];

    //indice de elemento mas pequeño e indica la posicion correcta del pivote encontrado
    $i=$bajo-1;

    //Recorrer arr[bajo..alto]y mover todos los elementos mas pequeños 
    //al lado izquierdo. Los elementos desde bajo hasta i

for($j=$bajo;$j<=$alto-1;$j++){
    if($arr[$j]<$pivote){
        $i++;
        intercambio($arr[$i],$arr[$j]);
    }
}

//mover el pivote
intercambio($arr[$i+1],$arr[$alto]);
return $i+1;
}


//implementacion de QuickSort
function quickSort(&$arr,$bajo,$alto){
    if($bajo<$alto){
        //pi es el indice de particion retornado por el pivote
        $pi = particion($arr,$bajo,$alto);

        //llamadas recursivas para elementos pequeños
        // y elementos mayores o iguales 

        quickSort($arr,$bajo,$pi-1);
        quickSort($arr,$pi+1,$alto);

    }
}

$arr=array(10,7,8,9,1,5);
$n=count($arr);

quickSort($arr,0,$n-1);
for($i=0;$i<count($arr);$i++){
    echo $arr[$i]."";
}

?>