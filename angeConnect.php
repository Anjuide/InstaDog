<?php
/* ------------------------------------------------------------------------------------------------------*/
/* ----------------------------------Set UTF-8 as the character set------------------------------------- */
/* ------------------------------------------------------------------------------------------------------*/
header('Content-Type: text/html; charset=utf-8');
/* ------------------------------------------------------------------------------------------------------*/
/* ////////////////////////////////////MA CLASSE DE CONNEXION////////////////////////////////////////////*/
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
    /* -------------------------------------FONCTION D'INSERTION RACE-------------------------------------- */
    /* ------------------------------------------------------------------------------------------------------*/
    public function setRace($race){
        // on prépare notre requête 
        $requete_prepare = $this->connexion->prepare(
            "INSERT INTO Race (nameRace) value (:nameRace)"
        );
        // on exécute la requête en remplaçant :hobby par une variable
        $requete_prepare->execute (
            array ('nameRace' => $race
            )
        );
    }
    /* ------------------------------------------------------------------------------------------------------*/
    /* -----------------------------------FONCTION D'INSERTION USERDOG-------------------------------------- */
    /* ------------------------------------------------------------------------------------------------------*/
    public function setUserDog ($email, $pwd, $lastConnectionDate, $lastName, $firstName, $country, $city ){
        // on prépare notre requête 
        $requete_prepare = $this->connexion->prepare(
            "INSERT INTO UserDog (email, pwd, lastConnectionDate, lastName, firstName, country, city) 
            value (:email, :pwd, :lastConnectionDate, :lastName, :firstName, :country, :city )"
        );
        // on exécute la requête 
        $requete_prepare->execute (
            array ('email' => $email,
                    'pwd' => $pwd,
                    'lastConnectionDate' => $lastConnectionDate,
                    'lastName' => $lastName,
                    'firstName' => $firstName,
                    'country' => $country,
                    'city' => $city
            )
        );
    }
    /* ------------------------------------------------------------------------------------------------------*/
    /* -----------------------------------FONCTION D'INSERTION DOG------------------------------------------ */
    /* ------------------------------------------------------------------------------------------------------*/
    public function Dog ($nickname, $birthday, $picture, $userId){
        // on prépare notre requête 
        $requete_prepare = $this->connexion->prepare(
            "INSERT INTO Dog (nickname, birthday, picture, userId) 
            value (:nickname, :birthday, :picture, :userId)"
        );
        // on exécute la requête 
        $requete_prepare->execute (
            array ('nickname' => $nickname,
                    'birthday' => $birthday,
                    'picture' => $picture,
                    'userId' => $userId
            )
        );
        $id = $this->connexion->lastInsertId();
        return $id;
    }
    /* ------------------------------------------------------------------------------------------------------*/
    /* -------------------------------FONCTION D'INSERTION RELATION RACE ET DOG----------------------------- */
    /* ------------------------------------------------------------------------------------------------------*/
    public function setDogRace ($dogId, $raceId){
        // on prépare notre requête 
        $requete_prepare = $this->connexion->prepare(
            "INSERT INTO DogRace (dogId, raceId) VALUE (:dogId, :raceId)"
        );
        // on exécute la requête
        $requete_prepare->execute (
            array ( 'dogId' => $dogId,
                    'raceId' => $raceId
            )
        );
    }
    /* ------------------------------------------------------------------------------------------------------*/
    /* ---------------------------------FONCTION D'INSERTION ARTICLE---------------------------------------- */
    /* ------------------------------------------------------------------------------------------------------*/
    public function setArticle ($title, $picture, $content, $publicationDate, $dogId){
        // on prépare notre requête 
        $requete_prepare = $this->connexion->prepare(
            "INSERT INTO Article (title, picture, content, publicationDate, dogId) 
            value (:title, :picture, :content, :publicationDate, :dogId)"
        );
        // on exécute la requête 
        $requete_prepare->execute (
            array ('title' => $title,
                    'picture' => $picture,
                    'content' => $content,
                    'publicationDate' => $publicationDate,
                    'dogId' => $dogId
            )
        );
    }
    /* ------------------------------------------------------------------------------------------------------*/
    /* ---------------------------------FONCTION D'INSERTION COMMENT---------------------------------------- */
    /* ------------------------------------------------------------------------------------------------------*/
    public function setComment ($comment, $publicationDate, $articleId, $userId){
        // on prépare notre requête 
        $requete_prepare = $this->connexion->prepare(
            "INSERT INTO Comment (comment, publicationDate, articleId, userId) 
            value (:comment, :publicationDate, :articleId, :userId)"
        );
        // on exécute la requête 
        $requete_prepare->execute (
            array ('comment' => $comment,
                    'publicationDate' => $publicationDate,
                    'articleId' => $articleId,
                    'userId' => $userId
            )
        );
    }
    /* ------------------------------------------------------------------------------------------------------*/
    /* -----------------------------------FONCTION DE SELECTION DES RACES----------------------------------- */
    /* ------------------------------------------------------------------------------------------------------*/
    public function getAllRaces (){
        // On prépare notre requête select
        $requete_prepare = $this->connexion->prepare(
            "SELECT * FROM Race"
        );
        //On exécute la requête 
        $requete_prepare->execute ();
        // Met un tableau d'objets dans la variable resultat
        // Le nom de chaque colonne correspond à une propriété de l'objet
        $resultat=$requete_prepare->fetchAll (PDO::FETCH_OBJ);
        return $resultat;
    }
    /* ------------------------------------------------------------------------------------------------------*/
    /* ---------------------------------FONCTION DE SELECTION DES USERDOG----------------------------------- */
    /* ------------------------------------------------------------------------------------------------------*/
    public function getAllUsersDog (){
        // On prépare notre requête select
        $requete_prepare = $this->connexion->prepare(
            "SELECT * FROM UserDog"
        );
        //On exécute la requête 
        $requete_prepare->execute ();
        // Met un tableau d'objets dans la variable resultat
        // Le nom de chaque colonne correspond à une propriété de l'objet
        $resultat=$requete_prepare->fetchAll (PDO::FETCH_OBJ);
        return $resultat;
    }
    /* ------------------------------------------------------------------------------------------------------*/
    /* ---------------------------------FONCTION DE SELECTION DES DOG--------------------------------------- */
    /* ------------------------------------------------------------------------------------------------------*/
    public function getAllDogs (){
        // On prépare notre requête select
        $requete_prepare = $this->connexion->prepare(
            "SELECT * FROM Dog"
        );
        //On exécute la requête 
        $requete_prepare->execute ();
        // Met un tableau d'objets dans la variable resultat
        // Le nom de chaque colonne correspond à une propriété de l'objet
        $resultat=$requete_prepare->fetchAll (PDO::FETCH_OBJ);
        return $resultat;
    }
    /* ------------------------------------------------------------------------------------------------------*/
    /* ---------------------------------FONCTION DE SELECTION DES ARTICLES---------------------------------- */
    /* ------------------------------------------------------------------------------------------------------*/
    public function getAllArticles (){
        // On prépare notre requête select
        $requete_prepare = $this->connexion->prepare(
            "SELECT * FROM Article"
        );
        //On exécute la requête 
        $requete_prepare->execute ();
        // Met un tableau d'objets dans la variable resultat
        // Le nom de chaque colonne correspond à une propriété de l'objet
        $resultat=$requete_prepare->fetchAll (PDO::FETCH_OBJ);
        return $resultat;
    }
    /* ------------------------------------------------------------------------------------------------------*/
    /* ------------------------------FONCTION DE SELECTION DES COMMENTAIRES--------------------------------- */
    /* ------------------------------------------------------------------------------------------------------*/
    public function getAllComments (){
        // On prépare notre requête select
        $requete_prepare = $this->connexion->prepare(
            "SELECT * FROM Comment"
        );
        //On exécute la requête 
        $requete_prepare->execute ();
        // Met un tableau d'objets dans la variable resultat
        // Le nom de chaque colonne correspond à une propriété de l'objet
        $resultat=$requete_prepare->fetchAll (PDO::FETCH_OBJ);
        return $resultat;
    }
    /* ------------------------------------------------------------------------------------------------------*/
    /* ----------------------------FONCTION DE SELECTION USERDOG PAR UN ID --------------------------------- */
    /* ------------------------------------------------------------------------------------------------------*/
    public function getUserDog ($id){
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
        // Je récupère le résultat de la requête
        $userDog = $requete_prepare->fetchAll (PDO::FETCH_OBJ);
        // Je retourne la liste de hobbies
        return $userDog;
    }
    /* ------------------------------------------------------------------------------------------------------*/
    /* ----------------------------FONCTION DE SELECTION DOG PAR UN ID ------------------------------------- */
    /* ------------------------------------------------------------------------------------------------------*/
    public function getDog ($userId){
        // Je prépare ma requête 
        $requete_prepare = $this->connexion -> prepare (
            "SELECT * 
            FROM Dog
            WHERE userId = :userId" 
        );
        // J'execute la requête en passant la valeur
        $requete_prepare -> execute (
            array ('userId' => $userId
            )
        );
        // Je récupère le résultat de la requête
        $userDog = $requete_prepare->fetchAll (PDO::FETCH_OBJ);
        // Je retourne la liste de hobbies
        return $userDog;
    }
    /* ------------------------------------------------------------------------------------------------------*/
    /* ----------------------------FONCTION DE SELECTION RACE PAR UN ID ------------------------------------ */
    /* ------------------------------------------------------------------------------------------------------*/
    public function getDogRace ($dogId){
        // Je prépare ma requête 
        $requete_prepare = $this->connexion -> prepare (
            "SELECT r.nameRace 
            FROM Race r
            INNER JOIN DogRace dr
            ON r.id = dr.raceId
            WHERE dr.dogId = :dogId" 
        );
        // J'execute la requête en passant la valeur
        $requete_prepare -> execute (
            array ('dogId' => $dogId
            )
        );
        // Je récupère le résultat de la requête
        $hobbies = $requete_prepare->fetchAll (PDO::FETCH_OBJ);
        // Je retourne la liste de hobbies
        return $hobbies;
    }
    /* ------------------------------------------------------------------------------------------------------*/
    /* ----------------------------FONCTION DE SELECTION ARTICLE PAR UN ID --------------------------------- */
    /* ------------------------------------------------------------------------------------------------------*/
    public function getDogArticle ($dogId){
        // Je prépare ma requête 
        $requete_prepare = $this->connexion -> prepare (
            "SELECT * 
            FROM Article
            WHERE dogId = :dogId" 
        );
        // J'execute la requête en passant la valeur
        $requete_prepare -> execute (
            array ('dogId' => $dogId
            )
        );
        // Je récupère le résultat de la requête
        $listArticles = $requete_prepare->fetchAll (PDO::FETCH_OBJ);
        // Je retourne la liste de hobbies
        return $listArticles;
    }
    /* ------------------------------------------------------------------------------------------------------*/
    /* --------------------------FONCTION DE SELECTION COMMENTAIRES PAR UN ID ------------------------------ */
    /* ------------------------------------------------------------------------------------------------------*/
    public function getArticleComment ($userId){
        // Je prépare ma requête 
        $requete_prepare = $this->connexion -> prepare (
            "SELECT * 
            FROM Comment
            WHERE userId = :userId" 
        );
        // J'execute la requête en passant la valeur
        $requete_prepare -> execute (
            array ('userId' => $userId
            )
        );
        // Je récupère le résultat de la requête
        $listArticles = $requete_prepare->fetchAll (PDO::FETCH_OBJ);
        // Je retourne la liste de hobbies
        return $listArticles;
    }

}
?>