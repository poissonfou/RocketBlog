<?php
    include_once("server.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= $BASE_URL?>/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&family=Roboto:wght@400;700&display=swap"
        rel="stylesheet">
    <title>Document</title>
</head>
<body>

<header class="header">
    <h1>The Blog<span class="dot">.</span></h1>
    <div class="sections"><div class="green-stripe"></div>
    <p>Home</p>
    <p>Sobre</p>
    <p>Categorias</p>
    <p>Contato</p>
</div>
<div class="input-div">
    <input type="text" class="buscar" placeholder="Buscar">
    <div class="div-search-icon"><img src="<?= $BASE_URL?>/images/search.svg" alt="search icon"></div>
</div>
</header>