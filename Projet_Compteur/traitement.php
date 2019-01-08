<body>
<?php
	if (isset($_POST['username']) && isset($_POST['password'])) 
	{	
		$pseudo=$_POST['username'];
		$mdp=$_POST['password'];
	}
$bdd = new PDO('mysql:host=localhost;dbname=compteur', 'root', '');
 
$reponse = $bdd->query('SELECT username FROM users WHERE password = "' . $mdp . '"');
            $login = $reponse->fetch();
            
            if (strtolower($_POST['username']) == strtolower($login['username'] ))
            {
            	echo "t'es inscrit mon gars !";
            }
            else
            {
            	echo "Vérifier vos identifiants et réessayez";
            }

?>