<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
    echo "Bienvenidos a malasia<br>";
    // con la siguiente linea se puede llamar a una class php externa
    // para hacer uso del contenido de la misma

    
    include ("cuerpo.php"); //tambien pude usarse el required
    // este metodo es la clase cuerpo;
    desarrollo();

    echo"Hasta pronto";
 
    ?>
</body>
</html>