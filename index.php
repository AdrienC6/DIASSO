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
        <div class="container-fluid">
          <div class="row justify-content-center mb-3" id="title">
            <div class="col-12" >
              <h1 class="text-center">DIASSO : Faciliter la vie du diabétique en Afrique</h1>
            </div>
          </div>
          <div class="row justify-content-center">
            <div class="col-12 col-lg-8">
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
          </div>
          
          <div class="row justify-content-center">
            <div class="col-12 col-lg-6" id="presentation">
              <div id="presentationTitle">
                  <h2 class="h5 text-center pt-3">Qui sommes-nous ?</h2>

                  <p class="text-center">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum
                  </p>
                  <blockquote class="blockquote text-right pb-2">
                    <small class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</small>
                    <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>
                  </blockquote>
              </div>
            </div>

            <div class="col-12 col-lg-6" id="events">
              <div id="eventsTitle">
                  <h2 class="h5 text-center pt-3">Evènements</h2>
                  <p class="text-center">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum
                  </p>
                  <button class="btn btn-light btn-block"><a href="events.php">Calendrier</a></button>
              </div>
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