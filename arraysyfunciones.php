<?php

//un array puede ser de tipo: unidimensional, bi-dimensional, multidimensional, asociativo, numerico-indexado tambien llamado escalar.

//$array1 = array(1,2,3,4,5,6,7,8,9,10,11,12,13,14,15);

//echo y print no imprimen arrays solo la hace print_r.
//Nota:con echo y print van a estar esperando un string para imprimirlo.
//print_r($array1);

//Dado un array, multiplique los numeros por 2.
/*foreach($array1 as $value){
    $value = $value * 2;
    echo $value."\n";
}

echo "=============================================="."\n";

$lenghtArray = count($array1);

//variable i es nuestro indice
for($i=0; $i<$lenghtArray; $i++){
    //aux es para guardar cada numero del array
    $aux = $array1[$i] * 2;
    echo $aux."\n";
};
*/
/*$num = 5;


//Dado un numero, imprime el mensaje tu numero es {numero}
//function nombre_funcion($a){
    
   //echo "tu numero es ".$a."\n";

//}

//$num = 8;
//nombre_funcion($num);
//nombre_funcion($num);
//nombre_funcion(22);
//nombre_funcion(33);
//nombre_funcion(44);
*/


//Dado un array multiplique los numeros por 5.

$array1 = array(1,2,3,4,5,6,7,8,9,10,11,12,13,14,15);

function multiplicarArray($arr){
    $lenghtArray = count($arr);

    for($i=0; $i<$lenghtArray; $i++){
        $aux = $arr[$i] * 5;
        echo $aux."\n";
    }


}

multiplicarArray($array1);



?>