<html lang="fr-fr">

<head>
	<link rel="stylesheet" href="Design/AccueilDesign.css" />
	<?php 
		session_start();
	?>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes" charset="utf-8" />
	<title>Compteur Electrique</title>
	<header>
		<h1 id="titre">Le compteur de <?php print($_SESSION['login']) ?> </h1>
	</header>
</head>
<body>
	<fieldset id="fieldset0">

       		
   			<div id="Entrees">

   	   			<div class="Entrees">
   	   
   	   				</br><label>Salade de la mer</br><span id="Italian">Insalata del mare</span> / <span id="English">seafood salad</span></label></br></br>

              <label>Soupe de poissons de roche</br><span id="Italian">Zuppa di pesci di scogli</span> / <span id="English">soup of rockfish</span></label></br></br>

       				<label>Bricks de chèvre au miel et basilic x2</br><span id="Italian">Foglie di pasta filo caprino al mieli e basilico</span> / <span id="English">Goat cheese with honey and basil</span></label></br></br>       				

              <label>Assiette de charcuterie </br><span id="Italian">Assortimente di affettati</span> / <span id="English">Plate of cold cuts</span></label></br></br>
       				
   	   			</div>
   	   		</div>
   	</fieldset>
</body>