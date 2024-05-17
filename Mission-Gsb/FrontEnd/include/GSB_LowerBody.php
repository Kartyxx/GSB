<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
	<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<link rel="stylesheet" type="text/css" href="../css/GSB_general.css"></link> 
</head>

<body>
	</div>
	<div class="disconnect">
  		<p align="center"><b>Utilisateur</b></p>
  		<label for="logout">
  		<img src="../css/images/GSB_IMG_ident.png" class="icon-logout">
  		<p align="center" id="logout">
  		<?php
  			echo $_SESSION['prenom']."   ".$_SESSION['nom'];
  		?></p></label>
  		</p><br>
  		<p align="center">
  			<a href="index.php?isDisconnected" name="disconnected">Deconnexion</a></p>
  				<?php;
  				if (isset($_POST['isDisconnected'])) {
  					session_destroy(); 
  				}
  				?>
  	</div>
	<div id="GSB_footer"></div>	
</body>
</html>