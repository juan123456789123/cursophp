<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post" >

        <label for=""> numero 1</label> 
        <input type="number" name="num1" id="num1">

        <label for=""> numero 1</label> 
        <input type="number" name="num2" id="num2">

        <select name="operador" id="operador">
            <option>Sumar</option>
            <option>Resta</option>
            <option>Dividir</option>
            <option>Multiplicar</option>
            <option >Modulo</option>
            <option >Incremento</option>
            <option >Decremento</option>
            
        </select>
        <br>
        <br><br><br>

       <input type="submit" value="Calcular" id="calcular" name="calcular">
    </form>
    <?php
     include("funcion.php");
    if(isset($_POST["calcular"])){
        $num1=$_POST["num1"];
        $num2=$_POST["num2"];
        $calcular=$_POST["operador"];
       
        calcula($calcular,$num1,$num2);

    }
    
    ?>
    
</body>
</html>