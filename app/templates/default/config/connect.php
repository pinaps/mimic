<?php

define('HOST', 'localhost'); // Domaine ou IP du serveur ou est située la base de données
define('USER', 'root'); // Nom d'utilisateur autorisé à se connecter à la base
define('PASSWORD', '');  // Mot de passe de connexion à la base
define('DBNAME', 'mimicc'); // Base de données sur laquelle on va faire les requêtes

$db_options = array(
    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8", // On force l'encodage en utf8
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, // On récupère tous les résultats en tableau associatif
    PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING // On affiche des warnings pour les erreurs, à commenter en prod (valeur par défaut PDO::ERRMODE_SILENT)
);

try {
 $pdo = new PDO('mysql:host='.HOST.';dbname='.DBNAME, USER, PASSWORD, $db_options);
}
catch (Exception $e) {
	$msgError = $e->getMessage();	
	/*TODO afficher la page d'accueil normale du site avec ce message d'erreur*/
	die('Nous sommes désolés : la base de données de mimimicstrips n\'est actuellement pas disponible.   '. $msgError);
}


?>