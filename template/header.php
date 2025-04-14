<?php 
    session_start();
    include_once ('config/url.php') ;
    include_once ("config/conexao.php");
    include_once ("config/select.php");

    if(isset($_SESSION["msg"])){
        $print = $_SESSION["msg"];
        $_SESSION = " ";
    }
    
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda de Contatos</title>
    <link rel="stylesheet" href="<?= $BASE_URL ?>css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body>
    <header>
        <div class="d-flex navbar">
            <a href="<?= $BASE_URL?>index.php" class="link-nav">Home</a>
            <a href="<?= $BASE_URL?>create.php" class="link-nav">Add Contact</a>
            <a href="<?= $BASE_URL?>contacts.php" class="link-nav">Contacts</a>
            
        </div>
    </header>