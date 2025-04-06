<?php 
    include_once ('config/url.php') ;
    include_once ("config/conexao.php");
    include_once ("config/select.php");

   
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda de Contatos</title>
    <link rel="stylesheet" href="<?= $BASE_URL ?>css/style.css">
</head>
<body>
    <header>
        <div class="d-flex navbar">
            <a href="<?= $BASE_URL?>index.php">Home</a>
            <a href="<?= $BASE_URL?>create.php">Add Contact</a>
            <a href="<?= $BASE_URL?>contacts.php">Contacts</a>
        </div>
    </header>