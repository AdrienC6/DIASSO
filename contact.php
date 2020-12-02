<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Formulaire de contact de l'association DIASSO.">

    <title>Contact</title>
    <link rel="stylesheet" href="style/bootstrap.min.css">
    <link rel="stylesheet" href="style/style.css">
</head>
<body>
    <!--START NAVBAR-->
    <?php
      require_once 'nav.php'
    ?>
    <!--END NAVBAR-->

    <!-- START FORM -->
    <div class="container-fluid">
          <div class="row justify-content-center" id="title">
            <div class="col-12" >
              <h1 class="text-center">Nous contacter</h1>
            </div>
          </div>
          <div class="row justify-content-center mt-5">
            <div class="col-12 col-lg-4" >
              <form action="" method="POST">
              <div class="form-group">
                      <label for="subject">L'objet de votre demande</label>
                      <select name="subject" size="1" id="subject" class="form-control">
                          <option>Participer à un évènement</option>
                          <option>Devenir membre de l'association</option>
                          <option>Faire un don</option>
                          <option>Autre</option>
                      </select>
                  </div>
                  <div class="form-group">
                      <input type="text" id="name" name="name" class="form-control" placeholder="Votre nom">
                  </div>
                  <div class="form-group">
                      <input type="text" id="firstname" name="firstname" class="form-control" placeholder="Votre prénom">
                  </div>
                  <div class="form-group">
                      <input type="mail" id="email" name="email" class="form-control" placeholder="Votre adresse email">
                  </div>
                  <div class="form-group">
                      <input type="phone" id="phone" name="phone" class="form-control" placeholder="Votre numéro de téléphone">
                  </div>

                  <div class="form-group">
                      <textarea rows="6" name="message" placeholder="Votre message" class="form-control"></textarea>
                  </div>
                  <button type="submit" class="btn btn-light btn-block shadow mb-4">Envoyer</button>
                  <p class="text-center mb-4 text-muted">Disclaimer : ce formulaire de contact est factice</p>
              </form>
            </div>
          </div>
    </div>
    <!-- END FORM -->

   
</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

</html>