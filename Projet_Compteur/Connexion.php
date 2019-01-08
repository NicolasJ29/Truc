<html lang="fr-fr">

<head>
	<link rel="stylesheet" href="Design/ConnexionDesign2.css" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes" charset="utf-8" />
	<title>Compteur Electrique</title>
	<header>
		<h1 id="titre">Le compteur de bibi</h1>
	</header>
</head>
<body>
	<p id="msg">Veuillez entrer vos identifiants</p>
	<form action="Connexion.php"  method="post">
		<input type="text" name="username" id="username" placeholder="Nom d'utilisateur" maxlength="20" required>
		<input type="password" name="password" id="password" placeholder="Mot de passe" maxlength="20" required>
		<input type="submit" name="confirmer" id="boutton" value="Se connecter">
	</form>


	<?php
	if (isset($_POST['username']) && isset($_POST['password'])) 
	{	
		$pseudo=$_POST['username'];
		$mdp=$_POST['password'];
	
$bdd = new PDO('mysql:host=localhost;dbname=compteur', 'root', '');
 
$reponse = $bdd->query('SELECT username FROM users WHERE password = "' . $mdp . '"');
            $login = $reponse->fetch();
            
            if (strtolower($pseudo) == strtolower($login['username'] ))
            {
            	session_start();
            	$_SESSION['login']=$pseudo;
            	$_SESSION['password']=$mdp;
            	header('Location: Accueil.php');
            	exit();
            }
            else
            {
            	echo "<p id='ConnexionFalse'>Vérifier vos identifiants et réessayez</p>";
            }
}

?>
</body>