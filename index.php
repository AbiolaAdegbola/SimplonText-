<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style/style.css">
	<title>Simplon | Enregistrement des participant aux activités</title>
</head>
<body>

<nav>
	<ul>
		<li class="logoName">Simplon</li>
		<li><a href="index.php">Accueil</a></li>
		<li><a href="liste-participant-activite.php">Liste des participants</a></li>
	</ul>
</nav>

<div class="conteneurElementAccueil">
	<form method="post" action="liste-participant-activite.php">
		<header>Simplon</header>
		<div class="informationVisiteur">
			<label for="nom">Nom : </label><br>
			<input type="text" name="nom" id="nom" required>
		</div>
		<div class="informationVisiteur">
			<label for="prenom">Prénom : </label><br>
			<input type="text" name="prenom" id="prenom" required>
		</div>
		<div class="informationVisiteur">
			<label for="numeroTelephone">Numéro Téléphone : </label><br>
			<input type="number" name="numeroTelephone" id="numeroTelephone" required>
		</div>
		<div class="informationVisiteur">
			<label for="email">E-mail : </label><br>
			<input type="email" name="email" id="email">
		</div>

			<label for="valider" id="submitInformation">
				Valider
			</label>
			<input type="submit" name="valider" id="valider" style="display: none;">
	</form>
</div>


</body>
</html>