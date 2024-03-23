<?php
include('conexion.php');
$h=$_GET['t'];
$consulta=mysqli_query($conn,"delete from cliente where documento='$h'");
header('location:mostrarcliente.php');
?>