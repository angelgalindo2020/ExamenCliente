<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Impresion</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body class="PHP">
<?php
    define('BR', '<br>');
    echo "Nombre: ";
    echo $_POST["nombre"];
    echo BR;
    echo "Apellidos: ";
    echo $_POST["apellidos"];
    echo BR;
    echo "Edad: ";
    echo $_POST["edad"];
    echo BR;
    echo "Email: ";
    echo $_POST["correo"];
    echo BR;
    echo "Fecha De Nacimiento: ";
    echo $_POST["fecha"];
    echo BR;
    echo "Color Elegido: ";
    echo $_POST ["color"];
    echo BR;
    echo "Elemento Escogido De La Lista: ";
    echo $_POST ["lista"];
?>
</body>
</html>