<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr">
<head>
	<title>Inscription</title >
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<link rel="stylesheet" type="text/css" href="css/cssGeneral.css"></link>
    <script type="text/javascript" language="JavaScript" src="include/controleFormulaire.js"></script> 
</head>

<body>
<?php
	include("../BackEnd/include/connexionBdd.php");
	include("include/GSB_UpperBody.php");
	?>
  <table   style="width: 100%">
    <tr>
      <td style="width: 50%; text-align: right;"><h1>Recherche de Medicament&nbsp;&nbsp;</h1></td>
    </tr>
  </table>



  <p><br /></p>
  <form name="inscription" action="selectMedicament.php" method ="post">

  	<fieldset class="separateur"><legend class="legende">
         <table>
            <tr>
            <select id="medoc" name="medoc">
              <?php

              $reqSQL1 = "select medNomcommercial, medDepotLegal  from medicament";
              $result=$connexion->query($reqSQL1);
              $ligne = $result->fetch();
              while ($ligne!= false)
              { 
              $id= $ligne["medDepotLegal"]; 
              $lib= $ligne["medNomcommercial"]; 
              echo "<option value='$id'>$lib</option>";
              $ligne = $result->fetch();
              }
              ?>
            </select>
            </tr>
            
          </table></legend>
  	</fieldset>
      <p>
  		<input class="bouton" type="submit" id="envoie" name="boutonValider" value="Valider" />
        <input class="bouton" type="reset" id="annule" name="boutonAnnuler" value="Annuler" />
  	</p>
</form>
<?php
  include('include/GSB_LowerBody.php');
?>
</body>
</html>