<?php

$numeros = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);

printf("Antes: ");
print_r($numeros);


$cuadrado_numeros = square($numeros);

printf("Despues: ");
print_r($cuadrado_numeros);


function square($numbers)
{
    for($i=0; $i<count($numbers); $i++)

    {
        $numbers[$i] *= $numbers[$i];

    }
    
    return $numbers;

}



?>