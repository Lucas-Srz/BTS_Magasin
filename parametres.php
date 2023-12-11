<?php 
	session_start();
	if(empty($_SESSION["connexion"]))
		{
			$_SESSION["connexion"] = "";
		}

	// Connexion à la base de données
	require("include/info.php");
	$TABLE = "table";

	$connexion = mysqli_connect($MYSQL_SERVER,$MYSQL_USER,$MYSQL_PASSWORD,$DATABASE);
	if (mysqli_connect_errno()) die("Connexion au serveur impossible ".mysqli_connect_error());
	$requete = "SELECT `identifiant`, `nom`, `prenom`, `date_de_naissance` FROM `table`";
	$resultat = mysqli_query($connexion,$requete) or die ("Exécution de la requête impossible ".mysqli_error($connexion));
	while($recv = mysqli_fetch_array($resultat,MYSQLI_ASSOC))
	{
		if($recv["identifiant"] == $_SESSION["id_client"])
		{
			$nom = $recv["nom"];
			$prenom = $recv["prenom"];
			$date = $recv["date_de_naissance"];
		}		
	}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
		<title>Catalogue</title>
		<link rel="stylesheet" href="style.css">
    </head>

    <body>
		<!-- Div pour les images -->
			<div class="sandwich">
				<img src="img/sandwich.png" class="boxImg">
			</div>
			<div class="burger">
				<img src="img/burger.png" class="boxImg">
			</div>
			<div class="hot-dog">
				<img src="img/hot-dog.png" class="boxImg">
			</div>
			<div class="pizza">
				<img src="img/pizza.png" class="boxImg">
			</div>
			<div class="kebab">
				<img src="img/kebab.png" class="boxImg">
			</div>
			<div class="taco">
				<img src="img/taco.png" class="boxImg">
			</div>
			<div class="chicken-bucket">
				<img src="img/chicken-bucket.png" class="boxImg">
			</div>
			<div class="noodle-bowl">
				<img src="img/noodle-bowl.png" class="boxImg">
			</div>
			<div class="french-fries">
				<img src="img/french-fries.png" class="boxImg">
			</div>
			<div class="orange-juice">
				<img src="img/orange-juice.png" class="boxImg">
			</div>
			<div class="boxCentre"></div>
			
			
		<!-- Code pour les paramètres du compte -->
			<div class="boxCentre">
				<center>
					<h1>Paramètres du compte</h1>
				<br>
				<?php print"<p><strong>Nom :</strong><br> $nom " ?><br>
				<?php print"<p><strong>Prénom :</strong><br> $prenom " ?><br>
				<?php print"<p><strong>Date de naissance :</strong><br> $date " ?>
				</center>
				
			</div>
			
		<!-- Code menu -->
			<div class="menu">
				<?php
					if($_SESSION['connexion'] == "")
					{
						?>
							<blockquote><p>Pas de clients !</p></blockquote>
							<a href="connexion.php" class="btn3 btn">Connexions</a>
						<?php
					}
					else
					{
						print"<blockquote><p><strong>Clients : ".$_SESSION["id_client"];
						?>
							<br>
							<a href="catalogue.php" class="btn1 btn">Catalogue</a>
							<a href="achats.php" class="btn4 btn">Achats</a>
							<a href="suppression.php" class="btn3 btn">Déconnexion</a>
						<?php
					}
				
				?>
			</div>
    </body>
</html>