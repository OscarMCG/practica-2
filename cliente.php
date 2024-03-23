<?php
$c=mysqli_connect("localhost","root","","clientes");
$consul=mysqli_query($c,"select * from ciudad");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <title>Modificar ciudad</title>
</head>
<body>
    <form id="form1" name="form1" method="post" action="guardarcliente.php" enctype="multipart/form-data">
        <p>
        <label for="textfield">ID:</label>
        <input type="text" name="terxtfield" id="textfield">
    </p>
        <p>
        <label for="textfield2">Nombre:</label>
        <input type="text" name="terxtfield2" id="textfield2">
    </p>
        <p>
        <label for="textfield3">Apellido:</label>
        <input type="text" name="terxtfield3" id="textfield.">
    </p>
        <p>
        <label for="textfield4">Telefono:</label>
        <input type="text" name="terxtfield4" id="textfield4">
    </p>
        <p>
        <label for="ciu">Ciudad:</label>
        <select name="ciu" id="ciu">
            <?php
            while($s=mysqli_fetch_array($consul)) {
                ?>
            <option value="<?php echo $s ['idciudad']; ?> "><?php echo $s['cuydad']; ?></option>
                <?php } ?>

            </select>
            </p>
            <label for="ciu">subir foto</label><input type="file" name="foto">
            <p>
                <input type="submit" name="submit" id="submit" value="Enviar">
            </p>
            </form>
</body>
</html>