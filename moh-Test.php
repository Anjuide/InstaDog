<?php

require('config.php');

$appli = new Connexion();
 
 if  (is_null($appli)) {
    echo "<br/>CONNEXION FAILED";
} else {
    echo "CONNEXION DE BASE DE DONNEES REUSSIE";
}

echo "</br>" . "</br>";

$dogs = $appli->getAllDogsUser(1);

var_dump($dogs);


echo "</br>" . "</br>";

$dog = $appli->getDogById(16);

var_dump($dog);

echo "</br>" . "</br>";

$articl = $appli->getArticlsByDogId(1);

var_dump($articl);


$d=strtotime("10:30pm April 15 2014");

echo "</br>" . "</br>";

//$d = dat();




echo "Created date is " . date("Y-m-d h:i:sa", $d);







/* $dogs = $appli->getAllDogs();

 var_dump($dogs);

/*
//$userProfile = new UserProfile; 

$userProfile = $appli->getProfileUserById(1);
 
$id = $userProfile->getId();

$email = $userProfile->getEmail();

//$lastName = $userProfile->getLastName();

$firstName = $userProfile->getFirstName();

$country = $userProfile->getCountry();

$city = $userProfile-> getCity();

echo "</br>" . "</br>";

foreach ($userProfile as $uP)
{
    echo "$uP <br>";
}

var_dump($userProfile);

echo "User ID :  " . $id . "</br>" . "</br>";


echo "User Email   " . $email . "</br>" . "</br>";

echo "User First name :  " . $firstName . "</br>" . "</br>";

echo "User Last name : " . $lastName . "</br>" . "</br>";

echo "Country : " . $country . "</br>" . "</br>";

echo "City : " . $city . "</br>" . "</br>";



$listDog = $appli->getListRaces(1);



$DogProfile = $appli->getProfileDogById(1);

echo "</br>" . "</br>"; 

foreach ($DogProfile as $dP)
{
    echo "$dP <br>";
}
var_dump($DogProfile);

*/

?>