<?php
  session_start();
  include "module/modul-functii.php";
  include "module/modul-setari.php";
  $pagina = 'index';
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Avioane</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="csspp.css">
    <style>
      .backtransp{
        background-color: transparent !important;
      }
    </style>
    <h1 style="text-shadow: 2px 2px;"> Avioane </h1>
  </head>
  <body>
      <?php
        include "./module/modul-navigare.php";
      ?>
        <style>
            .carousel-item {
                height: 55rem;
            }
        </style>
       <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="poze/im1.jpg" class="d-block w-100">
          </div>
          <div class="carousel-item">
            <img src="poze/im2.jpg" class="d-block w-100">
          </div>
          <div class="carousel-item">
            <img src="poze/im3.webp" class="d-block w-100">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>

      <div class="container mt-4 ">
        <div class="row">
          <div class="col-md-4">
             <a href="https://www.edf.org/"> <img class="postere" src="poze/Traian_Vuia.jpg" alt="T_V"></a>
              <h3> Traian Vuia
              <p>&nbsp</p>
              <a href="https://www.edf.org/"><img class="postere" src="poze/Fratii_Wright.jpg" alt="F_W"></a>
              <h3> Frații Wright
            
          </div>
          <div class="col-md text bg-light">
            <h1>Noțiuni generale</h1>
            <p>Apărute la începutul secolului XX, primele avioane cereau mult curaj și îndemânare pentru a le pilota. În acea
               vreme, ele nu erau nici rapide, nici încăpătoare. Primul zbor controlat, propulsat, cu un aparat mai greu decât aerul l-au făcut
              Frații Wright pe 17 decembrie 1903, primul zbor efectiv autopropulsat a fost făcut de Traian Vuia la data de 18 martie 1906, iar
               primul zbor oficial autopropulsat a fost făcut de Alberto Santos-Dumont la data de 12 noiembrie 1906.
               Henri Coandă este inventatorul aparatului de zbor fără elice, acesta fiind propulsat de un motor cu reacție. Louis Blériot a
                fost primul pilot care a traversat Canalul Mânecii, în 1909. Charles Lindbergh a realizat prima traversare a Atlanticului, singur
                 și fără escală, în 1927. În 1933, Wiley Post a fost primul pilot de avion care a făcut singur înconjurul lumii. A parcurs 25 000
                 km în 7 zile, 18 ore și 49 minute.</p>
            <img  src="poze/avion1.jpg" alt="av1" style="height: 400px; width: 800px; margin-left: 2%; margin-top: 2%;">
            <p> Asupra unei aeronave aflate în zbor acționează patru forțe care trebuie să se afle în echilibru.
               O forță în general poate fi interpretată ca o tragere sau o împingere asupra unui obiect într-o anumită direcție. </p>
               <img  src="poze/forte.jpg" alt="forte" style="height: 400px; width: 800px; margin-left: 2%; margin-top: 2%;">
            <p> Greutatea este o forță orientată întotdeauna spre centrul Pământului. Ea este direct proporțională
               cu masa avionului și depinde de încărcarea sa. </p>
            <p> Tracțiunea este asigurată de sistemul de propulsie. Valoarea tracțiunii depinde de mai mulți
               factori asociați sistemului de propulsie: tipul motorului, numărul de motoare, comanda motorului, viteza și înălțimea de zbor. </p>
            <p> Rezistența la înaintare (la mișcare) este forța aerodinamică care se opune oricărui corp ce se deplasează într-un fluid. Mărimea acestei forțe este influențată de mai mulți
               factori: forma aeronavei, densitatea și compoziția aerului, viteza. Direcția acestei forțe este întotdeauna opusă direcției de zbor și putem considera că ea "se concentrează" într-un singur punct, numit centru de presiune. </p>
            <p> Portanța este forța care ține avionul în aer și trebuie înțeleasă în raport cu celelalte trei. Ea poate fi generată de orice parte a aeronavei, dar la un avion obișnuit portanța este datorată în special aripii și în particular
               formei specifice în secțiune a aripii. Portanța este o forță aerodinamică datorată "trecerii" unui obiect printr-un fluid. Ea acționează asupra centrului de presiune și este definită ca fiind perpendiculară pe direcția de curgere a fluidului.</p>
          </div>
        </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>