<?php 
    $numero = $_REQUEST['n1'];
    $contador = 0;

    echo "Tabuada do número: $numero</br> </br>";
    do{
       $tabuada = $contador * $numero;
       echo"$numero x $contador = $tabuada </br>";
       $contador++;
    }
    while($contador <=10);
?>