<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
    echo "Este es el primer mensaje <br>";
    //require("proporciona_datos.php");
    include("proporciona_datos.php");

    echo "Este es el segundo mensaje <br>";

    dameDatos();
    ?>

    
</body>
</html>