<?php 
// SE CONNECTER A LA BASE DE DONNEES
require("classes/Connexion.php");
// ON DEMARRE LA SESSION AVANT D'ECRIRE DU CODE HTML
session_start();
// DEMARRER UN NOUVEL OBJET DE CONNEXION
$appli = new Connexion();
// TITRE DE LA PAGE
$title = "Bienvenue sur Instadog";
// INCLURE LE HEADER
include "header.php";

?>
<div class="container">
  <div class="row">
    <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
      <div class="card card-signin my-5">
        <div class="card-body">
          <h5 class="card-title text-center">Connexion</h5>
          <hr class="my-4">
          <form class="form-signin" action="" method="post" enctype="multipart/form-data" >
            <?php include "connexion-form.php";?>
            <div class="form-label-group">
              <label for="inputEmail">Adresse e-mail</label>
              <input type="email" id="inputEmail"  name="email" class="form-control" placeholder="Adresse e-mail" required autofocus> 
            </div>

            <div class="form-label-group">
              <label for="inputPassword">Mot de passe</label>
              <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Mot de passe" required>
            </div>
            <hr class="my-4">
            <button class="btn btn-lg btn-success btn-block text-uppercase" name="connexion" type="submit">Connexion</button>
            <div class="text-center">
                <a class="small" href="#">Mot de passe oublié?</a>
            </div>
            <div class="text-center">
              <span class="small">Vous n'avez pas de compte? </span>
                <a class="small" href="inscription.php">Inscrivez-vous ici</a>
              </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<?php
//   $email    = "";
//   $errors = array(); 
  
//   if (isset($_POST['connexion'])) {

//   // receive all input values from the form

//     $email    =  ($_POST['email']);
//     $password =  ($_POST['password']);

//     // form validation: ensure that the form is correctly filled ...
//     // by adding (array_push()) corresponding error unto $errors array

//   if (empty($email)) { array_push($errors, "Email is required"); }

//   if (empty($password)) { array_push($errors, "Password is required"); }

//   // first check the database to make sure 
//   // a user is already exist with the same  email

//   $user = $appli->checkUserIsExist($email);

//   if ($user) { // if user exists
     
//     $pwd = $user->getPwd();
//     $id  = $user->getId();
    
//     if (password_verify($password, $pwd)) { //Verify the Entered password With saving in the database

//       $appli->insertLastConnectionDateToUser($id);

//       $_SESSION['username'] = $email;
//       $_SESSION['userId'] = $id;
//       $_SESSION['success'] = "You are now logged in";

//       echo 'You are now logged in';

//       echo $id;

//       echo "<script> window.location.href =\"profileAvecLeChien.php\"</script>";


//     } else {

//       echo 'Mouvais un mot pass ou un email  ';

//     }  
 
     
//   }
    

// }
?>


<?php 

include "footer.php"
?>