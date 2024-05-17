<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Accueil - GSB</title>
</head>
<body>
	<?php
		include('include/GSB_UpperBody.php');
	?>

	<h1 align="center">Bienvenue chez GSB</h1>

	<h2 align="center"><i>"Au coeur de la recherche dans le milieu pharmaceutique"</i></h2>
	<p></p>

	<?php
    echo "Bienvenue ".$_SESSION['nom']." votre numero de visiteur est le ".$_SESSION['num'];
	?></p>
	
	<?php
		include('include/GSB_LowerBody.php');
	?>
</body>
</html>