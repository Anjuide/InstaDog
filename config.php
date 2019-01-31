<?php
/* ------------------------------------------------------------------------------------------------------*/
/* //////////////////////////////////////CLASSE DE CONNEXION/////////////////////////////////////////////*/
/* ------------------------------------------------------------------------------------------------------*/
class Connexion
{
    private $connexion;

    public function __construct()
    {
        // le chemin vers le serveur
        $PARAM_hote = 'localhost';

        // le port de connexion à la base de données
        $PARAM_port = '3306';
        // le nom de la base de données

        $PARAM_nom_bd = 'InstaDog';

        // Le nom d'utilisateur pour se connecter 
        $PARAM_utilisateur = 'adminInstaDog';

        // le mot de passe de l'utilisateur pour se connecter
        $PARAM_mot_passe = 'Inst@D0g';

        // Attraper les exceptions 
        try {
            $this->connexion = new PDO(
                'mysql:host=' . $PARAM_hote . '; dbname=' . $PARAM_nom_bd,
                $PARAM_utilisateur,
                $PARAM_mot_passe
            );
        } catch (Exception $e) {
            echo 'Erreur: ' . $e->getMessage() . '<br/>';
            echo 'N° : ' . $e->getCode();
        }
    } // Fin __construct   
} // Fin Connexion

?>
