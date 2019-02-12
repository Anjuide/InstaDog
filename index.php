<?php 
// Titre de la page
$title = "Bienvenue sur Instadog";
// INCLURE LE HEADER
include "header.php";
require('config.php');
$appli       = new Connexion();

$dogs        = $appli->getAllDogs();

/* ------------------------------------------------------------------------------------------------------*/
/* ////////////////////////////   APPELER LES FUNCTION POUR RECUPER LES DATA   //////////////////////////*/
/* ------------------------------------------------------------------------------------------------------*/



/* ///////// CONTAINER DU BODY /////////*/

echo "<div class=\"container\">";
    echo "<div class=\"row\">";
       /////////* IMAGE DU CHIEN ET SON NICKNAME /////////*///
       foreach  ($dogs  as  $dogy) { 
        $picture  = $dogy->getPicture();
        $nickName = $dogy->getNickName();
        $id       = $dogy->getId();
         
        echo "<div class=\"card col-lg-3 col-md-4\" style=\"width: 17rem; margin:auto; padding:0;\">";
        echo     "<a href=\"profil_du_chien.php?id=$id\">";
        echo         "<img class=\"card-img-top\" src=\"$picture\">";
        echo         "<div class=\"card-img-overlay\">";
        echo            "<h4 class=\"card-title dogyy\">$nickName</h4>";     
        echo        "</div>";
        echo    "</a>";
        echo "</div>";
        }

        echo   "</div>";$id = $appli->getLastId();
        echo "</div>";
        ?>
<!--
        <div class="card col-lg-3 col-md-4" style="width: 17rem; margin:auto; padding:0;">
            <a href="profil_du_chien.php">
                <img class="card-img-top" src="https://i.pinimg.com/originals/96/0d/f4/960df454b14816497f877c48e4705dc0.jpg" alt="Photo de profil de ">
                <div class="card-img-overlay">
                    <h4 class="card-title dogyy">Scooby-Dooo</h4>     
                </div>
            </a>
        </div>

        <div class="card col-lg-3 col-md-4" style="width: 17rem; margin:auto; padding:0;">
            <a href="profil_du_chien.php">
                <img class="card-img-top" src="images/D2.jpeg" alt="Photo de profil de ">
                <div class="card-img-overlay">
                    <h4 class="card-title dogyy">Scooby-Dooo</h4>   
                </div>
            </a>
        </div>

        <div class="card col-lg-3 col-md-4" style="width: 17rem; margin:auto; padding:0;">
            <a href="profil_du_chien.php">
                <img class="card-img-top" src="images/D3.jpeg" alt="Photo de profil de ">
                <div class="card-img-overlay">
                    <h4 class="card-title dogyy">Scooby-Dooo</h4> 
                </div>
            </a>
        </div>

        <div class="card col-lg-3 col-md-4" style="width: 17rem; margin:auto; padding:0;">
            <a href="profil_du_chien.php">
                <img class="card-img-top" src="images/D4.jpeg" alt="Photo de profil de ">
                <div class="card-img-overlay">
                    <h4 class="card-title dogyy">Scooby-Dooo</h4>  
                </div>
            </a>
        </div>

        <div class="card col-lg-3 col-md-4" style="width: 17rem; margin:auto; padding:0;">
            <a href="profil_du_chien.php">
                <img class="card-img-top" src="images/D5.jpeg" alt="Photo de profil de ">
                <div class="card-img-overlay">
                    <h4 class="card-title dogyy">Scooby-Dooo</h4> 
                </div>
            </a>
        </div>

        <div class="card col-lg-3 col-md-4" style="width: 17rem; margin:auto; padding:0;">
            <a href="profil_du_chien.php">
                <img class="card-img-top" src="images/D6.jpeg" alt="Photo de profil de ">
                <div class="card-img-overlay">
                    <h4 class="card-title dogyy">Scooby-Dooo</h4>
                </div>
            </a>
        </div>

        <div class="card col-lg-3 col-md-4" style="width: 17rem; margin:auto; padding:0;">
            <a href="profil_du_chien.php">
                <img class="card-img-top" src="images/D7.jpeg" alt="Photo de profil de ">
                <div class="card-img-overlay">
                    <h4 class="card-title dogyy">Scooby-Dooo</h4>
                </div>
            </a>
        </div>

        <div class="card col-lg-3 col-md-4" style="width: 17rem; margin:auto; padding:0;">
            <a href="profil_du_chien.php">
                <img class="card-img-top" src="images/D8.jpeg" alt="Photo de profil de ">
                <div class="card-img-overlay">
                    <h4 class="card-title dogyy">Scooby-Dooo</h4>
                </div>
            </a>
        </div>

        <div class="card col-lg-3 col-md-4" style="width: 17rem; margin:auto; padding:0;">
            <a href="profil_du_chien.php">
                <img class="card-img-top" src="images/D9.jpeg" alt="Photo de profil de ">
                <div class="card-img-overlay">
                    <h4 class="card-title dogyy">Scooby-Dooo</h4>
                </div>
            </a>
        </div>

        <div class="card col-lg-3 col-md-4" style="width: 17rem; margin:auto; padding:0;">
            <a href="profil_du_chien.php">
                <img class="card-img-top" src="images/D10.jpeg" alt="Photo de profil de ">
                <div class="card-img-overlay">
                    <h4 class="card-title dogyy">Scooby-Dooo</h4>  
                </div>
            </a>
        </div>

        <div class="card col-lg-3 col-md-4" style="width: 17rem; margin:auto; padding:0;">
            <a href="profil_du_chien.php">
                <img class="card-img-top" src="images/D18.jpeg" alt="Photo de profil de ">
                <div class="card-img-overlay">
                    <h4 class="card-title dogyy">Scooby-Dooo</h4> 
                </div>
            </a>
        </div>

        <div class="card col-lg-3 col-md-4" style="width: 17rem; margin:auto; padding:0;">
            <a href="profil_du_chien.php">
                <img class="card-img-top" src="images/D12.jpeg" alt="Photo de profil de ">
                <div class="card-img-overlay">
                    <h4 class="card-title dogyy">Scooby-Dooo</h4> 
                </a>
            </div>
        </div>

        <div class="card col-lg-3 col-md-4" style="width: 17rem; margin:auto; padding:0;">
            <a href="profil_du_chien.php">
                <img class="card-img-top" src="images/D13.jpeg" alt="Photo de profil de ">
                <div class="card-img-overlay">
                    <h4 class="card-title dogyy">Scooby-Dooo</h4>
                </div>
            </a>
        </div>

        <div class="card col-lg-3 col-md-4" style="width: 17rem; margin:auto; padding:0;">
            <a href="profil_du_chien.php">
                <img class="card-img-top" src="images/D14.jpeg" alt="Photo de profil de ">
                <div class="card-img-overlay">
                    <h4 class="card-title dogyy">Scooby-Dooo</h4>  
                </div>
            </a>
        </div>

        <div class="card col-lg-3 col-md-4" style="width: 17rem; margin:auto; padding:0;">
            <a href="profil_du_chien.php">
                <img class="card-img-top" src="images/D15.jpeg" alt="Photo de profil de ">
                <div class="card-img-overlay">
                    <h4 class="card-title dogyy">Scooby-Dooo</h4> 
                </div>
            </a>
        </div>

        <div class="card col-lg-3 col-md-4" style="width: 17rem; margin:auto; padding:0;">
            <a href="profil_du_chien.php">
                <img class="card-img-top" src="images/D16.jpeg" alt="Photo de profil de ">
                <div class="card-img-overlay">
                    <h4 class="card-title dogyy">Scooby-Dooo</h4>   
                </div>
            </a>
        </div>

        <div class="card col-lg-3 col-md-4" style="width: 17rem; margin:auto; padding:0;">
            <a href="profil_du_chien.php">
                <img class="card-img-top" src="images/D17.jpeg" alt="Photo de profil de ">
                <div class="card-img-overlay">
                    <h4 class="card-title dogyy">Scooby-Dooo</h4>   
                </div>
            </a>
        </div>

        <div class="card col-lg-3 col-md-4" style="width: 17rem; margin:auto; padding:0;">
            <a href="profil_du_chien.php">
                <img class="card-img-top" src="images/D18.jpeg" alt="Photo de profil de ">
                <div class="card-img-overlay">
                    <h4 class="card-title dogyy">Scooby-Dooo</h4>  
                </div>
            </a>
        </div>

        <div class="card col-lg-3 col-md-4" style="width: 17rem; margin:auto; padding:0;">
            <a href="profil_du_chien.php">
                <img class="card-img-top" src="images/D19.jpeg" alt="Photo de profil de ">
                <div class="card-img-overlay">
                    <h4 class="card-title dogyy">Scooby-Dooo</h4>  
                </div>
            </a>
        </div>

        <div class="card col-lg-3 col-md-4" style="width: 17rem; margin:auto; padding:0;">
            <a href="profil_du_chien.php">
                <img class="card-img-top" src="images/D17.jpeg" alt="Photo de profil de ">
                <div class="card-img-overlay">
                    <h4 class="card-title dogyy">Scooby-Dooo</h4>  
                </div>
            </a>
        </div>  
    </div>
</div>-->


<?php 
// INCLURE FOOTER
include "footer.php"
?>
