
<?php


class Vehiculo{

  var $tipo;
  var $color;
  var $ruedas;// protected

  function __construct()
  {
    $this->tipo="automovil";
    $this->ruedas=4;
    $this->color="";
  }
 
  function get_Rueda(){
    return $this->ruedas;
  }
  function Dar_Color($color){

    $this->color=$color;
    echo"el color del vehiculo <br>". $this->color;
    }
    function velocidad(){
       echo" voy muy veloz<br>";
    }
    

}


?>