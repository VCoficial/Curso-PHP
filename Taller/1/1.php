<?php 
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