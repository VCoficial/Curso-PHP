<?php

/* formado por 3 elementos
condicion, opcion true */

$edad = 18;
//clasica
if($edad<=18){
    echo'eres menor de edad';
}
else{
    echo 'eres mayor de edad';
}

echo '<hr>';

var_dump($edad<=18);
echo '<br>';
// operador ternario
echo $edad <= 18 ? 'eres menor de edad': 'eres mayor de edad';
// ? es la bifurcacion true, : es la bifurcacion false

?>