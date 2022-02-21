// 9 - Haz un formulario con algunos campos como: nombre, apellidos, número de teléfono, email,
etc. Recoge los datos a través del método POST y muéstralos por pantalla.

<!DOCTYPE html>
<html>
<head>
    <title>EJERCICIO 9</title>
</head>
    <body>
        <form name="formulario" method="post" action="Ej9.php">
                Nombre: <input type="text" name="nom" value=""><br>
                Apellido: <input type="text" name="apel" value=""><br>
                Número de teléfono: <input type="text" name="tel" value=""><br>
                <input type="submit" />
        </form>
    </body>
</html>

<br>

<?php
    $nombre = $_POST['nom'];
    $apellido = $_POST['apel'];
    $telefono = $_POST['tel'];
    echo "<br> &nbsp; Hola ".$nombre." ".$apellido." con número de teléfono de = ".$telefono;
