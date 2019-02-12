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

$appli       = new Connexion();

session_start();

// initializing variables


$email    = "";

$errors = array(); 

if (isset($_POST['reg_user'])) {

  // receive all input values from the form

   
  $email =  ($_POST['email']);

  $password_1 =  ($_POST['password_1']);

  $password_2 =  ($_POST['password_2']);


  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array


  if (empty($email)) { array_push($errors, "Email is required"); }

  if (empty($password_1)) { array_push($errors, "Password is required"); }

  if ($password_1 != $password_2) {array_push($errors, "The two passwords do not match");}

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email

  $user = $appli->checkUserIsExist($email);

  if ($user) { // if user exists
     
      array_push($errors, "email already exists");
      
      
      var_dump($user);


  }
  // Finally, register user if there are no errors in the form
  
  if (count($errors) == 0) {

  	$pwd = password_hash($password_1, PASSWORD_DEFAULT); //encrypt the password before saving in the database
    $appli->insertUser($email, $pwd);

    $id = $appli->getLastId();

    $appli->insertLastConnectionDateToUser($id);

    $_SESSION['username'] = $email;

    $_SESSION['userId'] = $id;

    $_SESSION['success'] = "You are now logged in";

    echo 'You are now logged in';

    echo "</br>" . "</br>";

    echo $id;
    
  //echo "<script> window.location.href =\"inscription.php\"</script>";

  } else {

    echo 'there are  errors';

   // echo "<script> window.location.href =\"inscription.php\"</script>";

  }






}

  ?>



<?php 
include "footer.php"
?>