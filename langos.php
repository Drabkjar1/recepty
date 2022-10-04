<?php

require "stranky.php";

if(array_key_exists("stranka", $_GET)){
  $stranka=$_GET["stranka"];
}else{
  $stranka ="uvod";
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Langoš</title>
    <link rel="shortcut icon" href="./assets/favicon.png" type="image/x-icon" />
    <link rel="stylesheet" href="./css/normalize.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css"
    />
    <link rel="stylesheet" href="./css/main.css" />
    <link rel="stylesheet" href="./css/header.css"/>
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
                echo "<li><a href='?stranka=$instanceStranky->id'>$instanceStranky->menu</a></li>";
              }
              ?>
            </ul>
          </nav>
        </div>
      </menu>
     

    </header>
   
    <main class="page">
      <div class="recipe-page">
        <section class="recipe-hero">
        <a href="./assets/recipes/langos.jpg"> <img
            src="./assets/recipes/langos.jpg"
            class="img recipe-hero-img"
          /></a>
          <article class="recipe-info">
            <h2>Langoše</h2>
            <p>
            Tento recept na langoše jsem dostala na střední škole od své spolužačky Krystýny. Langoše jsou výborné a hlavně nejsou mastné, díky jogurtu nenasají tolik oleje. Je to nejlepěí recept na langoše.
            </p>
            <div class="recipe-icons">
              <article>
                <i class="fas fa-clock"></i>
                <h5>Doba přípravy</h5>
                <p>30 min.</p>
              </article>
              <article>
                <i class="far fa-clock"></i>
                <h5>Doba smažení</h5>
                <p>15 min.</p>
              </article>
              <article>
                <i class="fas fa-user-friends"></i>
                <h5>Porce:</h5>
                <p>6 porcí</p>
              </article>
            </div>
           
          </article>
        </section>
       
        <section class="recipe-content">
          <article>
            <h4>Postup:</h4>
          
            <div class="single-instruction">
             
                <h5>1<sub>)</sub></h5> 
              <p>
                Těsto je nutné udělat den předem a  nechat v lednici přec noc nakynout.
              </p>
            </div>
         
            <div class="single-instruction">
             
            <h5>2<sub>)</sub></h5> 
              <p>
                Smícháme všechny přísady a uděláme těsto, které musí být vhodné na tvarování langošů...nesmí se moc lepit.
              </p>
            </div>
        
            <div class="single-instruction">
            <h5>3<sub>)</sub></h5>
              <p>
                V den přípravy vytáhneme těsto z lednice asi 2 hodinky předem a uděláme na vále malé bochánky, které budou ještě trochu kynout.
              </p>
            </div>

            <div class="single-instruction">
            <h5>4<sub>)</sub></h5>
              <p>
                Langoše při smažení prskají, musí se dávat pozor i při obracení.
              </p>
            </div>
            
          </article>
          <article class="second-column">
            <div>
              <h4>Ingredience</h4>
              <p class="single-ingredient">1 kg hladké mouky</p>
              <p class="single-ingredient">1 bílý jogurt</p>
              <p class="single-ingredient">1/2 l mléka</p>
              <p class="single-ingredient">1 lžíce soli</p>
              <p class="single-ingredient">1 kostka droždí</p>
            </div>
          
          </article>
        </section>
      </div>
    </main>

    <footer class="page-footer">
      <p>
        2022&copy; <span id="date"></span>
        <span class="footer-logo">OblibeneRecepty</span> by
        <a href="https://www.jaroslavastepanova.com/">Jaroslava Štěpánová</a>
      </p>
    </footer>

    <script src="./js/app.js"></script>
  </body>
</html>
