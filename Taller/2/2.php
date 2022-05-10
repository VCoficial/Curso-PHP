<?php 
$personas=$_POST['personas'];

if ($personas<200){
    echo "El costo por platillo es de 14.000";
    }
elseif($personas>200){
    echo "El costo por platillo es de 11.000";
    }
elseif($personas>300){
    echo "El costo por platillo es de 9.000";
    };
?>
