<?php

$n="3";
if($n >= 2){
    $c = 0;
    for($i = 2; $i<=n; $i++){
        $divisor = 2;
        $bandera = 0;
        while($divisor < $i){
            $bandera = 1;
            break;
        }
        $divisor++;
    }
    if($bandera == 0){
        $c ++;
        echo "Numero primo ("+ $c +")" + $i + "\n";
    }
}else {
    
    echo "Por definicion, un numero primo es un numero natural mayor que uno y solamente es divisible por la unidad y si mismo\n";
    
}
?>