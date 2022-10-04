<?php

require "stranky.php";

if(array_key_exists("stranka", $_GET)){
  $stranka=$_GET["stranka"];
}else{
  $stranka ="uvod";
}
?>
<!DOCTYPE html>
<html lang="ecs">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php  echo $seznamStranek[$stranka]->titulek ?></title>
    <link rel="shortcut icon" href="./assets/favicon.png" type="image/x-icon" />
    <link rel="stylesheet" href="./css/normalize.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css"
    />
    <link rel="stylesheet" href="./css/main.css" />
    <link rel="stylesheet" href="./css/header.css" />
  </head>

  <body>
    <header>
      <menu>
        <div class="container">
          <a href="./index.php" class="logo">
          <video loop="" autoplay="" muted height="90" width="90">
          <source src="./assets/logo.mp4" type="video/mp4" />
        </video>
          </a>
          <nav>
            <ul>
            <?php
              foreach ($seznamStranek as $idStranka => $instanceStranky){
                echo "<li><a href='$instanceStranky->id'>$instanceStranky->menu</a></li>";
              }
              ?>
           
            </ul>
          </nav>
        </div>
      </menu>

      <div class="nadpis">
        <h2><?php  echo $seznamStranek[$stranka]->h2 ?></h2>
      
        
      </div>
    </header>

    <main> 
    <?php
      echo file_get_contents("$stranka.html");
      ?></main>

    <footer class="page-footer">
      <p>
        2022&copy; <span id="date"></span>
        <span class="footer-logo">OblibeneRecepty</span> by
        <a href="https://www.jaroslavastepanova.cz/">Jaroslava Štěpánová</a>
      </p>
    </footer>

    <script src="./js/app.js"></script>
  </body>
</html>
