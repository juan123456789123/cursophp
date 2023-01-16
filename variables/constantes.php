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
    //Forma de crear una constante, este puede recibir 3 parametros, el trecero boleano(trueo false)
    // 3° parametro es optional
    define("NOMBRE","juan");
// 3° parametro con el true permite que se use la constante en minuscula
// no es recomendable no debido a la naturaleza del mismo
    define("DATOS","nombre", true);


    
    ?>
</body>
</html>