<?php

class Carro extends Vehiculo{
    var $marca;
    
    
    function __construct()
    {
        
        $this->marca="mazda";
        $this->tipo="automovil";
        $this->ruedas=8;
        
    }
    function fabrica(){
        echo "<br>fabricado en costa Rica ";
    }
    function velocidad(){
        parent::velocidad();
        echo" empiezo a desacelerar";

    }



}

?>