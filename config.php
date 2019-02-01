<?php

class Connexion{

    private $connexion;

    public function __construct(){

        $PARAM_hote = 'localhost';

        $PARAM_port = '3306';

        $PARAM_nom_bd = 'InstaDog';

        $PARAM_utilisateur = 'adminInstaDog';

        $PARAM_mot_passe = 'Inst@D0g';
  
        try {
            $this->connexion = new PDO(
                'mysql:host='.$PARAM_hote.';dbname='.$PARAM_nom_bd,
                $PARAM_utilisateur,
                $PARAM_mot_passe);

        } catch( Exception $e) {
            echo 'Erreur : '.$e->getMessage(). '<br />';
            echo 'N° : '.$e->getCode();
        }
    }


    public function getProfileUserById($id) {

        $requete_prepare = $this->connexion->prepare(
            "SELECT * FROM UserDog WHERE id = :id");
    
        $requete_prepare -> execute(array("id" => $id ));
        $userProfile=$requete_prepare->fetchObject("UserProfile");
        return $userProfile; 


    }


}

class UserDog {

    public $id;
    public $email;
    public $pwd;
    public $lastConnectionDate;

        public function __set($name, $value){}
        public function setId($id) { $this->id = $id; }
        public function getId() { return $this->id; }
        public function setEmail($email) { $this->email = $email; }
        public function getEmail() { return $this->email; }
        public function setPwd($pwd) { $this->pwd = $pwd; }
        public function getPwd() { return $this->pwd; }
        public function setLastConnectionDate($lastConnectionDate) { $this->lastConnectionDate = $lastConnectionDate; }
        public function getLastConnectionDate() { return $this->lastConnectionDate; }
}

class UserProfile extends UserDog {
     
    private $lastName;
    private $firstName;
    private $country;
    private $city;
    private $listDogs;

        public function setLastName($lastName) { $this->lastName = $lastName; }
        public function getLastName() { return $this->lastName; }
        public function setFirstName($firstName) { $this->firstName = $firstName; }
        public function getFirstName() { return $this->firstName; }
        public function setCountry($country) { $this->country = $country; }
        public function getCountry() { return $this->country; }
        public function setCity($city) { $this->city = $city; }
        public function getCity() { return $this->city; }

        
}

class Dog {

    private $id;
    private $nickName;
    private $birthday;
    private $picture;
    private $userId;
    private $listRaces;
    private $listArticles;

        public function __set($name, $value){}
        public function setId($id) { $this->id = $id; }
        public function getId() { return $this->id; }
        public function setNickName($nickName) { $this->nickName = $nickName; }
        public function getNickName() { return $this->nickName; }
        public function setBirthday($birthday) { $this->birthday = $birthday; }
        public function getBirthday() { return $this->birthday; }
        public function setPicture($picture) { $this->picture = $picture; }
        public function getPicture() { return $this->picture; }
        public function setUserId($userId) { $this->userId = $userId; }
        public function getUserId() { return $this->userId; }
        public function setListRaces($listRaces) { $this->listRaces = $listRaces; }
        public function getListRaces() { return $this->listRaces; }
        public function setListArticles($listArticles) { $this->listArticles = $listArticles; }
        public function getListArticles() { return $this->listArticles; }


}

class Articl {

    private $id;
    private $tite;
    private $picture;
    private $description;
    private $publicationDate;
    private $dogId;
    private $listComments;

        public function __set($name, $value){}
        public function setId($id) { $this->id = $id; }
        public function getId() { return $this->id; }
        public function setTite($tite) { $this->tite = $tite; }
        public function getTite() { return $this->tite; }
        public function setPicture($picture) { $this->picture = $picture; }
        public function getPicture() { return $this->picture; }
        public function setDescription($description) { $this->description = $description; }
        public function getDescription() { return $this->description; }
        public function setPublicationDate($publicationDate) { $this->publicationDate = $publicationDate; }
        public function getPublicationDate() { return $this->publicationDate; }
        public function setDogId($dogId) { $this->dogId = $dogId; }
        public function getDogId() { return $this->dogId; }
        public function setListComments($listComments) { $this->listComments = $listComments; }
        public function getListComments() { return $this->listComments; }
    



}

class Comment {

    private $id;
    private $comment;
    private $publicationDate;
    private $articleId;
    private $userId;

        public function __set($name, $value){}
        public function setId($id) { $this->id = $id; }
        public function getId() { return $this->id; }
        public function setComment($comment) { $this->comment = $comment; }
        public function getComment() { return $this->comment; }
        public function setPublicationDate($publicationDate) { $this->publicationDate = $publicationDate; }
        public function getPublicationDate() { return $this->publicationDate; }
        public function setArticleId($articleId) { $this->articleId = $articleId; }
        public function getArticleId() { return $this->articleId; }
        public function setUserId($userId) { $this->userId = $userId; }
        public function getUserId() { return $this->userId; }


}






?>
