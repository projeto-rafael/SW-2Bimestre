<?php

    $server = "localhost";
    $user = "root";
    $password = "";
    $database = "tabela_alunos";


    $conexao = new mysqli($server, $user, $password, $database);

    if($conexao->connect_error) {
        die("Conexão Falhou:" . $conn->connect_error);
    }
    #echo("Conexão com sucesso!");

?> 