<?php
    $hermano1 = $_POST['hermano1'];
    $hermano2 = $_POST['hermano2'];
    $resta = $hermano1 - $hermano2;

    echo "la diferencia de edades  es" .$resta;
    echo "<br>";
    if($hermano1>$hermano2) {
        if($hermano1>$hermano2){
            echo $hermano1." es mayor que ".$hermano2;
        }else{
            echo $hermano2." es mayor que ".$hermano1;
        }
    }
?>