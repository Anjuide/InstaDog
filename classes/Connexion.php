<?php
/* ------------------------------------------------------------------------------------------------------*/
/* ----------------------------------Set UTF-8 as the character set------------------------------------- */
/* ------------------------------------------------------------------------------------------------------*/
header('Content-Type: text/html; charset=utf-8');
/* ------------------------------------------------------------------------------------------------------*/
/* ///////////////////////////////////////CLASSE DE CONNEXION////////////////////////////////////////////*/
/* ------------------------------------------------------------------------------------------------------*/
class Connexion {
    private $connexion;

    public function __construct(){
        // le chemin vers le serveur
        $PARAM_hote='localhost';
        // le port de connexion à la base de données
        $PARAM_port='3306';
        // le nom de la base de données
        $PARAM_nom_bd='InstaDog';
        // Le nom d'utilisateur pour se connecter 
        $PARAM_utilisateur='adminInstaDog';
        // le mot de passe de l'utilisateur pour se connecter
        $PARAM_mot_passe='Inst@D0g';
        // Attraper les exceptions (au cas où ce qui est dans le try ne marche pas)
        try{
            $this->connexion = new PDO (
                'mysql:host='.$PARAM_hote.';
                dbname='.$PARAM_nom_bd, $PARAM_utilisateur, $PARAM_mot_passe);
        } catch (Exception $e) {
            echo 'Erreur: ' .$e->getMessage() . '<br/>';
            echo 'N° : '.$e->getCode();
        }
    }
    /* ------------------------------------------------------------------------------------------------------*/
    /* ----------------------------FONCTION DE SELECTION USERDOG PAR UN ID --------------------------------- */
    /* ------------------------------------------------------------------------------------------------------*/
    public function getUserProfile ($id){
        // Je prépare ma requête 
        $requete_prepare = $this->connexion -> prepare (
            "SELECT * 
            FROM UserDog
            WHERE id = :id" 
        );
        // J'execute la requête en passant la valeur
        $requete_prepare -> execute (
            array ('id' => $id
            )
        );
        // Je récupère le résultat de la requête dans mon object UserDog
        $userDog = $requete_prepare->fetchObject("Profile");
        // Je retourne la liste de hobbies
        return $userDog;
    }
    /* ------------------------------------------------------------------------------------------------------*/
    /* --------------------------------FONCTION DE SELECTION DOG PAR UN ID --------------------------------- */
    /* ------------------------------------------------------------------------------------------------------*/
    public function getDogProfile ($id){
        // Je prépare ma requête 
        $requete_prepare = $this->connexion -> prepare (
            "SELECT * 
            FROM Dog
            WHERE id = :id" 
        );
        // J'execute la requête en passant la valeur
        $requete_prepare -> execute (
            array ('id' => $id
            )
        );
        // Je récupère le résultat de la requête dans mon object UserDog
        $dog = $requete_prepare->fetchObject("Dog");
        // Je retourne la liste de hobbies
        return $dog;
    }

}

// CLASSE USERDOG
include "UserDog.php";
// CLASSE DOG
include "Dog.php";
// CLASSE ARTICLE
include "Article.php";
// CLASSE COMMENT
include "Comment.php";

?>