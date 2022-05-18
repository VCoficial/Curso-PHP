<?php 
/*4 El director de una escuela está organizando un viaje de estudios, y requiere determinar cuánto
debe pagar a la compañía de viajes por el servicio. La forma de cobrar es la siguiente: si son
100 alumnos o más, el costo por cada alumno es de $6.500; de 50 a 99 alumnos, el costo es
de $7.000, de 30 a 49, de $9.500, y si son menos de 30, el costo de la renta del autobús es de
$400.000 dividido entre los alumnos. */

$alumnos = $_POST['cdalumnos'];
$resultado=0;
if ($alumnos<=100) {
    $resultado=(6500*$alumnos);
    echo 'El valor de tu embarque '.$resultado;
}
else{   
if ($alumnos>=50 and $alumnos<=99) {
    $resultado=(7000*$alumnos);
    echo 'El valor de tu embarque '.$resultado;
}
    else{
        if ($alumnos>=30 and $alumnos<=49 ) {
            $resultado=(9500*$alumnos);
            echo 'El valor de tu embarque '.$resultado;
        }
        else{
            $resultado=(2000*$kiloUva)-500;
            echo 'El valor de tu embarque '.$resultado;
        }
    }
}
?>
