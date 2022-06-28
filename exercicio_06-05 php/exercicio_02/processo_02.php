<?php 
    $numero = $_REQUEST['n1'];
    $cubo = pow($numero, 3);
    $contador = $numero;
    echo"Número Digitado: $numero </br> O valor da potência ao cubo: $cubo</br></br>";
    
    while($contador <= $cubo){
        $impar = fmod($contador, 2);
            if ($impar == 1){
                echo"Contagem do número ímpar: $contador </br>";
            }
        $contador++;
    }
    
?>