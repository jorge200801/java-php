<?php
    $numerador = "9";
    $denominador = "5";
    $divisor = 2;
    echo "Ingrese numerador de la fraccion = ";
    
    echo "Ingrese denominador de la fraccion = ";
    
        while($divisor <= $numerador && $divisor <= $denominador){
            while(($numerador % $divisor) == 0 &&($denominador % $divisor)==0){
                $numerador = $numerador / $divisor;
                $denominador = $denominador / $divisor; 
               }
    $denominador ++;
          }
          echo "Fraccion resultante despues de simplificar ="+ $numerador + "\\" +$denominador;

?>