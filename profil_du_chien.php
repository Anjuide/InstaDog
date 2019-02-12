<?php 
$title = "Profil du chien";
include "header.php";

require('config.php');



$appli       = new Connexion();
$id          = $_GET["id"];


session_start(); 
$_SESSION['useeId'] = $id;     /* Stocker Un Id de Chien pour l'utiliser dans le Ajouter Aricl Page */


/* ------------------------------------------------------------------------------------------------------*/
$dog        = $appli->getDogById($id);       /* Appler La Function pour Récupérer data  de DOG */
/* ------------------------------------------------------------------------------------------------------*/
$picture    = $dog->getPicture();
$nickName   = $dog->getNickName();
$birthday   = $dog->getBirthday();
$userId     = $dog->getUserId();

$_SESSION['picture'] = $picture;

/* ------------------------------------------------------------------------------------------------------*/
$usrDog    = $appli->getProfileUserById($userId);   /* Appler La Function pour Récupérer data  de USERDOG */
/* ------------------------------------------------------------------------------------------------------*/
$firstName = $usrDog->getFirstName();
$lastName  = $usrDog->getLastName();
$city      = $usrDog->getCity();

/* ------------------------------------------------------------------------------------------------------*/
$articls   = $appli->getArticlsByDogId($id);  /* Appler La Function pour Récupérer data  de Articls    */
/* ------------------------------------------------------------------------------------------------------*/
 


 
?>
<style>
.container2 {
  position: relative;
  text-align: left;
  color: white;
}

.bottom-left2 {
  position: absolute;
  top: 8px;
  left: 5%;
}

.myleft{
    padding-left:0px;
	font-size: 30px;
}

</style>
 

<div class="container2">
  <?php echo  "<img src=\"$picture\"  class=\"src\" style=\"width:100%;\">"; ?>
    <!-- <img src="img/img_snow_wide.jpg" alt="Snow" style="width:100%;"> -->
    <div class="bottom-left2">
        <div>
        <?php echo   "<h2><a href=\"#\">$nickName</a></h2>"; ?>
            <ul class="myleft" >
        <?php   echo     "<li>$birthday</li>"; ?>
        <?php   echo     "<li> $firstName . $lastName </li>"  ?>	
        <?php   echo     "<li> $city </li>"  ?>
            </ul> 
        </div> 
    </div> 
</div> 
 
 
 
<div class="container-liste-articles$id">
	<?php echo	"<div class=\"post show post-photopost\" style=\"background-image: url($picture); background-color: #8F9DB1; background-position: 50% 0%;\" id=\"post-944ydm\" data-id=\"515448\" data-type=\"post\" data-created=\"1520035310\">"; ?>
			<div class="post-bgscreen">
				<div class="post-container">
						<a href="AjouteeUnArticle.php" class="btn btn-primary">
							<button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Ajouter Un Article</button>
						</a>
				</div><!-- post-container -->
			</div><!-- post-bgscreen -->
        </div><!-- post -->
		
		<!-- -------------------------------------  ------LES ARTICLS---------------------------------------------------*/ -->



<?php


    foreach  ($articls  as  $arts) {
		
		$tite 			 = $arts->getTite();
		$picture_articl  = $arts->getPicture();
		$description     = $arts->getDescription();
		$publicationDate = $arts->getPublicationDate();

	echo	"<div class=\"post show post-photopost\" style=\"background-image: url($picture_articl); background-color: #98A5B0; background-position: 50% 0%;\" id=\"post-ng2VjB\" data-id=\"516849\" data-type=\"post\" data-created=\"1521933880\">";
	echo		"<div class=\"post-bgscreen\">";
	echo			"<div class=\"post-container\">";
	echo				"<div class=\"post-header\">";
	echo					"<h2><a href=\"#\" class=\"post-dogname\" title=\"See more Border Collie photos of Barney\">$tite</a> tend <a href=\"#\" class=\"post-breedname\" title=\"Border Collie photos\">la patte</a> par <a href=\"#\" class=\"post-humanname\">Ange Gnamba</a></h2>";
	 					
	echo					"<div class=\"post-stamp\">";	
	echo						"<div class=\"post-time\"><a href=\"#\">$publicationDate</a></div>";
	echo					"</div>";
	echo				"</div>";     /*<!-- post-header --> */

	echo				"<div class=\"post-content\">";
	echo					"<a class=\"post-wrapper\" href=\"article_du_chien.php\"><img src=\"$picture_articl\" alt=\"Barney the Border Collie\"></a>";
	echo				"</div>";

	echo				"<div class=\"post-actions\">";				
	echo					"<div class=\"post-caption\">";
	echo						"<p>$description </p>";
	echo					"</div>";
	echo				"</div>";
	echo			"</div>";             /*  post-container   */
	echo		"</div>";                 /*    post-bgscreen   */
			
	}
		
?>


     </div><!-- post -->


<!--
		<div class="post show post-photopost" style="background-image: url(http://usercontent.packdog.com/post/photo/bg/Hf1X_c_e828bc05634ce0b0f5f70813577a4d0114e85760.jpg); background-color: #475448; background-position: 50% 0%;" id="post-tmjcqH" data-id="516214" data-type="post" data-created="1521155560">
		
			<div class="post-bgscreen">
				<div class="post-container">

					<div class="post-header">
					
						<h2><a href="#" class="post-dogname" title="See more Border Collie photos of Barney">Rod</a> à <a href="http://packdog.com/breed/border-collie" class="post-breedname" title="Border Collie photos">la campagne</a> par<a href="/human/megprice" class="post-humanname">Ange Gnamba</a></h2>
						
						<div class="post-stamp">				
							><a href="#">13.01.2019</a></div>
							
					</di	

					<div	
							#"><img src="http://usercontent.packdog.com/post/photo/Hf1X_c_e828bc05634ce0b0f5f70813577a4d0114e85760.jpg" alt="Barney the Border Collie"></a>
							
					</div>

					<div class="post-actions">
				
					</div>
				</div>      
			</div>  
			
		</div>       
		




	
		<div class="post show post-photopost" style="background-image: url(http://usercontent.packdog.com/post/photo/bg/6qUGGa_914ddfd5128bf6343382f0c6d7419a69ffeeb1c0.jpg); background-color: #8F9DB1; background-position: 50% 0%;" id="post-944ydm" data-id="515448" data-type="post" data-created="1520035310">
			<div class="post-bgscreen">
				<div class="post-container">
					<div class="post-header">	
						
						<h2>
                            <a class="post-dogname" href="#" title="See more Border Collie photos of Barney">Rod</a> et 
                            <a class="post-dogname" href="#" title="See more Border Collie photos of Flynn">son poto</a> par
                            <a href="#" class="post-humanname">Ange Gnamba</a>
                        </h2>
						<div class="post-stamp">						
							<div class="post-time"><a href="#">11.01.2019</a></div>
						</div>
					</div> 

					<div class="post-content">
						<a class="post-wrapper" href="#"><img src="http://usercontent.packdog.com/post/photo/6qUGGa_914ddfd5128bf6343382f0c6d7419a69ffeeb1c0.jpg" alt="Barney the Border Collie"></a>
					</div>

					<div class="post-actions">
						<div class="post-caption">
							<p>						
								Une belle histoire d'amour, de vie, de joie entre Rod et son poto Smiley, ils se rencontrés quelque part en ville. Oui des chiens peubent faire des rencontres tout seul!
							</p>
						</div>
					</div>
				</div> 
			</div> 
			
        </div>  
	
</div>-->

<?php 
include "footer.php"
?>