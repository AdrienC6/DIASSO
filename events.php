<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Calendrier des évènements de l'association DIASSO.">
    <title>Evènements</title>
    <link rel="stylesheet" href="style/bootstrap.min.css">
    <link rel="stylesheet" href="style/style.css">
</head>
<body>
    <!--START NAVBAR-->
    <?php
      require_once 'nav.php'
    ?>
    <!--END NAVBAR-->


    <!-- START CONTENT -->
    <div class="container-fluid">
          <div class="row justify-content-center" id="title">
            <div class="col-12" >
              <h1 class="text-center">Evènements</h1>
            </div>
          </div>
          <div class="row mt-5" style="justify-content : space-around">
            <div class="col-9 col-lg-3 mb-5" >
                <div class="card mx-auto">
                    <img src="images/event1.jpg" class="card-img-top card-img" alt="...">
                    <div class="card-body">
                        <h5 class="card-title text-center">Présentation de DIASSO</h5>
                        <p class="card-text text-center">Lundi 11 Janvier 2021</p>
                        <a href="#" class="btn btn-light btn-block">En savoir plus</a>
                    </div>
                </div>
            </div>

            <div class="col-9 col-lg-3 mb-5" >
                <div class="card mx-auto">
                    <img src="images/event2.jpg" class="card-img-top card-img" alt="...">
                    <div class="card-body">
                        <h5 class="card-title text-center">Collecte de fonds</h5>
                        <p class="card-text text-center">Mercredi 20 Janvier 2021</p>
                        <a href="#" class="btn btn-light btn-block">En savoir plus</a>
                    </div>
                </div>
            </div>

            <div class="col-9 col-lg-3 mb-5" >
                <div class="card mx-auto">
                    <img src="images/event3.jpg" class="card-img-top card-img" alt="...">
                    <div class="card-body">
                        <h5 class="card-title text-center">Recrutement bénévoles</h5>
                        <p class="card-text text-center">Mercredi 3 Février 2021</p>
                        <a href="#" class="btn btn-light btn-block">En savoir plus</a>
                    </div>
                </div>
            </div>
          </div>
    </div>
    <!-- END CONTENT -->
    
    
</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

</html>