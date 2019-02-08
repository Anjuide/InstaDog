<?php 
$title = "Profil de l'utilisateur";
include "header.php";
require('config.php');
$appli = new Connexion();


?>
<div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body">
            <h5 class="card-title text-center">Connexion</h5>
            <hr class="my-4">
            <form method="post" action="connexion.php" class="form-signin">
              <div class="form-label-group">
                <label for="inputEmail">Adresse e-mail</label>
                <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Adresse e-mail" required autofocus> 
              </div>

              <div class="form-label-group">
                <label for="inputPassword">Mot de passe</label>
                <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Mot de passe" required>
              </div>
              <hr class="my-4">
              <!-- <div class="custom-control custom-checkbox mb-3">
                <input type="checkbox" class="custom-control-input" id="customCheck1">
                <label class="custom-control-label" for="customCheck1">Se souvenir de moi</label>
              </div> -->
              <button class="btn btn-lg btn-primary btn-block text-uppercase" name="log_user" type="submit">Connexion</button>
              <div class="text-center">
                  <a class="small" href="#">Mot de passe oublié?</a>
              </div>
              <div class="text-center">
                 <a class="small" href="inscription.php">Vous n'avez pas de compte? Inscrivez-vous ici</a>
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

  $email    = "";

  $errors = array(); 

  if (isset($_POST['log_user'])) {


  // receive all input values from the form

   
    $email    =  ($_POST['email']);

    $password =  ($_POST['password']);

    
    // form validation: ensure that the form is correctly filled ...
    // by adding (array_push()) corresponding error unto $errors array


  if (empty($email)) { array_push($errors, "Email is required"); }

  if (empty($password)) { array_push($errors, "Password is required"); }


  // first check the database to make sure 
  // a user is already exist with the same  email

  $user = $appli->checkUserIsExist($email);

  if ($user) { // if user exists

     

    $pwd = $user->getPwd();

    $id  = $user->getId();

    
    if (password_verify($password, $pwd)) { //Verify the Entered password With saving in the database

      $appli->insertLastConnectionDateToUser($id);

      $_SESSION['username'] = $email;

      $_SESSION['useeId'] = $id;

      $_SESSION['success'] = "You are now logged in";

      echo 'You are now logged in';

      echo $id;


    } else {

      echo 'Le mot pass ou email ';

    }  
 
     
  }
    

}
?>


<?php 
include "footer.php"
?>