<?php 
$opcion=3;
//estructura de decision multiple
switch ($opcion){
    case '1':
        echo 'Ordenaste Pizza';
        break;
    case '2':
        echo 'Ordenaste Perro Caliente';
        break;
    case '3':
        echo 'Ordenaste Hamburguesa';
        break;
    case '4':
        echo 'Ordenaste Desgranado';
        break;
    case '5':
        echo 'Ordenaste Ensalada';
        break;
    default:
        echo 'debe elegir una opcion Valida del menu !';                   
}

echo "<br>";

?>