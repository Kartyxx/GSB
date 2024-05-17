



<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Résultats du médicament</title>
    <link rel="stylesheet" type="text/css" href="css/cssGeneral.css">
</head>
<body>
<?php

	include("include/GSB_UpperBody.php");
	include("../BackEnd/include/connexionBdd.php");

	?>

<?php
// Appel du script de connexion 

// Variable pour le nom du médicament
$medicament = $_POST['medoc'];

// Écriture de la requête d'extraction SQL
$reqSQL = "SELECT * FROM medicament WHERE medDepotlegal = '$medicament'";

// Envoi de la requête
$resultat = $connexion->query($reqSQL);

// Vérification si le résultat est faux

    $ligne = $resultat->fetch();

	$nom=$ligne[1];
	$Composition=$ligne[2];
	$Effet= $ligne[3];
	$Prevention= $ligne[4];


	$medicament = "<strong>" . $medicament . "</strong>";
	$nom = "<strong>" . $ligne[1] . "</strong>";
	$Composition = "<strong>" . $ligne[2] . "</strong>";
	$Effet = "<strong>" . $ligne[3] . "</strong>";
	$Prevention = "<strong>" . $ligne[4] . "</strong>";

	echo "<table border='1'>
                <tr>
					<th>Nom Legal</th>
                    <th>Nom Commercial</th>
                    <th>Composition</th>
                    <th>Effet</th>
                    <th>Prevention</th>
                </tr>
                <tr>
					<td>$medicament</td>
                    <td>$nom</td>
                    <td>$Composition</td>
                    <td>$Effet</td>
                    <td>$Prevention</td>
                </tr>
              </table>";





?>

<?php 
  include('include/GSB_LowerBody.php');
 ?>
</body>
</html>








