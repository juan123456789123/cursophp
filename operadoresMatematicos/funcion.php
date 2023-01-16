<?php
    
    
    
        function calcula($calcular,$num1,$num2){

        if (!strcmp($calcular,"Sumar")) {
            $resultado=$num1+$num2;
            echo "El resultado es  $resultado ";//no importa si se pone dentro de conmillas


        } else if (!strcmp($calcular,"Resta")) {
            $resultado=$num1-$num2;
            echo "El resultado es ".$resultado;

        }else if (!strcmp($calcular,"Dividir")) {
            $resultado=$num1/$num2;
            echo "El resultado es ".$resultado;

        }else if (!strcmp($calcular,"Multiplicar")) {
            $resultado=$num1*$num2;
            echo "El resultado es ".$resultado;

        }else if (!strcmp($calcular,"Modulo")) {
            $resultado=$num1%$num2;
            echo "El resultado es ".$resultado;



        }else if (!strcmp($calcular,"Decremento")) {
            $num1--;
            $resultado=$num1;
            echo "El resultado es ".$resultado;

            

        }else if (!strcmp($calcular,"Incremento")) {
            $num1++;
            $resultado=$num1;
            echo "El resultado es ".$resultado;

            

        }
        
        
        else{
            echo" error";
        }

    }

    ?>