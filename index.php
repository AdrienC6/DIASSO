<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DIASSO</title>
    <link rel="stylesheet" href="style/bootstrap.min.css">
    <link rel="stylesheet" href="style/style.css">
</head>
<body>

    <!--START HEADER-->
    
    <!--END HEADER-->

    <!--START NAVBAR-->
    <?php
    require_once 'nav.php'
    ?>
    <!--END NAVBAR-->

    <!--START CONTENT-->
        <div class="container-fluid bg-dark">
          <div class="row justify-content-center" id="title">
            <div class="col-12" >
              <h1 class="text-center">DIASSO : Faciliter la vie du diabétique en Afrique</h1>
            </div>
          </div>
          <div class="row justify-content-center">
              <div class="carousel-container mx-auto">
                <div id="carousel" class="carousel slide mx-auto" data-ride="carousel">
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <img src="images/carousel3.jpg" class="d-block w-100 carousel-pic" alt="...">
                    </div>
                    <div class="carousel-item">
                      <img src="images/carousel2.jpg" class="d-block w-100 carousel-pic" alt="...">
                    </div>
                    <div class="carousel-item">
                      <img src="images/carousel1.jpg" class="d-block w-100 carousel-pic" alt="...">
                    </div>
                  </div>
                  <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
                </div>
              </div>
            </div>
          
          
          <div class="row justify-content-center">
            <div class="col-12 col-lg-6" id="presentation">
              <article id="presentationTitle">
                  <h2 class="h5 text-center pt-3">Qui sommes-nous ?</h2>
                <hr>
                  <p class="text-center">
                    L'association DIASSO se mobilise chaque jour pour promouvoir l'accès au soin en Afrique, notamment pour lutter contre le diabète.<br><br>
                    Cette pathologie chronique représente un véritable fléau pour ce continent. C'est pourquoi DIASSO intervient directement auprès des malades pour leur apporter l'aide nécessaire à ce combat.<br><br>
                    Notre mission s'organise autour de trois axes :
                    <ul id="mission" class="text-center" type="none">
                      <li>
                        <hr>
                        Prévention
                        <hr>
                      </li>
                      <li>
                        Education 
                        <hr>
                      </li>
                      <li>
                        Autonomie
                      </li>
                    </ul>
                  </p>
              </article>
            </div>

            <div class="col-12 col-lg-6" id="events">
              <article id="eventsTitle">
                  <h2 class="h5 text-center pt-3">Evènements</h2>
                  <p class="text-center">
                    Chaque année, nous organisons divers évènements en France afin de représenter notre association, de sensibiliser la population à la nécessité des soins en Afrique et de récolter des fonds pour financer nos opérations.<br><br>
                    Pour assister à l'un de nos évènements il est impératif de nous <a href="contact.php">contacter</a> en amont.</p>
                  </p>
                  <button class="btn btn-light btn-block mt-4 mb-4"><a href="events.php">Calendrier</a></button>
              </article>
            </div>
            </div>
          </div>
        </div>
    <!--END CONTENT-->

    <!--START FOOTER-->
    <!--END FOOTER-->
    
</body>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</html>