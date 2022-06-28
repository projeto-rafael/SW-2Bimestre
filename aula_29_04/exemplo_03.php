
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Exemplo 03</title>
</head>
<body>

    <h1>Exemplo 3: Contar até 100</h1>


    <?php
        echo"Contagem progressiva <br> <br>";
        for($cont = 0; $cont<10; $cont++){
            echo"A variável \$cont vale $cont <br>";
        }
        
        echo"<br> <br>";

        echo"Contagem regressiva <br> <br>";
        for($cont = 13; $cont > 0; $cont--){
            echo"A variável \$cont vale $cont <br>";
        }
    ?>

</body>
</html>