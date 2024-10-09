<?php
    $host = 'localhost';
    $dbname = 'agenda';
    $user = 'root';
    $pass = '';

    try{
        $con= new PDO ("mysql:host=$host;dbname=$dbname",$user,$pass);
        // Ativat modo de erros
        $con ->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    }catch(PDOException $e){
        // ERRO na conexao
        $error = $e->getMessage();
        echo "Erro: $error";
    }