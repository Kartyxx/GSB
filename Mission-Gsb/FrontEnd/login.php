<html>
<meta charset="utf-8">
<head>
	<title>Login - GSB</title>
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
  <link rel="stylesheet" type="text/css" href="../css/GSB_general.css"></link>
  <script type="text/javascript" language="JavaScript" src="includes/controleFormulaire.js"></script> 
</head>

<body class="login">
<div class="login_header">
    <div id="logo"></div>
  </div>
  <div class="connexion_body">
      <div id="connexion">
          <script type="text/javascript">
            var id = document.getElementById("denomination").value;
            var mdp = document.getElementById("mot").value;
            function verifChamps()
            {
              if ( id == "" || mdp == "")
              {
                alert("Remplir tous les champs");
                return false;
              }
            }
          </script>
          <h1>Connexion</h1>
          <form method="post" name="inscription" action="../BackEnd/identification.php" onSubmit="return verifChamps()">
                  <p align="center">
                      <label for="denomination">
                        <img src="../css/images/GSB_IMG_ident.png" class="icon-ident">
                        <input type="text" name="denomination" id="denomination" maxlength="25" placeholder="Identifiant">
                      </label><br/><br/>

                      <label for="password">
                      <img src="../css/images/GSB_IMG_psswd.png" class="icon-psswd">
                        <input type="password" name="mot" id="mot" maxlength="8" placeholder="Mot de passe">
                      </label><br/><br/>
                  </p>
            <p align="center"> 
              <input type="submit" name="envoi" value="Connexion"><br/><br/>
              Vous rencontrez un problème ?
              Cliquez <a href="#">ici</a>.
            </p>
            <br />
        </form>
      </div>
    <div id="emblem"></div>
  </div>
</body>
</html>
