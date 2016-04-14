<?php
if(!isset($_REQUEST['action'])){
	$_REQUEST['action'] = 'demandeConnexion';
}
$action = $_REQUEST['action'];
switch($action){
	case 'demandeConnexion':{
		include("vues/v_connexion.php");
		break;
	}
	case 'valideConnexion':{
		$login = $_REQUEST['login'];
		$mdp = $_REQUEST['mdp'];
		$mdp = md5($_REQUEST['mdp']);
		$visiteur = $pdo->getInfosVisiteur($login,$mdp);
		if(!is_array( $visiteur)){
			ajouterErreur("Login ou mot de passe incorrect");
			include("vues/v_erreurs.php");
			include("vues/v_connexion.php");
		}
		else{
			$id = $visiteur['id'];
			$nom =  $visiteur['nom'];
			$prenom = $visiteur['prenom'];
            $group_id = $visiteur['typeCompte'];
            $group_name = $visiteur['name'];
			connecter($id,$nom,$prenom,$group_id,$group_name);
			// Rediriger l'utilisateur après la connexion
			header("Location: index.php?uc=gererFrais&action=saisirFrais");
			// include("vues/v_sommaire.php");
		}
		break;
	}
	case 'deconnexion':{
			session_destroy();
			header("Location: index.php");
		break;
	}
	default :{
		include("vues/v_connexion.php");
		break;
	}
}
?>