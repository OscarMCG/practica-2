<?php
$con=mysqli_connect("localhost","root","","clientes");
$a=mysqli_query($con,"select * from ciudad");
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
    <table botder="3">
        <tr>
            <td>codigo ciudad</td>
            <td>ciudad</td>
            <td>eliminar</td>

        </tr>
            <?php
            while($s=mysqli_fetch_array($a)){
                ?>
            <tr>
                <td><?php echo $s['idciudad']; ?> </td>
                <td><?php echo $s['ciudad']; ?> </td>
                <td><a href="elimc.php?e=<?php echo $s['idciudad']; ?>">eliminar</a></td>
            </tr>    

            <?php }  ?>
    </table>            
</body>
</html>