<?php

$array1 = array(1,2,3,4,5,6,7,8,9,10,11,12,13);

//Dado un array, multiplique los numeros por 5.

//los parametros pueden ser muchos tipos de datos, string, array, objetos
function multiplicararray ($arr){
    $lenghArray = count($arr);

    for($i=0; $i < $lenghArray; $i++){
    $aux = $arr[$i] * 5;
    echo $aux."\n";
}

}
multiplicarArray($array1);
?>