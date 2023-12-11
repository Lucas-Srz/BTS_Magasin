<?php 
	// Connexion à la base de données
	require("include/info.php");
	
	$connexion = mysqli_connect($MYSQL_SERVER,$MYSQL_USER,$MYSQL_PASSWORD,$DATABASE);
	if (isset($_POST["article"]) && isset($_POST["prix"]))
	{	
		$article = $_POST["article"];
		$prix = $_POST["prix"];
		if (isset($_POST['bthShop1']))
		{	
			$requete = 'INSERT INTO shop (article,prix) VALUES ("'.$article.'","'.$prix.'");';
			$resultat = mysqli_query($connexion,$requete) or die ("Exécution de la requête impossible ".mysqli_error($connexion));
            header('Location: catalogue.php');
		}
	}
?>