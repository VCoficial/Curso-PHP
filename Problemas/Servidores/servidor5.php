<?php
$numero=$_POST['numero'];

$total=$numero;

if($total>0){
    echo "la raiz cuadrada es ".$total;
}else{
    echo $numero." tiene raiz imaginaria";
}
?>