<?php
	session_save_path("../BackEnd/session");
  session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
	<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<link rel="stylesheet" type="text/css" href="../css/GSB_general.css"></link>
	<script src="https://kit.fontawesome.com/191a3d3a60.js" crossorigin="anonymous"></script>
</head>

<body>
	<div class="main_header">
  	<div id="logo">
  			<a href ="accueil.php">
  				<img src="../css/images/GSB_IMG_logo.png">
  			</a>
  	</div>
  	<div id="NomPrenom">
  		<label for="NomPrenom" data-con="../css/images/GSB_IMG_ident.png"></label>
  </div>
	</div>
	<div class = "GSB_menu">
		<div class="menu">
			<p class="enabled"><i class="fa-solid fa-bars"></i>	 Menu</p>
			<a href="RapportDeVisite.php">Saisie de rapports</a>
			<a href="FormulaireRechercheMedicament.php">Recherche de médicament</a>
			<a href="RapportModifier.php">Modification de rapports</a>
		</div>
	</div>
	<div class = "GSB_body">
</body>