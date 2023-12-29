<?php
  session_start();
  include "module/modul-functii.php";
  include "module/modul-setari.php";
  $pagina = 'avioane-de-lupta-clasice';
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
        include "module/modul-navigare.php";
      ?>

      <div class="container mt-4">
        <div class="row">
          <!-- coloana 2 -->
          <div class="col-md-7">
            <div class="textnivele bg-light">
              <p>&nbsp</p>
              <h1 style="text-align:center;">Avioane de lupta clasice</h1>
              <p>&nbsp</p>
              <p>
              Avioanele de vânătoare au fost dezvoltate în Primul Război Mondial pentru a împiedica avioanele inamice și dirijabilele, să efectueze recunoaștere aeriană. Avioanele de vânătoare timpurii au fost foarte mici și ușor înarmate în comparație cu standardele de mai târziu și majoritatea au fost avioane biplane construite cu un cadru de lemn, acoperite cu material textil, și cu viteza de peste 100 km/h. Controlul spațiului aerian deasupra armatei devenind tot mai important, toate marile puteri au dezvoltat avioane de vânătoare pentru a sprijini operațiunile militare. Între războaie, lemnul a fost în mare parte înlocuit cu structură tubulară din oțel, care a fost înlocuită apoi cu aluminiu. În cel de-Al Doilea Război Mondial cele mai multe avioane de vânătoare au fost fabricate în totalitate din metal, erau avioane monoplane armate, cu baterii de mitraliere sau tunuri, iar unele au fost capabile de viteze de peste 400 km/h.
              </p>
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
                  <img src="poze/cl1.jpg" class="d-block w-100 imgcarusel">
                </div>
                <div class="carousel-item">
                  <img src="poze/cl2.jpg" class="d-block w-100 imgcarusel">
                </div>
                <div class="carousel-item">
                  <img src="poze/cl3.webp" class="d-block w-100 imgcarusel">
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