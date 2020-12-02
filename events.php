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
                        <button class="btn btn-light btn-block" data-toggle="modal" data-target="#modal1">En savoir plus</button>
                    </div>
                </div>
            </div>

            <div class="col-9 col-lg-3 mb-5" >
                <div class="card mx-auto">
                    <img src="images/event2.jpg" class="card-img-top card-img" alt="...">
                    <div class="card-body">
                        <h5 class="card-title text-center">Collecte de fonds</h5>
                        <p class="card-text text-center">Mercredi 20 Janvier 2021</p>
                        <button class="btn btn-light btn-block" data-toggle="modal" data-target="#modal2">En savoir plus</button>
                    </div>
                </div>
            </div>

            <div class="col-9 col-lg-3 mb-5" >
                <div class="card mx-auto">
                    <img src="images/event3.jpg" class="card-img-top card-img" alt="...">
                    <div class="card-body">
                        <h5 class="card-title text-center">Recrutement de bénévoles</h5>
                        <p class="card-text text-center">Mercredi 3 Février 2021</p>
                        <button class="btn btn-light btn-block" data-toggle="modal" data-target="#modal3">En savoir plus</button>
                    </div>
                </div>
            </div>
          </div>
    </div>
    <!-- END CONTENT -->

    <!-- START MODALS -->
    <div class="modal fade" id="modal1" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Présentation de DIASSO</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Fermer">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body text-center">
                    <img src="images/event1.jpg" class="card-img-top card-img" alt="...">
                    <hr>
                    <p>A l'occasion du nouvel-an, nous vous proposons de venir assister à cette conférence dédiée à la présentation de l'association.<br><br>
                    Ceci sera l'occasion pour nous de vous expliquer en quoi l'accès au soin est nécessaire en Afrique pour lutter contre le diabète.
                    </p>
                    <hr>
                    <p>Date : Lundi 11 Janvier 2021</p>
                    <p>Heure : 11h à 13h</p>
                    <p>Lieu : Centre de congrès, Lyon</p>
                    <p>Modalités d'accès : <a href="contact.php">Nous contacter</a></p>

                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modal2" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Collecte de fonds</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Fermer">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body text-center">
                    <img src="images/event2.jpg" class="card-img-top card-img" alt="...">
                    <hr>
                    <p>DIASSO a besoin de vous !<br><br>
                    Pour lutter contre le diabète en Afrique, nous avons besoin de moyens financiers, humains...<br><br>
                    Aujourd'hui l'association organise son premier gala de donnation. Si vous souhaitez oeuvrer pour cette cause, nous vous invitons à y participer.
                    </p>
                    <hr>
                    <p>Date : Mercredi 20 Janvier 2021</p>
                    <p>Heure : 18h à 21h</p>
                    <p>Lieu : Hôpital Necker, Paris</p>
                    <p>Modalités d'accès : <a href="contact.php">Nous contacter</a></p>

                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modal3" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Recrutement de bénévoles</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Fermer">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body text-center">
                    <img src="images/event3.jpg" class="card-img-top card-img" alt="...">
                    <hr>
                    <p>DIASSO organise une campagne de recrutement de bénévoles.<br><br>
                    En effet, notre mission et nos actions s'étendent et demandent de plus en plus de moyens et de bénévoles.<br><br>
                    Si vous souhaitez oeuvrer pour la lutte contre le diabète en Afrique, nous vous accueillerons à bras ouverts.
                    </p>
                    <hr>
                    <p>Date : Mercredi 3 Février 2021</p>
                    <p>Heure : 10h à 14h</p>
                    <p>Lieu : A définir</p>
                    <p>Modalités d'accès : <a href="contact.php">Nous contacter</a></p>

                </div>
            </div>
        </div>
    </div>
    <!-- END MODALS -->
    
    
</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

</html>