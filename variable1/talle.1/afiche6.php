<?php
    $volante = $_POST['volante'];
    $posters = $_POST['posters'];
    $tpresentacion = $_POST['tpresentacion'];

    echo " total de los volantes: " .$volante*2000;
    echo "<br>";
    echo " total de los posters: " .$posters*5000;
    echo "<br>";
    echo " total de los tpresentacion: " .$tpresentacion*500;
    echo "<br>";

    $suma = ($volante*2000)+($posters*5000)+($tpresentacion*500);
    echo " el pago total es ".$suma;

?>