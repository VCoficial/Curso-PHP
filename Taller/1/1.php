<?php 
/* la empresa de servicios públicos de nuestra ciudad calcula la factura del consumo de agua de
acuerdo con la tabla de estratos adjunta. Se requiere determinar el pago que debe realizar una
persona por el total de metros cúbicos que consume al llenar una piscina (ver figura), la
liquidación consiste en multiplicar los metros cubos por el valor del metro de acuerdo con el
estrato correspondiente. Realice una WebApp que solucione dicho problema.  */

$estrato=$_POST['estrato'];
$metro=$_POST['metro'];
$valor=0;
switch ($estrato){
    case '1':
        $valor=5000*$metro;
        echo "el costo de la factura del consumo de agua es ".$valor;
        break;
    case '2':
        $valor=6500*$metro;
        echo "el costo de la factura del consumo de agua es ".$valor;
        break;
    case '3':
        $valor=7000*$metro;
        echo "el costo de la factura del consumo de agua es ".$valor;
        break;
    case '4':
        $valor=8000*$metro;
        echo "el costo de la factura del consumo de agua es ".$valor;
        break;
    case '5':
        $valor=9200*$metro;
        echo "el costo de la factura del consumo de agua es ".$valor;
        break;
    default:
        echo 'debe elegir un estrato valido';                   
}
?>