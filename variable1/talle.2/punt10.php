<?php
    $pagar = $_GET['pagar'];

    $resta = $pagar - ($pagar*0.2);

    echo $resta;
    echo "<br>";
    if($pagar>20.000){
        echo "descuento";
    }else{
        echo "no se descuenta";
    }
?>