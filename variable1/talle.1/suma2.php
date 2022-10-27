<?php
    $Estudiante = $_POST  ['E'];
    $Asignatura = $_POST['A'];
    $Nota1 = $_POST['nt1'];
    $Nota2 = $_POST['nt2'];
    $Nota3 = $_POST['nt3'];

    $promedio = ($Nota1+$Nota2+$Nota3)/3;

    echo $Estudiante;
    echo "<br>";
    echo $Asignatura;
    echo "<br>";
    echo"la nota del estudiante es".$promedio;

?>