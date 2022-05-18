<?php 
 /*  2  “La langosta ahumada” es una empresa dedicada a ofrecer banquetes; sus tarifas son las
siguientes: el costo de platillo por persona es de $14.000, pero si el número de personas es
mayor a 200 pero menor o igual a 300, el costo es de $11.000. Para más de 300 personas el
costo por platillo es de $9.000. Se requiere una WebApp que ayude a determinar el
presupuesto que se debe presentar a los clientes que deseen realizar un evento. */

$numeroDePersona = $_POST['numero'];
$costolangosta=0;
if ($numeroDePersona>200 and $numeroDePersona<=300) {
    $costolangosta= $numeroDePersona*11000;
    echo 'El costo total de langosta '.$costolangosta;
}
else{
    if($numeroDePersona>300){
        $costolangosta= $numeroDePersona*9000;
       echo 'El costo total de langosta '.$costolangosta;
    }
    else{
        $costolangosta= $numeroDePersona*14000;
        echo 'El costo total de langosta '.$costolangosta; 
    }
}
?>
