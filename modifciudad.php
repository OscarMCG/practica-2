<?php
include('conexion.php');
$m=$_GET['mod'];
$consulta=mysqli_query($conn,"select * from ciudad where idciudad='$m'");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Modificar ciudad</title>
</head>
<body>
    <form id="form1" name="form1" method="post" action="modifciudad2.php">
        <p>Modificar datos ciudad</p>
        <input type="hidden" name="codigociudad" value="<?php echo $m; ?>">
        <p>
        <?php
        while($a=mysqli_fetch_array($consulta)) {  ?>
            <label for="textfield">idciudad:</label>
            <input type="text" name="idc" id="idc" value="<?php echo $a['idciudad']; ?>">
            <label for="textfield2"><br>
            ciudad:</label>
            <input type="text" name="ciu" id="ciu" value="<?php echo $a['ciudad']; ?>">
            <?php } ?>
        </p> 
        <p>
        <input type="submit" name"submit" id="submit" value="Modificar">
        </p>
        </form>                
    
</body>
</html>