<?php

$nome = $_REQUEST['nome'];
$genero = $_REQUEST['genero'];
$estado = $_REQUEST['estado'];
$qtdIrmaos = $_REQUEST['irmao'];

foreach ($qtdIrmaos as $val)
{
    $msg .= $val . ", ";
}

echo "O nomee é $nome,oi o gênero é $genero, o estado é $estado e são $msg irmãos.";

?>