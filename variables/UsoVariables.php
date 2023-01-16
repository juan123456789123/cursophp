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
    $nombre="juan";

    function nombre(){
        //la variable local aun que se llame igual a la global no 
        // es la misma variable debido a la naturaleza de las variables de php
        
        //para poder decir que nos referimos a la variable global
        // se debe incluir "Global $nombrevariable"
        $nombre="maria";
    }


    nombre();
    echo $nombre;

   
    
   
    ?>

    <p>llamando a la funcion</p>
    <?php
    // la variable es la misma 
     include ("funcion.php");
     $nombre=dameNombre();
     echo $nombre;
    ?>
    
</body>
</html>