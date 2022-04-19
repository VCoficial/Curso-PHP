<!-- 2 -->
<?php
$edad=$_POST['edad'];
$nombre=$_POST['nombre'];

if($edad>=18){
    echo $nombre." tiene ".$edad.", asi que es mayor de edad";
} else{
    echo "Eres menor de edad no puedes usar esta app";
}
?>