<?php
include('conexion.php');
$a=$_GET['S'];
$f=mysqli-query($conn,"delete from ciudad where idciudad='$a' ");
if(!$f){
    echo "no se borro los datos de la ciudad";
    }
    else
    {
        echo "datos borrados";
    }
    ?>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Eliminar ciudad</title>
</head>
<body>

    <a href="mostrarciudad.php">regresar</a>   
</body>
</html>