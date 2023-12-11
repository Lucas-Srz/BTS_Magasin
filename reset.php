<meta charset="UTF-8">
<title>Reset</title>
<link href="style.css" rel="stylesheet" type="text/css">

<?php
	// Connexion à la base de données MySQL
	require("include/info.php");
	$TABLE = "table";

	$connexion = mysqli_connect($MYSQL_SERVER,$MYSQL_USER,$MYSQL_PASSWORD,$DATABASE);
	
	// Requête SQL de lecture de la table avec tri par date
		$requete = "DELETE FROM shop WHERE 1";
		$resultat = mysqli_query($connexion,$requete) or die ("Exécution de la requête impossible ");
		
		print "<br><center><h1> Panier supprimer ! </h1></center>";
?>

	<a href="achats.php" class="btnRetour">Retour</a>