<?php

    $dbhost = 'localhost';
    $dbUsername = 'root';
    $dbPassword = '';
    $dbname = 'formulariolucca';

    $conexao = new mysql($dbhost, $dbUsername, $dbPassword, $dbname);

    if($conexao ->connect_errno)
    {
        echo "Erro";
    }
    else
    {
        echo "BRABO MLK";
    }
?>