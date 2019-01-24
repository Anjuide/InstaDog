<?php 
$title= "Profil de l'utilisateur" ;
include "header.php"   
?>
<div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body">
            <h5 class="card-title text-center">Se connecter</h5>
            <form class="form-signin">
              <div class="form-label-group">
                <label for="inputEmail">Adresse e-mail</label>
                <input type="email" id="inputEmail" class="form-control" placeholder="Adresse e-mail" required autofocus> 
              </div>

              <div class="form-label-group">
                <label for="inputPassword">Mot de passe</label>
                <input type="password" id="inputPassword" class="form-control" placeholder="Mot de passe" required>
              </div>

              <div class="custom-control custom-checkbox mb-3">
                <input type="checkbox" class="custom-control-input" id="customCheck1">
                <label class="custom-control-label" for="customCheck1">Se souvenir de moi</label>
              </div>
              <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Se connecter</button>
                <div class="text-center">
                  <a class="small" href="#">Vous n'avez pas de compte? Inscrivez-vous ici</a>
                </div>
              <hr class="my-4">
              <button class="btn btn-lg btn-google btn-block text-uppercase" type="submit"><i class="fab fa-google mr-2"></i> Continuer avec Google</button>
              <button class="btn btn-lg btn-facebook btn-block text-uppercase" type="submit"><i class="fab fa-facebook-f mr-2"></i> Continuer avec Facebook</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php 
include "footer.php" 
?>