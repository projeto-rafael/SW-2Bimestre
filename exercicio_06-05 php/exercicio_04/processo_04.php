<?php
    $num = $_POST["n1"];
    
    if(!empty($num)){
        $fatorial = 1;
        for($contador = $num; $contador > 0; $contador--){
            $fatorial *= $contador;
            echo $contador;
            echo $contador > 1 ? " x " : " = ";
        }
        echo "$fatorial";
    }
?>