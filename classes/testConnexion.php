<?php

require('Connexion.php');

$appli = new Connexion();
 
 if  (is_null($appli)) {
    echo "<br/>CONNEXION FAILED";
} else {
    echo "CONNEXION DE BASE DE DONNEES REUSSIE";
}

$userProfile = $appli->getUserProfile(1);
 
$id = $userProfile->getId();

$email = $userProfile->getEmail();

$lastName = $userProfile->getLastName();

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

// echo "City : " . $city . "</br>" . "</br>"; 
?>
<script >
    alert("hello");
</script>
