<?php

//por defecto
$frutas=["papaya",9,true,"mango",3.45];
//Impresion del arreglo
var_dump($frutas);
echo '<hr>';
print_r($frutas);

//asociativo
$equipos=[
    "n1"=>"deportivo cali",
    "n2"=>89,
    "c4"=>8.67,
    "estado"=>true,
];
echo '<br>';
echo '<pre>';
var_dump($equipos);
echo '</pre>';

//Posición Especifica
echo '<br>';
echo $equipos["c4"];
echo '<br>';
echo $frutas[3];
echo '<br>';
echo $frutas[3]."-".$equipos["c4"];
echo '<br>';
echo '<hr>';

//Recorrer el Array
foreach($equipos as $equipo){
    echo $equipo.'<br>';
}

//foreach

?>