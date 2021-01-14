<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Participez à la lutte contre le diabète en Afrique. Devenez bénévole ou donateur pour l'association DIASSO.">
  <title>DIASSO</title>
  <link rel="stylesheet" href="style/bootstrap.min.css">
  <link rel="stylesheet" href="style/style.css">
</head>

<body>

  <!--START NAVBAR-->
  <?php
  require_once 'nav.php'
  ?>
  <!--END NAVBAR-->

  <!--START CONTENT-->
  <div class="container-fluid bg-dark">
    <div class="row justify-content-center" id="title">
      <div class="col-12">
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
            <b>DIASSO</b> a été fondée en 1989, par John Doe, médecin endocrinologue à l'Université Paris Descartes.<br><br>
            L'association se mobilise chaque jour pour promouvoir l'accès au soin en Afrique, notamment pour lutter contre le diabète.<br><br>
            Cette pathologie chronique représente un véritable fléau pour ce continent. C'est pourquoi <b>DIASSO</b> intervient directement auprès des malades pour leur apporter l'aide nécessaire à ce combat.<br><br>
            Les soignants bénévoles de l'association accompagnent les diabétiques sur le terrain en leur inculquant les notions indispensables pour vivre avec cette pathologie : nutrition, activité physique, accompagnement psychologique...<br><br>
          </p>
          <h4 class="text-center text-muted mt-5">Notre mission s'organise autour de trois axes :</h4>

          <ul id="mission" class="mx-auto">
            <hr>
            <li>
              <h5>Formation : </h5>
              <p class="text-muted">Nous formons les gens à gérer leur diabète au quotidien grâce à une équipe médicale dédiée.</p>
            </li>
            <hr>
            <li>
              <h5>Education : </h5>
              <p class="text-muted">Nous apprenons aux diabétiques qu'il ne s'agit pas d'une fatalité et que l'on peut très bien vivre avec.</p>
            </li>
            <hr>
            <li>
              <h5>Mise en autonomie : </h5>
              <p class="text-muted">Il est essentiel qu'ils puissent, à terme, gérer par eux-mêmes leur pathologie.</p>
            </li>
          </ul>
        </article>
      </div>

      <div class="col-12 col-lg-6" id="events">
        <article id="eventsTitle">
          <h2 class="h5 text-center pt-3">Evènements</h2>
          <hr class="bg-white">
          <img class="rounded" src="images/father-son.jpg">
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
  <?php
  require_once 'footer.php'
  ?>
  <!--END FOOTER-->


</body>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

</html>