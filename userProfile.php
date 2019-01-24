<?php 
$title= "Profil de l'utilisateur" ;
include "header.php"   
?>
<div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body">
            <h5 class="card-title text-center">Mon profil</h5>
            <form class="form-signin">
              <div class="form-label-group">
                <label for="inputPrenom">Prénom</label>
                <input type="text" id="inputPrenom" class="form-control" placeholder="Prénom" required autofocus> 
              </div>
              <div class="form-label-group">
                <label for="inputNom">Nom</label>
                <input type="email" id="inputNom" class="form-control" placeholder="Nom" required> 
              </div>
              <div class="form-label-group">
                <label for="inputPays">Pays</label>
                <input type="text" id="inputPays" class="form-control" placeholder="Pays" required>
              </div>
              <div class="form-label-group">
                <label for="inputVille">Ville</label>
                <input type="text" id="inputVille" class="form-control" placeholder="Ville" required>
              </div>


              <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Enregistrer</button>
              <hr class="my-4">
              <div class="form-label-group">
                <label for="inputEmail disabled">ange.gnamba@gmail.com</label>
                <input type="email" id="inputEmail" class="form-control" placeholder="E-mail" > 
              </div>
              <div class="form-label-group">
                <label for="inputActualPassword">Mot de passe actuel</label>
                <input type="password" id="inputActualPassword" class="form-control" placeholder="Mot de passe">
              </div>
              <div class="form-label-group">
                <label for="inputNewPassword">Nouveau mot de passe</label>
                <input type="password" id="inputNewPassword" class="form-control" placeholder="Mot de passe">
              </div>
              <div class="form-label-group">
                <label for="inputPasswordNewConfirm">Confirmez le nouveau mot de passe</label>
                <input type="password" id="inputPasswordNewConfirm" class="form-control" placeholder="Confirmez le mot de passe" required>
              </div>
              <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Modifier le mot de passe</button>
              
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php 
include "footer.php" 
?>