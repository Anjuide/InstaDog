<?php 
$title = "Profil de l'utilisateur";
include "header.php";
require('config.php');
//include ('login.php');
//$appli  = new Connexion();

?>
<div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body">
            <h5 class="card-title text-center">Inscrivez-vous</h5>
            <hr class="my-4">
            <form method="post" action="login.php" class="form-signin">

              <div class="form-label-group">
                <label for="inputEmail">Adresse e-mail</label>
                <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Adresse e-mail" required autofocus> 
              </div>

              <div class="form-label-group">
                <label for="inputPassword">Mot de passe</label>
                <input type="password" name="password_1" id="inputPassword" class="form-control" placeholder="Mot de passe" required>
              </div>

              <div class="form-label-group">
                <label for="inputPasswordConfirm">Confirmez le mot de passe</label>
                <input type="password" name="password_2" id="inputPasswordConfirm" class="form-control" placeholder="Confirmez le mot de passe" required>
              </div>
              <hr class="my-4">
              
              <button class="btn btn-lg btn-primary btn-block text-uppercase" name="reg_user" type="submit">S'inscrire</button>
                <div class="text-center">
                  <a class="small" href="connexion.php">Vous avez déjà un compte? Connectez-vous ici</a>
                </div>
              <!-- <hr class="my-4">
              <button class="btn btn-lg btn-google btn-block text-uppercase" type="submit"><i class="fab fa-google mr-2"></i> Continuer avec Google</button>
              <button class="btn btn-lg btn-facebook btn-block text-uppercase" type="submit"><i class="fab fa-facebook-f mr-2"></i> Continuer avec Facebook</button> -->
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <?php

  if (isset($_POST['reg_user'])) {

    

  }
  ?>



<?php 
include "footer.php"
?>