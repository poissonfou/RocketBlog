<?php
    include_once("config/server.php");
    include_once("config/process.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&family=Roboto:wght@400;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?= $BASE_URL?>styles.css">
    <title>Document</title>
    <script src="<?= $BASE_URL?>index.js" defer></script>
</head>
<body>
<style>
@media (max-width: 800px) {
  .header {
    padding: 3em 0em 1em 0em;
  }
}   
</style>
<style>  
/*Main-section media queries */    
@media (max-width: 1100px) {
  .main-title {
    font-size: 2rem;
  }

  .main-img {
    height: 18rem;
    width: 25rem;
  }
}

@media (max-width: 800px) {
  .main-title {
    font-size: 2rem;
  }
}

@media (max-width: 900px) {
  .purple-back {
    background-image: url("http://localhost/rocketseat-7/images/featured-image.png");
    background-repeat: no-repeat;
    background-size: cover;
  }

  .main-img {
    display: none;
  }

  .main-article {
    padding-top: 5em;
    width: 80%;
  }

  .main-title {
    font-size: 2.5rem;
  }

  .see-more {
    margin-top: 0em;
  }
}

@media (max-width: 700px) {
  .main-title {
    font-size: 1.8rem;
  }
}
</style>
<style> 
  /*middle section media queries */
@media (max-width: 1100px) {
  .middle-section {
    grid-template-columns: 0.5fr 25em;
    gap: 5em;
  }

  .middle-main-section img {
    width: 25rem;
  }

  .middle-side-posts p {
    font-size: 1rem;
  }

  .middle-side-posts h2 {
    font-size: 1.2rem;
  }
}

@media (max-width: 900px) {
  .middle-section {
    display: flex;
    flex-direction: column;
    margin: 0em 3em;
    gap: 1em;
  }

  .middle-side-posts h2 {
    font-size: 1.5rem;
  }

  .middle-main-section img {
    width: 100%;
  }
}
</style>
<style>
    /*Bottom section media queries */
   @media (max-width: 900px) {
  .bottom-posts {
    display: flex;
    flex-direction: column;
    padding: 2em 0em;
    margin: 0em 3em;
    gap: 2em;
    width: unset;
  }

  .bottom-post {
    width: 100%;
    margin-left: 0em;
  }
}

</style>
<header class="header">
    <div id="header-top">
    <h1 class="title">The Blog<span class="dot">.</span></h1>
    <!-- <div class="sections">
        <p id="home"><span class="green-stripe">|</span>Home</p>
        <p>Sobre</p>
        <p>Categorias</p>
        <p>Contato</p>
    </div> -->
    <div class="input-div">
        <input type="text" class="buscar" placeholder="Buscar">
        <div class="div-search-icon"><img src="<?= $BASE_URL?>/images/search.svg" alt="search icon"></div>
    </div>
    </div>
    <div id="header-bottom"> </div>
</header>