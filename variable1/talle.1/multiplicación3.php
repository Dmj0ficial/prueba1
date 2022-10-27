<?php

  /*partidos ganados:3 punto 
    empatado: 1 punto
    perdido:0 punto*/

    $partidos_ganados = $_POST  ['pg'];
    $empatado = $_POST['e'];
    $perdido = $_POST['p'];

    $partidos_ganados = *3;
    $empatado = *1;
    $perdidos = *0;

    echo $partidos_ganados;
    echo "<br>";
    echo $empatado;
    echo "<br>";
    echo $perdido;

?>