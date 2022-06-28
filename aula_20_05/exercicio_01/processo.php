<?php 

    $jan = "Janeiro";
    $fev = "Fevereiro";
    $mar = "Março";
    $abr = "Abril";
    $mai = "Maio";
    $jun = "Junbo";
    $jul = "Julho";
    $ago = "Agosto";
    $set = "Setembro";
    $out = "Outubro";
    $nov = "Novembro";
    $dez = "Dezembro"; 


    $num = $_REQUEST['numero'];

    if($num > 12 || $num < 1){
        echo"Este número é inválido";
    }



    if($num == 1){
        echo"O mês correspondente a esse número é: $jan";
    }
    if($num == 2){
        echo"O mês correspondente a esse número é: $fev";
    }
    if($num == 3){
        echo"O mês correspondente a esse número é: $mar";
    }
    if($num == 4){
        echo"O mês correspondente a esse número é: $abr";
    }
    if($num == 5){
        echo"O mês correspondente a esse número é: $mai";
    }
    if($num == 6){
        echo"O mês correspondente a esse número é: $jun";
    }
    if($num == 7){
        echo"O mês correspondente a esse número é: $jul";
    }
    if($num == 8){
        echo"O mês correspondente a esse número é: $ago";
    }
    if($num == 9){
        echo"O mês correspondente a esse número é: $set";
    }
    if($num == 10){
        echo"O mês correspondente a esse número é: $out";
    }
    if($num == 11){
        echo"O mês correspondente a esse número é: $nov";
    }
    if($num == 12){
        echo"O mês correspondente a esse número é: $dez";
    }

?>