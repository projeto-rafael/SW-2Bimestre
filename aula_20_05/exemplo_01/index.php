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
        $vetor = [10, 1.10, 102, 2];
        //$vetor = array({10, 1.10, false});
        $qtd = count($vetor);

        echo "$qtd </br>";

        echo "Num vetor com a quantidade de valor igual a = $qtd </br>";
        echo "<hr>";

        $random = rand(1, 10);

        $real = $random/10;
        
        echo $real;

        echo "</br>";
        
        for ($i = 0; $i < 4; $i++ ){
            echo "valor do i => $i </br>";

        };

    ?>
</body>
</html>