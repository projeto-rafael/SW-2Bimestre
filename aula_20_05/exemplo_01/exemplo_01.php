<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Document</title>
</head>
<body>
    

    <?php
    
        # Maneira nº1: 

        $vetor = [1, 5, 8, 10];

        $n1 = $vetor[0];
        $n2 = $vetor[1];
        $n3 = $vetor[2];
        $n4 = $vetor[3];

        $soma = $n1 + $n2 + $n3 + $n4;

        echo $soma;
    
        echo "</br>";
        # Maneira nº2:

        $n = count($vetor);
        $soma = 0;
        $m = $n;

        for($i = 0; $i < $n; $i++){
            $soma = ($soma + $vetor[$i]);
            $media = ($soma/$m);
        }

        echo $media;

    ?>
</body>
</html>