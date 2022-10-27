<?php
    $capital = $_POST['capital'];

    if($capital<500){
        
        $resultado1 = $capital + ($capital*0.02);
        echo "la tasa de interes es del 2% y el valor total es de: ".$resultado1;

    }elseif($capital>=500 && $capital<1500){

        $resultado2 = $capital + ($capital*0.045);
        echo "la tasa de interes es del 4.5% y el valor totral es de: ".$resultado2;

    }else{
        $resultado3 = $capital + ($capital*0.07);
        echo "la tasa de interes es del 7% y el valor totral es de: ".$resultado3;
    }