<?php ?>

<!DOCTYPE html>

<html lang="fr">

	<head>
		<title>Fairy Tail</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="style.css" media="(min-width: 800px)">
		<link rel="stylesheet" media="(max-width: 800px)" href="style2.css">
		<link rel="stylesheet" type="text/css" href="style3.css" media="print">
	</head>

	<body>
		<header>
			<h1>Fairy tail</h1>
			<img src="Img/guilde.jpg" alt= "guilde" title= "La guilde" class="imagePresentation"/>
			<nav>
				<ul>
					<li class="menu"><a href="index.html">Accueil</a></li>
					<li class="menu"><a href="perso.html">Pr&eacute;sentation des personnages</a></li>
					<li class="menu">M&eacute;dia
						<ul class="select">
							<li><a href="gallerie.html">Photo</a></li>
							<li><a href="video.html">Vid&acute;o</a></li>
						</ul>
					</li>
					<li class="menu"><a href="#">Contact</a></li>
				</ul>
			</nav>
		</header>

		<article>
			<h2>Nous contacter :</h2>
			<hr>
			<form name="contact" action="trait.php" method="post">
				<label>Votre nom :</label>
				<input type="text" name="nom" placeholder="Saisissez votre nom" required>
				<br>
				<label for="courriel">Votre courriel :</label>
				<input type="email" name="courriel" placeholder="Saisissez votre adresse mail" required>
				<br>
				<label>Votre numéro de t&eacute;l&eacute;phone :</label>
				<input type="tel" name="telephone" placeholder="Saisissez votre numéro">
				<br>
				<label>Rapporter :</label>
				<select name="avis">
					<option value="avis">un avis</option>
					<option value="amelioration">une am&acute;lioration</option>
					<option value="bug">un bug</option>
				</select>
				<br>
				<label>Est-ce votre premi&egrave;re visite ?</label>
				<input type="radio" name="visite" value="Oui">Oui <input type="radio" name="visite" value="Non">Non
				<br>
				<label>A vos stylo ^^ !</label><br>
				<textarea name="texte" rows="10" cols="80" maxlength="500" required></textarea>
				<br>
				<input type="submit" name="Valider" value="Envoyer">
			</form>

		</article>

		<footer>
			<p>Goncalves Alexis et Vedrenne Cl&eacute;ment, Groupe : 2</p>
		</footer>
	</body>

</html>
