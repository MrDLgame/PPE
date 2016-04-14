<?php

// Inclure les fonctions (fct.inc.php) et les classes (class.pdogsb.inc.php)
require_once("include/fct.inc.php");
require_once ("include/class.pdogsb.inc.php");
require_once ("include/class.rangeoption.php");

// Démarrage d'une session PHP
session_start();

// Inclure la vue "v_entete.php"
include("vues/v_entete.php");

// Connexion à la base de données GSB
$pdo = PdoGsb::getPdoGsb();

// L'utilisateur est-il connecté au site ?
$estConnecte = estConnecte();

// Si l'utilisateur n'est pas connecté ou qu'aucune vue n'est demandée, alors, affiché la vue connexion
if(!isset($_REQUEST['uc']) || !$estConnecte){
     $_REQUEST['uc'] = 'connexion';
}

// Stockage dans la variable "uc"
$uc = $_REQUEST['uc'];

// Switch case de la variable "uc"
switch($uc){
	case 'connexion': {
		// Inclure le contrôleur "c_connexion.php"
		include("controleurs/c_connexion.php");
		break;
	}
	case 'gererFrais': {
		// Inclure le contrôleur "c_gererFrais.php"
		include("controleurs/c_gererFrais.php");
		break;
	}
	case 'etatFrais': {
		// Inclure le contrôleur "c_etatFrais.php"
		include("controleurs/c_etatFrais.php");
		break; 
	}
	case 'validFrais': {
		// Inclure le contrôleur "c_validFrais.php"
		include("controleurs/c_validFrais.php");
		break; 
	}
}

// Inclure la vue "v_pied.php"
include("vues/v_pied.php");

?>

