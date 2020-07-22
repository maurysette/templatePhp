<?php

define('USER', "root");
define('PASSWD', "Cutt!ng2020");
define('DBNAME', "video");
define('HOST', "localhost");

$dsn = 'mysql:host=' . HOST . ';dbname=' . DBNAME . ';charset=utf8';
try {
    // On se connecte � MySQL
    $bdd = new PDO($dsn, USER, PASSWD, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    // le array permet de stocker les erreurs pour afficher les d�tails de l'erreur
} catch (Exception $e) {
    // En cas d'erreur, on affiche un message et on arr�te tout
    die('Erreur : ' . $e->getMessage());
}
/*include 'RequeteSql.php';

$requete = new RequeteSql($bdd);
include 'template_EEdge.php';*/

 ?>




