<meta charset="utf-8">

<?php
	session_save_path("/var/www/html/gsb/BackEnd/session");
  session_start();
?>

<?php

// Appel du script de connexion au serveur et � la base de donn�es
    include("include/connexionBdd.php");

// On r�cup�re les donn�es saisies dans le formulaire
	$nomSaisi = $_POST['denomination'];
	$motPasseSaisi = $_POST['mot'];

// On r�cup�re dans la base de donn�es le mot de passe qui correspond au nom saisi par le visiteur

	$sql = "SELECT visNom, motDePasse, visMatricule,visPrenom FROM collaborateurs WHERE visNom ='$nomSaisi'";
	$res = $connexion->query($sql);
	echo $sql;
	$ligne = $res->fetch();
	$numVititeur= $ligne[2];
	$motPasseBdd = $ligne[1];
	$nom = $ligne[0];
	$visPrenom =$ligne[3];



	if  ($motPasseSaisi==$motPasseBdd)
	// Le mot de passe est diff�rent de celui de la base utilisateur
	{
		$_SESSION['nom']=$nom;
		$_SESSION['prenom']=$visPrenom;
		$_SESSION['num']=$numVititeur;
		header("Location:../FrontEnd/accueil.php");
	}
	else
	// Le mot de passe saisi correspond � celui de la base utilisateur
	{


        echo "Votre saisie est erronée, Recommencez SVP..."; 


	}

	// on ferme la connexion au SGBD
?>
