<?php

    $conexao = mysqli_connect('localhost', 'root', '', 'cadastro');

    if (!$conexao)
    {
        die("Problemas com a conexão com o banco de dados. Descrição do problema: " . mysqli_connect_error());
    }

?>