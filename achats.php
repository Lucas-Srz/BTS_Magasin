<?php session_start(); ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
		<title>Achats</title>
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
			
		<!-- Code pour les achats -->
			<div class="boxCentre">
			
				<!-- Code pour le texte au centre -->
					<center>
						<h1>Mes achats</h1>
					</center>
					<blockquote>
						<?php 
							// Connexion à la base de données
							require("include/info.php");
							$TABLE = "shop";

							$connexion = mysqli_connect($MYSQL_SERVER,$MYSQL_USER,$MYSQL_PASSWORD,$DATABASE);
							$requete = "SELECT article,prix FROM $TABLE WHERE 1";
							$resultat = mysqli_query($connexion,$requete) or die ("Exécution de la requête impossible ".mysqli_error($connexion));
							print"<strong>Mes articles : </strong>";
							while($ligne = mysqli_fetch_array($resultat,MYSQLI_ASSOC))
							{
								// Affichage ligne par ligne
								print "".$ligne['article']." | ";
							}
							print "</p><br>";
							print"<strong>Prix : </strong>";
							while($ligne = mysqli_fetch_array($resultat,MYSQLI_ASSOC))
							{
								// Affichage ligne par ligne
								print "".$ligne['prix']." | ";
							}
							print "</p>";
						?>
					<blockquote>
				
				<!-- Code pour le PHP -->
					<?php
						// Paramètre de connexion par défaut
						// Connexion à la base de données
						require("include/info.php");
						$TABLE = "table";

						$connexion = mysqli_connect($MYSQL_SERVER,$MYSQL_USER,$MYSQL_PASSWORD,$DATABASE);
						if (mysqli_connect_errno()) die("Connexion au serveur impossible ".mysqli_connect_error());
						if (isset($_POST["identifiant"]) && isset($_POST["mot_de_passe"]))
						{
							$identifiant = $_POST["identifiant"];
							$mdp = $_POST["mot_de_passe"];
							
							$authentification = authentification($identifiant, $mdp); // Return true ou false
							if($authentification)
							{
								$_SESSION["connexion"] = "ok";
								$_SESSION["id_client"] = $identifiant;
							}
							else
							{
								header('Location: connexion.php');
							}
						}
							
						function authentification($identifiant, $mdp)
						{
							$connexion = mysqli_connect("localhost","root","","clients_parametres");
							$requete = "SELECT * FROM `table`";
							$resultat = mysqli_query($connexion,$requete) or die ("Exécution de la requête impossible ".mysqli_error($connexion));
							while($recv = mysqli_fetch_array($resultat,MYSQLI_ASSOC))
							{
								if($recv['identifiant'] == $identifiant && $recv['mot_de_passe'] == $mdp)
								{
									return true;
								}
							}
							return false;
						}
					?>
				
				<!-- Bouton reset -->
				
					<form method="get" action="reset.php">
						<input type="submit" value="RESET " class="btnReset">
					</form>
				
				
			</div>
		

		<!-- Code pour le menu -->
			<div class="menu">
				<?php print"<blockquote><p><strong>Clients : ".$_SESSION["id_client"]; ?>
				<a href="catalogue.php" class="btn1 btn">Catalogue</a>
				<a href="parametres.php" class="btn5 btn">Parametres</a>
				<a href="suppression.php" class="btn3 btn">Déconnexion</a>
			</div>
    </body>
</html>