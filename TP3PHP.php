<!doctype html>
<html lang="fr">
	<head>
		<title>TP3EX1</title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
		<link type="text/css" rel="stylesheet" href="style.css"/>
	</head>
	<body>
		<h3>PDO : connexion à une BDD mySQL</h3>
		<?php
			$serveur='localhost';
			$db='tp3php';
			$utilisateur='rootu';
			$motdepasse='';
		
			try{
				$connexion=new PDO('mysql=$serveur; dbname=$db', $utilisateur, $motdepasse);
				if($connexion) echo 'Connexion réussie';
			}
			catch (PDOException $event){
				die('Erreur :'.$event->getMessage());
			}
		//Inserer des données
		$name='BOLANOS';
		$surname='Amandine';
		$phone_number='0606060606';
		$inserer="INSERT INTO etudiants(Nom,Prenom,Numero_telephone) VALUES ('$name','$surname','$phone_number')";
		//EXECUTER LA REQUETE
		$inserer=$connexion->exec($inserer);
			
		?>
	</body>
</html>  