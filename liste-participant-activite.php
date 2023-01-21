<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style/style.css">
	<title>Simplon | Enregistrement des participant aux activités</title>
</head>
<body>

<?php
   try {
    	$bdd = new PDO('mysql:host=127.0.0.1;dbname=simplonbdd;charset=utf8','root','');
     	
     } 
     catch (Exception $e) {
     	   die('ERREUR : '.$e->getMessage());
     }  
?>

<nav>
	<ul>
		<li class="logoName">Simplon</li>
		<li><a href="index.php">Accueil</a></li>
		<li><a href="liste-participant-activite.php">Liste des participants</a></li>
	</ul>	
</nav>
 <div class="conteneurElementAccueil">
 	<header>Liste des participants</header>
<?php 
	$message='';

	if (isset($_POST['valider'])) {
		$nom = htmlspecialchars($_POST['nom']);
		$prenom = htmlspecialchars($_POST['prenom']);
		$numeroTelephone = htmlspecialchars($_POST['numeroTelephone']);
		$email = htmlspecialchars($_POST['email']);

		$insert = $bdd->prepare('INSERT INTO listeparticipant(nom, prenom, numeroTelephone, email, dateEnregistrer) VALUES(:nom, :prenom, :numeroTelephone, :email, NOW())');

		$insert->bindParam(':nom', $nom);
		$insert->bindParam(':prenom', $prenom);
		$insert->bindParam(':numeroTelephone', $numeroTelephone);
		$insert->bindParam(':email', $email);

		$insert->execute();

		$message = 'Bienvenu dans l\'équipe de Simplon';

	}

		$listeparticipant = $bdd->query('SELECT * FROM listeparticipant');
		$listeparticipant->execute();
		?>

		<div class="headerListeParticipantDonnee">
			<div>N° </div>
			<div>Nom</div>
			<div>Prénom </div>
			<div>Numéro De Téléphone</div>
			<div>E-mail</div>
			<div>date</div>	
		</div>

		<?php
		//nombre de personne enregistrer dans la base données 
		$nmbre =0;
		while ($listeparticipantInfo = $listeparticipant->fetch()) {
			
			$nmbre++;
			
			?>
			<div class="listeParticipantDonnee">
				<div><?php echo($nmbre); ?></div>
				<div class="listeParticipantDonneeLi"><?php echo($listeparticipantInfo['nom']); ?></div>
				<div class="listeParticipantDonneeLi"><?php echo($listeparticipantInfo['prenom']); ?></div>
				<div><a href="tel:<?php echo($listeparticipantInfo['numeroTelephone']); ?>"><?php echo($listeparticipantInfo['numeroTelephone']); ?></a></div>
				<div><a href="mailto:<?php echo($listeparticipantInfo['email']); ?>"><?php echo($listeparticipantInfo['email']); ?></a></div>
				<div><?php echo($listeparticipantInfo['dateEnregistrer']); ?></div>	
				</div>		
		<?php }?>

<div><?php echo($message); ?></div>
 </div>
</body>
</html>