<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Exercício 01</title>
</head>
<body>
    

    <?php 
    
    $num1 = 27;
    $cubo = pow($num1,3);

    echo"Número digitado: $num1 <br>";
    echo"Resultado do cuboi deste número: $cubo <br>";

    while($num1 <= $cubo){        
        echo"Contagem: $num1 <br>";
        $num1++;
    }

    ?>

</body>
</html>