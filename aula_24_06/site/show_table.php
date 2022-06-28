<?php

include_once  'conect.php';

$sql = "SELECT * FROM aluno";

$resultado = mysqli_query($conexao, $sql);

if (mysqli_num_rows($resultado) > 0 ){
    while ($linha = mysqli_fetch_assoc($resultado)){
        echo "ID:" . $linha["id"]. "<br>";
        echo "Nome:" . $linha["nome"]. "<br>";
        echo "Curso:" . $linha["curso"]. "<br>";
        echo "Idade:" . $linha["idade"]. "<br>";
    }
}
else{
    echo "0 Resultados!";
}

mysqli_close($conexao);


?>