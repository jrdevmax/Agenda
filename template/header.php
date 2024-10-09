<?php include_once 'config/url.php' ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda de Contatos</title>
    <link rel="stylesheet" href="<?= $BASE_URL ?>css/style.css">
</head>
<body>
    <header>
        <div class="navbar">
            <a href="<?= $BASE_URL?>" class="logo">
                <img src="<?php $BASE_URL?>img/logo.svg" alt="Agenda">
            </a>
            <a href="<?= $BASE_URL?>index.php">Home</a>
            <a href="<?= $BASE_URL?>create.php">Adicionar Contato</a>
        </div>
    </header>