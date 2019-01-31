<?php

require('config.php');

$appliDB = new Connexion();
 
 if  (is_null($appliDB)) {
    echo "<br/>CONNEXION FAILED";
} else {
    echo "CONNEXION DE BASE DE DONNEES REUSSIE";
}

?>