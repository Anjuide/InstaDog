<?php

require('Connexion.php');
/* ------------------------------------------------------------------------------------------------------*/
/* ------------------------------------------- NEW OBJET ----------------------------------------------- */
/* ------------------------------------------------------------------------------------------------------*/
$appli = new Connexion();
/* ------------------------------------------------------------------------------------------------------*/
/* ------------------------------------- TESTER LA CONNEXION ------------------------------------------- */
/* ------------------------------------------------------------------------------------------------------*/
if (is_null($appli)) {
    echo "<br/>CONNEXION FAILED";
} else {
    echo "CONNEXION DE BASE DE DONNEES REUSSIE";
}
echo "</br>";
/* ------------------------------------------------------------------------------------------------------*/
/* ----------------------------------------UTILISATEUR(S)----------------------------------------------- */
/* ------------------------------------------------------------------------------------------------------*/

$userP = $appli->getUserProfile(1);
$userId = $userP->getId();
$userDogs = $appli->getUserDogs($userId);
$userP->setListDogs($userDogs);
$users = $appli->getUsers();
var_dump($users);
echo "<ul>";
foreach ($users as $value) {
    echo "<li>" . $value->getId() . "</li>";
    echo "<li>" . $value->getEmail() . "</li>";
    echo "<li>" . $value->getPwd() . "</li>";
    echo "<li>" . $value->getLastConnectionDate() . "</li>";
    echo "<li>" . $value->getLastName() . "</li>";
    echo "<li>" . $value->getFirstName() . "</li>";
    echo "<li>" . $value->getCountry() . "</li>";
    echo "<li>" . $value->getCity() . "</li>";
    echo "<li>" . $value->getListDogs() . "</li>";
    echo "</br>";
}
echo "</ul>";

$userProfile = $appli->getUserProfile(1); // CHOISIR L'UTILISATEUR
$userId = $userProfile->getId(); // GARDER SON ID
$userDogs = $appli->getUserDogs($userId); // CHOISIR LES CHIENS DE L'UTILISATEUR
$userProfile->setListDogs($userDogs); // SAUVEGARDER LA LISTE DE CHIENS DE L'UTILISATEUR
var_dump($userProfile);

echo "ID: " . $userProfile->getId() . "</br>";
echo "Email: " . $userProfile->getEmail() . "</br>";
echo "PWD: " . $userProfile->getPwd() . "</br>";
echo "Last Connection Date: " . $userProfile->getLastConnectionDate() . "</br>";
echo "Last name:  " . $userProfile->getLastName() . "</br>";
echo "First name: " . $userProfile->getFirstName() . "</br>";
echo "Country: " . $userProfile->getCountry() . "</br>";
echo "City: " . $userProfile->getCity() . "</br>";
//echo "List Dogs: " . $userProfile->getListDogs() . "</br>";

/* ------------------------------------------------------------------------------------------------------*/
/* ----------------------------------------------- DOG(S) ---------------------------------------------- */
/* ------------------------------------------------------------------------------------------------------*/



$dogs = $appli->getDogs();
var_dump($dogs);
echo "<ul>";
foreach ($dogs as $dog) {
    echo "<li>" . $dog->getId() . "</li>";
    echo "<li>" . $dog->getNickname() . "</li>";
    echo "<li>" . $dog->getBirthday() . "</li>";
    echo "<li>" . $dog->getPicture() . "</li>";
    echo "<li>" . $dog->getListRaces() . "</li>";
    echo "<li>" . $dog->getUserId() . "</li>";
    echo "<li>" . $dog->getListArticles() . "</li>";
    echo "</br>";
}
echo "</ul>";

$dogProfile = $appli->getDogProfile(1);
var_dump($dogProfile);
echo "ID: " . $dogProfile->getId() . "</br>";
echo "Nickname: " . $dogProfile->getNickname() . "</br>";
echo "Birthday: " . $dogProfile->getBirthday() . "</br>";
echo "Picture: " . $dogProfile->getPicture() . "</br>";
echo "List de races:  " . $dogProfile->getListRaces() . "</br>";
echo "UserId: " . $dogProfile->getUserId() . "</br>";
echo "Liste d'articles: " . $dogProfile->getListArticles() . "</br>";

$userDogs = $appli->getUserDogs(1);
var_dump($userDogs);
echo "<ul>";
foreach ($userDogs as $userDog) {
    echo "<li>" . $userDog->getId() . "</li>";
    echo "<li>" . $userDog->getNickname() . "</li>";
    echo "<li>" . $userDog->getBirthday() . "</li>";
    echo "<li>" . $userDog->getPicture() . "</li>";
    echo "<li>" . $userDog->getListRaces() . "</li>";
    echo "<li>" . $userDog->getUserId() . "</li>";
    echo "<li>" . $userDog->getListArticles() . "</li>";
    echo "</br>";
}
echo "</ul>";

/* ------------------------------------------------------------------------------------------------------*/
/* -------------------------------------------- ARTICLE(S) --------------------------------------------- */
/* ------------------------------------------------------------------------------------------------------*/
$articles = $appli->getArticles();
var_dump($articles);
echo "<ul>";
foreach ($articles as $article) {
    echo "<li>" . $article->getId() . "</li>";
    echo "<li>" . $article->getTitle() . "</li>";
    echo "<li>" . $article->getPicture() . "</li>";
    echo "<li>" . $article->getDescription() . "</li>";
    echo "<li>" . $article->getPublicationDate() . "</li>";
    echo "<li>" . $article->getDogId() . "</li>";
    echo "<li>" . $article->getListComments() . "</li>";
    echo "</br>";
}
echo "</ul>";

$articleDetails = $appli->getArticleDetails(1);
var_dump($articleDetails);
echo "ID: " . $articleDetails->getId() . "</br>";
echo "Titre: " . $articleDetails->getTitle() . "</br>";
echo "Picture: " . $articleDetails->getPicture() . "</br>";
echo "Description: " . $articleDetails->getDescription() . "</br>";
echo "Date de publication:  " . $articleDetails->getPublicationDate() . "</br>";
echo "DogId: " . $articleDetails->getDogId() . "</br>";
echo "List de commentaires: " . $articleDetails->getListComments() . "</br>";

$dogArticles = $appli->getDogArticles(33);
var_dump($dogArticles);
echo "<ul>";
foreach ($dogArticles as $dogArticle) {
    echo "<li>" . $dogArticle->getId() . "</li>";
    echo "<li>" . $dogArticle->getTitle() . "</li>";
    echo "<li>" . $dogArticle->getPicture() . "</li>";
    echo "<li>" . $dogArticle->getDescription() . "</li>";
    echo "<li>" . $dogArticle->getPublicationDate() . "</li>";
    echo "<li>" . $dogArticle->getDogId() . "</li>";
    echo "<li>" . $dogArticle->getListComments() . "</li>";
    echo "</br>";
}
echo "</ul>";

/* ------------------------------------------------------------------------------------------------------*/
/* -------------------------------------------- COMMENT(S) --------------------------------------------- */
/* ------------------------------------------------------------------------------------------------------*/
$comments = $appli->getComments();
var_dump($comments);
echo "<ul>";
foreach ($comments as $comment) {
    echo "<li>" . $comment->getId() . "</li>";
    echo "<li>" . $comment->getComment() . "</li>";
    echo "<li>" . $comment->getPublicationDate() . "</li>";
    echo "<li>" . $comment->getArticleId() . "</li>";
    echo "<li>" . $comment->getUserId() . "</li>";
    echo "</br>";
}
echo "</ul>";

$commentDetails = $appli->getCommentDetails(1);
var_dump($commentDetails);
echo "ID: " . $commentDetails->getId() . "</br>";
echo "Commentaire: " . $commentDetails->getComment() . "</br>";
echo "Date de publication: " . $commentDetails->getPublicationDate() . "</br>";
echo "Article Id: " . $commentDetails->getArticleId() . "</br>";
echo "UserId:  " . $commentDetails->getUserId() . "</br>";

$articleComments = $appli->getArticleComments(1);
var_dump($articleComments);
echo "<ul>";
foreach ($articleComments as $articleComment) {
    echo "<li>" . $articleComment->getId() . "</li>";
    echo "<li>" . $articleComment->getComment() . "</li>";
    echo "<li>" . $articleComment->getPublicationDate() . "</li>";
    echo "<li>" . $articleComment->getArticleId() . "</li>";
    echo "<li>" . $articleComment->getUserId() . "</li>";
    echo "</br>";
}
echo "</ul>";
?>

