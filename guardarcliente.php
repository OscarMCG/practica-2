<?php
$f=$_FILES['foto']['tmp_name'];
$name=$_FILES['foto']['name'];
$rutanueva="imagenes/".$name;
move_uploaded_file($f,$rutanueva);
$cone=mysqli_connect('localhost','root','','clientes');
$a=$_POST['tesxtfield'];
$b=$_POST['tesxtfield2'];
    $c=$_POST['tesxtfield3'];
    $d=$_POST['tesxtfield4'];
    $e=$_POST['ciu'];
$consulta="INSERT INTO cliente Values('$a','$b','$c','$d','$e','$rutanueva')";
$eje=mysqli_query($cone,$consulta);
    if(!$eje){
        echo "no se guardo  datos";

    }else{
        echo "datos guardados con exito";
    }

?>