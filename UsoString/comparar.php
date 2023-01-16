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
    $nombre1="juan";
    $nombre2="juan";
    $comparar=strcasecmp($nombre1,$nombre2);//devuelve 1 si son diferente(true) y 0 si son iguales(false). la expreción esta correcto aun que no parezaca
     if($comparar){
        echo"los valores son diferentes";
     }else{
        echo "los son iguales";
     }
    
    
    ?>
</body>
</html>