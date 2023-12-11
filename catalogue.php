<?php 
	session_start(); 
	if(empty($_SESSION["connexion"]))
	{
		$_SESSION["connexion"] = "";
	}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
		<title>Catalogue</title>
		<link rel="stylesheet" href="style.css">
    </head>
	
	<!-- Script pour l'affichage au clic sur les images -->
		<script Language="javascript">
			var list_div = new Array('acceuil', 'sandwich', 'burger', 'hot-dog', 'pizza', 'kebab', 'taco', 'chicken-bucket', 'noodle-bowl', 'french-fries', 'orange-juice');
			 
			// Au chargement de la page, on ne laisse afficher que la première div
			window.onload = function(){
				for(var i=1; i<list_div.length; i++){ // On commence la boucle à 1 pour ne pas modifier la première div de la liste
					var div = document.getElementById(list_div[i]);
					div.style.display = 'none';
				}
			}
			 
			function displayDiv(id){
				for(var i=0; i<list_div.length; i++){
					var div = document.getElementById(list_div[i]);
					// On rend la div visible si son id est le même que celui passé en paramètre de la fonction, sinon on la masque
					div.style.display = (div.id == id ? '' : 'none');
				}
			}
		</script>

    <body>
		<!-- Div pour les images -->
			<a href="javascript:displayDiv('sandwich');">
				<div class="sandwich">
					<img src="img/sandwich.png" class="boxImg">
				</div>
			</a>
			
			<a href="javascript:displayDiv('burger');">
				<div class="burger">
					<img src="img/burger.png" class="boxImg">
				</div>
			</a>
			
			<a href="javascript:displayDiv('hot-dog');">
				<div class="hot-dog">
					<img src="img/hot-dog.png" class="boxImg">
				</div>
			</a>
			
			<a href="javascript:displayDiv('pizza');">
				<div class="pizza">
					<img src="img/pizza.png" class="boxImg">
				</div>
			</a>
			
			<a href="javascript:displayDiv('kebab');">
				<div class="kebab">
					<img src="img/kebab.png" class="boxImg">
				</div>
			</a>
			
			<a href="javascript:displayDiv('taco');">
				<div class="taco">
					<img src="img/taco.png" class="boxImg">
				</div>
			</a>
			
			<a href="javascript:displayDiv('chicken-bucket');">
				<div class="chicken-bucket">
					<img src="img/chicken-bucket.png" class="boxImg">
				</div>
			</a>
			
			<a href="javascript:displayDiv('noodle-bowl');">
				<div class="noodle-bowl">
					<img src="img/noodle-bowl.png" class="boxImg">
				</div>
			</a>
			
			<a href="javascript:displayDiv('french-fries');">
				<div class="french-fries">
					<img src="img/french-fries.png" class="boxImg">
				</div>
			</a>
			
			<a href="javascript:displayDiv('orange-juice');">
				<div class="orange-juice">
					<img src="img/orange-juice.png" class="boxImg">
				</div>
			</a>
			
			<div class="boxCentre"></div>
			
			
		<!-- Code pour le centre -->
			<!-- Page de base -->
				<div id="acceuil">
					<div class="boxCentre">
						<h1><center><br><br>Bienvenus sur le site marchand !</center></h1>
					</div>
				</div>
			
			<!-- Sandwich -->
				<div id="sandwich">
					<div class="boxCentre">
						<h3 class="titre3">Sandwich</h3>
						<img src="img/sandwich.png" class="boxImgCentre">
						<div class="border">
							<p><blockquote><b>Composition :</b></p>
							<div id="global">
							  <div id="gauche">
								<ul>
								  <li>Salade</li>
								  <li>Tomate</li>
								</ul>
							  </div>
							  <div id="droite">
								<ul>
								  <li>Fromage</li>
								  <li>Cornichon</li>
								</ul>
							  </div>
							</div>
						</div>
						<div class="btnShop">
							<form action="ajout_article_bdd.php" method="POST">
								<input type="hidden" name="article" value="Sandwich">
								<input type="hidden" name="prix" value="2">
								<input type="submit" name="bthShop1" value="Validez cette articles">
							</form>
						</div>
					</div>
				</div>

			<!-- Burger -->
				<div id="burger">
					<div class="boxCentre">
						<h3 class="titre4">Burger</h3>
						<img src="img/burger.png" class="boxImgCentre">
						<div class="border">
							<p><blockquote><b>Composition :</b></p>
							<div id="global">
							  <div id="gauche">
								<ul>
								  <li>Viande</li>
								  <li>Tomate</li>
								</ul>
							  </div>
							  <div id="droite">
								<ul>
								  <li>Fromage</li>
								</ul>
							  </div>
							</div>
						</div>
						<div class="btnShop">
							<form action="ajout_article_bdd.php" method="POST">
								<input type="hidden" name="article" value="Burger">
								<input type="hidden" name="prix" value="2">
								<input type="submit" name="bthShop1" value="Validez cette articles">
							</form>
						</div>
					</div>
				</div>
				
			<!-- Hot Dog -->
				<div id="hot-dog">
					<div class="boxCentre">
						<h3 class="titre3">Hot Dog</h3>
						<img src="img/hot-dog.png" class="boxImgCentre">
						<div class="border">
							<p><blockquote><b>Composition :</b></p>
							<div id="global">
							  <div id="gauche">
								<ul>
								  <li>Saucisse</li>
								  <li>Moutarde</li>
								</ul>
							  </div>
							  <div id="droite">
								<ul>
								  <li>Salade</li>
								</ul>
							  </div>
							</div>
						</div>
						<div class="btnShop">
							<form action="ajout_article_bdd.php" method="POST">
								<input type="hidden" name="article" value="Hot Dog">
								<input type="hidden" name="prix" value="2">
								<input type="submit" name="bthShop1" value="Validez cette articles">
							</form>
						</div>
					</div>
				</div>
				
			<!-- Pizza -->
				<div id="pizza">
					<div class="boxCentre">
						<h3 class="titre4">Pizza</h3>
						<img src="img/pizza.png" class="boxImgCentre">
						<div class="border">
							<p><blockquote><b>Composition :</b></p>
							<div id="global">
							  <div id="gauche">
								<ul>
								  <li>Fromage</li>
								  <li>Moutarde</li>
								</ul>
							  </div>
							  <div id="droite">
								<ul>
								  <li>Champignon</li>
								  <li>Jambon</li>
								</ul>
							  </div>
							</div>
						</div>
						<div class="btnShop">
							<form action="ajout_article_bdd.php" method="POST">
								<input type="hidden" name="article" value="Pizza">
								<input type="hidden" name="prix" value="2">
								<input type="submit" name="bthShop1" value="Validez cette articles">
							</form>
						</div>
					</div>
				</div>
			
			<!-- Kebab -->
				<div id="kebab">
					<div class="boxCentre">
						<h3 class="titre4">Kebab</h3>
						<img src="img/kebab.png" class="boxImgCentre">
						<div class="border">
							<p><blockquote><b>Composition :</b></p>
							<div id="global">
							  <div id="gauche">
								<ul>
								  <li>Salade</li>
								  <li>Sauce</li>
								</ul>
							  </div>
							  <div id="droite">
								<ul>
								  <li>Tomate</li>
								</ul>
							  </div>
							</div>
						</div>
						<div class="btnShop">
							<form action="ajout_article_bdd.php" method="POST">
								<input type="hidden" name="article" value="Kebab">
								<input type="hidden" name="prix" value="2">
								<input type="submit" name="bthShop1" value="Validez cette articles">
							</form>
						</div>
					</div>
				</div>
			
			<!-- Taco -->
				<div id="taco">
					<div class="boxCentre">
						<h3 class="titre4">Taco</h3>
						<img src="img/taco.png" class="boxImgCentre">
						<div class="border">
							<p><blockquote><b>Composition :</b></p>
							<div id="global">
							  <div id="gauche">
								<ul>
								  <li>Viande</li>
								  <li>Sauce</li>
								</ul>
							  </div>
							  <div id="droite">
								<ul>
								  <li>Salade</li>
								</ul>
							  </div>
							</div>
						</div>
						<div class="btnShop">
							<form action="ajout_article_bdd.php" method="POST">
								<input type="hidden" name="article" value="Taco">
								<input type="hidden" name="prix" value="2">
								<input type="submit" name="bthShop1" value="Validez cette articles">
							</form>
						</div>
					</div>
				</div>
				
			<!-- Chicken Bucket -->
				<div id="chicken-bucket">
					<div class="boxCentre">
						<h3 class="titre5">Chicken Bucket</h3>
						<img src="img/chicken-bucket.png" class="boxImgCentre">
						<div class="border">
							<p><blockquote><b>Composition :</b></p>
							<div id="global">
							  <div id="gauche">
								<ul>
								  <li>Viande</li>
								</ul>
							  </div>
							  <div id="droite">
								<ul>
								  <li>Sauce (Ketchup)</li>
								</ul>
							  </div>
							</div>
						</div>
						<div class="btnShop">
							<form action="ajout_article_bdd.php" method="POST">
								<input type="hidden" name="article" value="Chicken Bucket">
								<input type="hidden" name="prix" value="2">
								<input type="submit" name="bthShop1" value="Validez cette articles">
							</form>
						</div>
					</div>
				</div>
			
			<!-- Noodle Bowl -->
				<div id="noodle-bowl">
					<div class="boxCentre">
						<h3 class="titre5">Bol de nouilles</h3>
						<img src="img/noodle-bowl.png" class="boxImgCentre">
						<div class="border">
							<p><blockquote><b>Composition :</b></p>
							<div id="global">
							  <div id="gauche">
								<ul>
								  <li>Nouille</li>
								</ul>
							  </div>
							  <div id="droite">
								<ul>
								  <li>Sauce</li>
								</ul>
							  </div>
							</div>
						</div>
						<div class="btnShop">
							<form action="ajout_article_bdd.php" method="POST">
								<input type="hidden" name="article" value="Noodle Bowl">
								<input type="hidden" name="prix" value="2">
								<input type="submit" name="bthShop1" value="Validez cette articles">
							</form>
						</div>
					</div>
				</div>
				
			<!-- French Fries -->
				<div id="french-fries">
					<div class="boxCentre">
						<h3 class="titre4">Frites</h3>
						<img src="img/french-fries.png" class="boxImgCentre">
						<div class="border">
							<p><blockquote><b>Composition :</b></p>
							<div id="global">
							  <div id="gauche">
								<ul>
								  <li>Patates</li>
								</ul>
							  </div>
							</div>
						</div>
						<div class="btnShop">
							<form action="ajout_article_bdd.php" method="POST">
								<input type="hidden" name="article" value="Frites">
								<input type="hidden" name="prix" value="2">
								<input type="submit" name="bthShop1" value="Validez cette articles">
							</form>
						</div>
					</div>
				</div>
				
			<!-- Orange Juice -->
				<div id="orange-juice">
					<div class="boxCentre">
						<h3 class="titre4">Boisson</h3>
						<img src="img/orange-juice.png" class="boxImgCentre">
						<div class="border">
							<p><blockquote><b>Composition :</b></p>
							<div id="global">
								<ul>
								  <li>Boisson au choix</li>
								</ul>
							</div>
						</div>
						<div class="btnShop">
							<form action="ajout_article_bdd.php" method="POST">
								<input type="hidden" name="article" value="Boisson">
								<input type="hidden" name="prix" value="2">
								<input type="submit" name="bthShop1" value="Validez cette articles">
							</form>
						</div>
					</div>
				</div>
			
			
		<!-- Code php -->
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
							<a href="achats.php" class="btn1 btn">Achats</a>
							<a href="parametres.php" class="btn2 btn">Parametres</a>
							<a href="suppression.php" class="btn3 btn">Déconnexion</a>
						<?php
					}
				
				?>
			</div>
    </body>
</html>