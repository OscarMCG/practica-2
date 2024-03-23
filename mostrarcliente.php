<?php
$con=mysqli_connect("localhost","root","","clientes");
$a=mysqli_query($con,"select * from cliente");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Registro cliente</title>
</head>
<body>
    <table botder="3">
        <tr>
            <td>Cc.</td>
            <td>nombre</td>
            <td>apellido</td>
            <td>telefono</td>
            <td>ciudad</td>
        </tr>
            <?php
            while($s=mysqli_fetch_array($a)){
                ?>
            <tr>
                <td><?php echo $s['Cc.']; ?> </td>
                <td><?php echo $s['nombre']; ?> </td>
                <td><?php echo $s['apellido']; ?> </td>
                <td><?php echo $s['telefono']; ?> </td>
                <td><?php 
                        $b=mysqli-query($con,"select * from cliente inner join ciudad on
                        '$s'[idciudad]'=ciudad.idciudad");
                        $d=mysqli-fetch-array($b);
                        echo $d['ciudad']; ?>
                </td>
                <td><a href="eliminarcliente.php?ec=<?php echo $s['documento']; ?>">eliminar</a>
            </tr>    
            <?php }  ?>
    </table>            
</body>
</html>