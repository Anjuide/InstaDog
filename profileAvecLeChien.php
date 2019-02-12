<?php 
$title = "Profil User Avec Ses Chien";
session_start();
include "header.php";
 
require('config.php');

$appli       = new Connexion();

/* ------------------------------------------------------------------------------------------------------*/
/* ////////////////////////////   APPELER LES FUNCTION POUR RECUPER LES DATA   //////////////////////////*/
/* ------------------------------------------------------------------------------------------------------*/

$id = $_SESSION['userId'];

$userProfile = $appli->getProfileUserById($id);
$dogs        = $appli->getAllDogsUser($id);

$id          = $userProfile->getId();
$email       = $userProfile->getEmail();
$lastName    = $userProfile->getLastName();
$firstName   = $userProfile->getFirstName();
$country     = $userProfile->getCountry();
$city        = $userProfile->getCity();

?>
<div class="container">
        <form method="post"  class="form-signin">
        <div class="aj-btn" style="width: 40%;margin-top:0px;" >   
            <button class="btn btn-lg btn-primary btn-block text-uppercase"   name="AjoutUnchien" type="submit">Ajouter un chien</button>
        </div>

    <div class="row">
    
        <div class="col-sm-9 col-md-7 col-lg-5 ">
            <div class="card card-signin my-5">
                <div class="card-body">
                <h5 class="card-title text-center">Mon profil</h5>
                 
                <div class="form-label-group">
                <label for="inputPrenom">Prénom</label>
                <input type="text" id="inputPrenom" class="form-control" name="firstName" value="<?php echo  $firstName;?>" placeholder="Prénom" required autofocus> 
                </div>
                <div class="form-label-group">
                <label for="inputNom">Nom</label>
                <input type="text" id="inputNom" class="form-control" name="lastName" value="<?php echo  $lastName;?>" placeholder="Nom" required> 
                </div> 
                <div class="form-label-group">
                <label for="inputPays">Pays</label>
                <input type="text" id="inputPays" class="form-control"name="country" value="<?php echo  $country;?>" placeholder="Pays" required>
                </div>
                <div class="form-label-group">
                <label for="inputVille">Ville</label>
                <input type="text" id="inputVille" class="form-control"name="city" value="<?php echo  $city;?>" placeholder="Ville" required>
                </div>
            <!--    <button class="btn btn-lg btn-primary btn-block text-upp ercase" name= "modifier-User" type="submit">Modifier</button> -->
                <button class="btn btn-lg btn-primary btn-block text-uppercase" name= "registrer" type="submit">Enregistrer</button>
                </div>
            </div> 
            </form>     
        </div>

   
        <?php 
            echo "<div class=\"col\">"; 
        $arrlength = 0;
        foreach  ($dogs  as  $dogy) { 

           $picture  = $dogy->getPicture();
           $nickName = $dogy->getNickName();
           $dogId       = $dogy->getId();
           
            if ($arrlength % 2 === 0){
            echo     "<div class=\"row\">";
            echo "<div class=\"col\">";      
            } 

            echo           "<div class=\"col\" style=\"margin-top:50px;\">";
            echo                "<a href=profil_du_chien.php?id=$dogId>";
            echo                "<div class=\"card\" style=\"width: 17rem;margin:auto; padding:0;\">";
            echo                    "<img class=\"card-img-top\" src=\"$picture \" alt=\"Card image\">";
            echo                    "<div class=\"card-img-overlay\">";
            echo                    "<h4 class=\"card-title dogyy\">$nickName</h4>";
            echo                    "</div>";
            echo                "</div>";
            echo                "</a>";
            echo            "</div>";
            echo     "</div> ";
            $arrlength++;
        }
        ?>


<?php

    if (isset($_POST['registrer'])) {

    // enregister les valuer de Input qui change
     
    $id =         $_SESSION['userId'];
    $lastName  =  ($_POST['lastName']);
    $firstName =  ($_POST['firstName']);
    $country   =  ($_POST['country']);
    $city      =  ($_POST['city']);

    $appli->UpdateUserProfile($id, $lastName, $firstName, $country, $city);

    echo "<script> window.location.href =\"profileAvecLeChien.php\"</script>";

    }

    if (isset($_POST['AjoutUnchien'])) {

        echo "<script> window.location.href =\"ajouterUnChien.php\"</script>";
    
        }
    
  
?>
<!--
        <div class="row">
            <div class="col">
                <a href="profil_du_chien.php">
                <div class="card" style="width: 18rem;margin-top:52px;">
                    <img class="card-img-top" src="images/D1.jpeg" alt="Card image">
                    <div class="card-img-overlay">
                    <h4 class="card-title dogyy">Scopy Dooo</h4>
                    </div>
                </div>
                </a>
            </div>

            <div class="col">
                <a href="profil_du_chien.php">
                <div class="card" style="width: 18rem;margin-top:52px;">
                    <img class="card-img-top" src="images/D2.jpeg" alt="Card image">
                    <div class="card-img-overlay">
                    <h4 class="card-title dogyy">Scopy Dooo</h4>
                    </div>
                </div>
                </a>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <a href="profil_du_chien.php">
                <div class="card" style="width: 18rem;margin-top:52px;">
                    <img class="card-img-top" src="images/D3.jpeg" alt="Card image">
                    <div class="card-img-overlay">
                    <h4 class="card-title dogyy">Scopy Dooo</h4>
                    </div>
                </div>
                </a>
            </div>


            <div class="col">
                <a href="profil_du_chien.php">
                <div class="card" style="width: 18rem;margin-top:52px;">
                    <img class="card-img-top" src="images/D4.jpeg" alt="Card image">
                    <div class="card-img-overlay">
                    <h4 class="card-title dogyy">Scopy Dooo</h4>
                    </div>
                </div>
                </a>  
            </div> 
        </div>

    -->

        </div>
     </div>
  

<?php 
include "footer.php"
?>
