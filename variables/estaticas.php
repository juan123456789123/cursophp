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
    $contar=0;
    
    function incrementar(){
        //si se desea que el valor se la variable se conserve debe 
        //es static
        static $contador=0;
        $contador++;
        echo $contador. "<br>";
    }
    
    incrementar();
    incrementar();
    incrementar();
    incrementar();

    echo"  <p> Prueba sin static</p>";

    function contar(){
        global $contar;
        $contar++;
        echo" contando ".$contar."<br>";
    }

    contar();
    contar();
    ?>
    
</body>

</html>