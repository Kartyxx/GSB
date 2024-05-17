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

    $rapNum = $_POST['rapNum'];
    $matricule = $_SESSION['num'];
    $praNum = $_POST['praNum'];
    $rapDate = date('Y-m-d');
    $rapBilan = $_POST["rapBilan"];
    $rapMotif = $_POST["rapMotif"];
    $medicament1 = $_POST["medicament1"];
    $medicament2 = $_POST["medicament2"];
    $echantillon1 = $_POST["echantillon1"];
    $echantillon2 = $_POST["echantillon2"];
    $note = $_POST['note'];





    // Convertir la date de naissance au format aaaa-mm-jj
	$reqSQL = "UPDATE rapportvisite
    SET visMatricule = '$matricule',praNum='$praNum',rapDate='$rapDate ',rapBilan ='$rapBilan', idMotif='$rapMotif',medicament1='$medicament1',echantillon1='$echantillon1',medicament2='$medicament2',echantillon2='$echantillon2', note ='$note'
    WHERE rapNum = $rapNum";

	// Ex�cution de la requ�te
	$connexion->exec($reqSQL);


    header("Location:../FrontEnd/index1.php");

?>
</body>
</html>