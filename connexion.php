<?php 
	session_start(); 
	session_destroy();
	
	if(empty($_SESSION["connexion"]))
	{
		$_SESSION["connexion"] = "";
	}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
		<title>Authentification</title>
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
			
			
		<!-- Code pour l'authentification -->
			<div class="boxCentre">
				<center>
					<form method="post" action="achats.php">
					<h1>Authentification</h1>
					<p>Identifiant :</p>
						<input value="" name="identifiant"/>
					<p>Mot de passe :</p>
						<input value="" name="mot_de_passe"/><br><br><br>
					<input type="submit" value="Validez" class="btnEnvoyer">
					</form>
				</center>
				
			</div>
			
		<!-- Code menu -->
			<div class="menu">
				<?php
					if($_SESSION['connexion'] == "")
					{
						?>
							<blockquote><p>Pas de clients !</p></blockquote>
							<a href="catalogue.php" class="btn3 btn">Catalogue</a>
						<?php
					}
				
				?>
			</div>
    </body>
</html>