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
					<li class="menu"><a href="index.don">Accueil</a></li>
					<li class="menu"><a href="perso.html">Pr&eacute;sentation des personnages</a></li>
					<li class="menu">M&eacute;dia
					<ul class="select">
							<li><a href="gallerie.html">Photo</a></li>
							<li><a href="video.html">Vid&eacute;o</a></li>
						</ul></li>
					<li class="menu"><a href="contact.php">Contact</a></li>
				</ul>
			</nav>
		</header>

		<article>
			<h2>Nous contacter :</h2>
			<hr>
			<?php
				if (isset($_POST['nom'])){
					if (!empty($_POST['nom']))
					{
						$nom=$_POST['nom'];
						echo 'Nom : '.$nom.'.<br/>';
					}
					else
					{
					 echo 'Le nom n\'est pas &eacute;crit.<br/>';
					}
				}

				if (isset($_POST['courriel'])){
					if (!empty($_POST['courriel']))
					{
						$mail=$_POST['courriel'];
						if(filter_var($mail, FILTER_VALIDATE_EMAIL)) {
							echo 'Courriel : '.$mail.'.<br/>';
						}
						else {
							echo $mail.'n\'est pas valide.';
							}
					}
					else
					{
					 echo 'Le courriel n\'est pas &eacute;crit.<br/>';
					}
				}
					
				if (isset($_POST['telephone'])){
					if (!empty($_POST['telephone']))
					{
						$tel=$_POST['telephone'];
						echo 'Le numéro de t&eacute;l&eacute;phone est : '.$tel.'.<br/>';
					}
					else
					{
						echo 'Le numéro de t&eacute;l&eacute;phone n\'est pas &eacute;crit.<br/>';
					}
				}
					
				if (isset($_POST['avis'])){
					if (!empty($_POST['avis']))
					{
						$avis=$_POST['avis'];
						echo 'L\'avis de la personne : '.$avis.'.<br/>';
					}
					else
					{
						echo 'L\'avis n\'est pas &eacute;crit.<br/>';
					}
				}
				
				if (isset($_POST['visite'])){
					if (!empty($_POST['visite']))
					{
						$visite=$_POST['visite'];
						echo 'L\'avis de la personne : '.$visite.'.<br/>';
					}
					else
					{
						echo 'La visite n\'est pas renseigner.<br/>';
					}
				}
				
				if (isset($_POST['texte'])){
					if (!empty($_POST['texte']))
					{
						$visite=$_POST['texte'];
						echo 'L\'avis de la personne : '.$visite.'.<br/>';
					}
					else
					{
						echo 'La description n\'est pas &eacute;crite.<br/>';
					}
				}					
			?>
		</article>

		<footer>
			<p>Goncalves Alexis et Vedrenne Cl&eacute;ment, Groupe : 2</p>
		</footer>
	</body>

</html>
