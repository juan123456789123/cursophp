<?php

include("vehiculo.php");
include('Carro.php');

$vehiculo1=new Vehiculo();
$vehiculo1->Dar_Color("azul");

var_dump($vehiculo1);

$ruedas= $vehiculo1->ruedas;
echo"<br> <br>cantidad de ruedas ".$ruedas;
$vehiculo1->velocidad();
 
$carro1= new Carro();
$carro1->velocidad();
$carro1->fabrica();
echo "<br>".$carro1->tipo;
echo "<hr>";
$carro1->velocidad();
echo $vehiculo1->get_Rueda();

 



?>