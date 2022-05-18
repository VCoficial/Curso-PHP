<?php 
/* 3. La asociación de vinicultores tiene como política fijar un precio inicial al kilo de uva, la cual se
clasifica en tipos A y B, y además en tamaños 1 y 2. Cuando se realiza la venta del producto,
ésta es de un solo tipo y tamaño, se requiere determinar cuánto recibirá un productor por los
kilos de uva que entrega en un embarque, considerando lo siguiente: si es de tipo A, se le
cargan $2000 al precio inicial cuando es de tamaño 1; y 1000 si es de tamaño 2. Si es de tipo
B, se rebajan $500 cuando es de tamaño 1, y $900 cuando es de tamaño 2. (Considere un valor
inicial del kilo de uva de $ 2000, deberá calcular el valor total del embarque).
 */

$tipouva = $_POST['estrato'];
$tamano = $_POST['Tamanouva'];
$kiloUva = $_POST['kilo'];
$resultado=0;
if ($tipouva== "a" and $tamano == 1) {
    $resultado=(2000*$kiloUva)+2000;
    echo 'El vaor de tu embarque '.$resultado;
}
else{
    
if ($tipouva== "a" and $tamano ==2 ) {
    $resultado=(2000*$kiloUva)+1000;
    echo 'El vaor de tu embarque '.$resultado;
}
    else{
        if ($tipouva== "b" and $tamano==2 ) {
            $resultado=(2000*$kiloUva)-900;
            echo 'El vaor de tu embarque '.$resultado;
        }
        else{
            $resultado=(2000*$kiloUva)-500;
            echo 'El vaor de tu embarque '.$resultado;
        }
    }
}
?>