<?php

    $porta = "localhost";
    $usuario = "root";
    $senha = "";
    $banco = "cadastro";

    $conexao = mysqli_connect($porta, $usuario, $senha, $banco);

    if (!$conexao)
    {
        die("Problemas com a conexão com o banco de dados. Descrição do problema: " . mysqli_connect_error());
    }

    echo "<br>Conexão realizada com sucesso!";

?>