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
        <a href="./assets/recipes/piskot.jpg"> <img
            src="./assets/recipes/piskot.jpg"
            class="img recipe-hero-img"
          /></a>
          <article class="recipe-info">
            <h2>Piškot</h2>
            <p>
            Nejlepší recept na piškotové korpusy na dort, dají se použít i na roládu. Můžeme přidat dle libosti namleté ořechy či kakao.
            </p>
            <div class="recipe-icons">
              <article>
                <i class="fas fa-clock"></i>
                <h5>Doba přípravy</h5>
                <p>30 min.</p>
              </article>
              <article>
                <i class="far fa-clock"></i>
                <h5>Doba pečení</h5>
                <p>60 min.</p>
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
                Oddělíme bílky od žloutků a bílky vyšleháme do tuhého sněhu.
              </p>
            </div>
         
            <div class="single-instruction">
             
            <h5>2<sub>)</sub></h5> 
              <p>
                K vyšlehaným bílkům postupně přidáváme cukr.
              </p>
            </div>
        
            <div class="single-instruction">
            <h5>3<sub>)</sub></h5>
              <p>
                Poté přidáme i žloutky s olejem a zase vyšleháme.
              </p>
            </div>

            <div class="single-instruction">
            <h5>4<sub>)</sub></h5>
              <p>
               Nakonec pomalu přidáváme mouku. Poté pečeme v předehřáté troubě na 195 °C.
              </p>
            </div>
            
          </article>
          <article class="second-column">
            <div>
              <h4>Ingredience</h4>
              <p class="single-ingredient">160g polohrubé mouky</p>
              <p class="single-ingredient">4 vejce</p>
              <p class="single-ingredient">160g cukru krupice</p>
              <p class="single-ingredient">4 lžíce oleje</p>
              <p class="single-ingredient">kakao, ořechy atd. dle libosti</p>
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
