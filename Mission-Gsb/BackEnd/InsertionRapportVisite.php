<?php
	session_save_path("session");
  session_start();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr">
<head>
	<title>Inscription</title>
	<meta http-equiv="Content-Type" content="text/html; charset="utf-8" />
	<link rel="stylesheet" type="text/css" href="css/cssGeneral.css"></link>
</head> 

<body>
<?php
    include("include/connexionBdd.php");

	$matricule="";  
    $praNum="";
    $rapDate="";
    $rapBilan="";
    $rapMotif="";
    $note = "";
    $medicament1 = "";
    $medicament2 ="";
    $echantillon1 = "";
    $echantillon2 = "";

    $matricule = $_SESSION['num'];
    $note = $_POST['note'];
    $praNum = $_POST['praticien'];
    $rapDate = date('Y-m-d');
    $rapBilan = $_POST["rapBilan"];
    $rapMotif = $_POST["motif_visite"];
    $medicament1 = $_POST["medicament1"];
    $medicament2 = $_POST["medicament2"];
    $echantillon1 = $_POST["echantillon1"];
    $echantillon2 = $_POST["echantillon2"];





	$reqSQL = "INSERT INTO rapportvisite (visMatricule, praNum, rapDate, rapBilan, idMotif,medicament1, medicament2, echantillon1, echantillon2, note)
    VALUES ('$matricule', '$praNum', '$rapDate' , '$rapBilan', '$rapMotif','$medicament1','$medicament2','$echantillon2','$echantillon2', '$note')";

    


    // Affichage de la requ�te dans la fen�tre du navigateu

	// Ex�cution de la requ�te
	$connexion->exec($reqSQL);

	// Affichage d'un message d'information ainsi que le num�ro de l'�l�ve cr��
	header("Location:../FrontEnd/index1.php");





?>
</body>
</html>