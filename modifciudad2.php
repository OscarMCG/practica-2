<?php
include('conexion.php');
$i=$_POST['idc'];
$c=$_POST['ciu'];
$cod=$_POST['codigociudad'];
$consulta=mysqli_query($conn,"UPDATE ciudad SET idciudad = '$i', ciudad = '$c' WHERE ciudad.idciudad =
'$cod'");
if(!$consulta){
    echo "Error en actualizar datos";
} else{
    header('location:buscarciudad.php');
}
?>