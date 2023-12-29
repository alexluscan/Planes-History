<?php
  session_start();
  include "module/modul-functii.php";
  include "module/modul-setari.php";
  $pagina = 'avioane-de-lupta-jet';
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="csspp.css">
    <style>
      
    </style>
  </head>
  <body>
  <?php
        include "./module/modul-navigare.php";
      ?>

      <div class="container mt-4">
        <div class="row">
          <!-- coloana 2 -->
          <div class="col-md-7">
            <div class="textnivele bg-light">
              <p>&nbsp</p>
              <h1 style="text-align:center;">Avioane de lupta jet</h1>
              <p>&nbsp</p>
              <p>
              În domeniul aviatic a devenit un obicei clasificarea avioanelor de luptă în "generații", în scop istoric, cu toate că nu există definiții oficiale ale acestor generații de avioane de vânătoare. Aceste categorii reprezintă mai degrabă etape în dezvoltarea acestor avioane, diferențe în metodele de proiectare, diferențe privind performanța și evoluția tehnologică. De asemenea, autorii clasifică avioanele de vânătoare în generații diferite. De exemplu Richard P. Hallion, secretar al Grupului de acțiune al Air Force a clasificat F-16 ca un avion de vânătoare cu reacție din generația a VI-a .
              </p>
              <p>F-35 Lightning II este un avion de vânătoare monoloc, multirol, cu tehnologie stealth, un singur motor, conceput atât pentru misiuni de superioritate aeriană, cât și de asalt. Printre capabilitățile sale se numără și recunoaștere aeriană, bombardare strategică, supraveghere militară și război electronic.</p>
          </div>
          </div>

          <div class="col-md">
            
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true" style="display: flex; text-align: center;">
              <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
              </div>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="poze/jet1.jpg" class="d-block w-100 imgcarusel">
                </div>
                <div class="carousel-item">
                  <img src="poze/jet2.jpg" class="d-block w-100 imgcarusel">
                </div>
                <div class="carousel-item">
                  <img src="poze/jet3.jpg" class="d-block w-100 imgcarusel">
                </div>
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
          </div>

        </div>
      </div>
      </div>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>