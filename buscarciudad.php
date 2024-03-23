<?php
include('conexion.php');
if(isset($_GET['codciudad'])){
    $ciu=$_GET['codciudad'];
    $consulta=mysqli_query($conn,"select * from ciudad where idciudad='$ciu' order by ciudad ASC");
    $fila=mysqli_num_rows($consulta);
}
else{
    $ciu="";  $fila=0;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Registro ciudad</title>
</head>
<body>
<form id=" form1" name="form1" method="get" action="buscarciudad.php">
    <p>
        <label for="textfield">codciudad:</label>
        <input type="text" name="codciudad" id="codciudad">
    </p>
    <p>
        <input type="submit" name="sudmit" id="submit" value="Enviar">
    </p>
</form>
<table width="200" borde="3">
    <tbody>
        <tr>
            <td>codigo ciudad</td>
            <td>ciudad</td>
            <td>Modificar</td>
        </tr>
            <?php
            if($fila!=0){
                while($a=mysqli_fetch_array($consulta)){
                    ?>
        <tr>
            <td><?php echo $a['idciudad']; ?></td>
            <td><?php echo $a['ciudad']; ?></td>
            <td><a href="modifciudad.php?mod=<?php echo $a['idciudad']; ?>">modificar</a></td>
        </tr>
    </tbody>
</table>
    <p>&nbsp;</p>
    <?php
    }
            }
    ?>                    
</body>
</html>