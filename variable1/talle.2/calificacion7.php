<?php
    $nom_aprendiz = $_POST['nom_aprendiz'];
    $asignatura = $_POST['asignatura'];
    $calificacion_final = $_POST['calificacion_final'];

    echo $nom_aprendiz;
    echo "<br>";
    echo $asignatura;
    echo "<br>";

    if($calificacion_final>7){
        {
            echo " aprobado ";
        }
    }if($calificacion_final<7){
        {
            echo " desaprobado ";
        }
    }


?>