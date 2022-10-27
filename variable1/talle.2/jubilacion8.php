<?php
    $edad = $_POST['edad'];
    $sexo = $_POST['sexo'];

    echo $edad;
    echo "<br>";
    echo $sexo;
    echo "<br>";

    if(($sexo == "hombre")&&($edad>=63)){
      echo "te puedes jubilar";
    }elseif(($sexo == "mujer")&&($edad>=54)){
        echo "te puedes jubilar";
    }else{
        echo "no te puedes jubilar";
    }

?>