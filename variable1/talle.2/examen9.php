<?php
    $nombre = $_POST['nombre'];
    $asignatura = $_POST['asignatura'];
    $uno = $_POST['uno'];
    $dos = $_POST['dos'];
    $tres = $_POST['tres'];

    $multiplicacion = ($uno*0.3)+($dos*0.3)+($tres*0.4);

    echo $nombre;
    echo "<br>";
    echo $asignatura;
    echo "<br>";

    if($multiplicacion>=4.0){
        echo "aprueba";
    }
    if($multiplicacion<=4.0){
        echo "no aprueba";
    }

?>