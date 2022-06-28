<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Exemplo 01 </title>
</head>
<body>

    <h1>Exemplo 1: Contar até 100</h1>

    <?php
        // while - do while - for - for each;

        $cont = 1;

        while($cont <= 100){
            echo "O valor atual do contador é de: $cont <br>" ;
            $cont++;
        }
    ?> 

</body>
</html>