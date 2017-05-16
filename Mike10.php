<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
		<meta name="author" content="">

		<title> Piscine </title>
		
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
	</head>
	<body>
		<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<form method="post">
					<div class="form-group">
						<label for="text">Entre votre valeur:</label>
						<input type="text" class="form-control" id="Mike" name="Mike">
					</div>
					<button type="submit" class="btn btn-default">Submit</button>
				</form>
			</div>
		</div>
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	</body>
</html>

<?php 

if ($_POST) {
	$erreur = "";
	$resultat_essence = 0;
	$resultat_diesel = 0;
	$distance_essence = 0;
	$distance_diesel = 0;
	$mike = trim($_POST['Mike']);
	$mike = explode(" ", $mike);
	if (count($mike) != 2) {
		die("Erreur de saisie");
	}
	if (is_numeric($mike[0]) || is_numeric($mike[1]) ) {
		if (count($mike) == 2) {
			if ($mike[1] > 0 && $mike[0] > 0) {
				
			$distance = floatval($mike[0]);
			$duree = floatval($mike[1]);
			$distance_essence = $distance*0.13;
			$distance_diesel = $distance*0.11;
			$distance_essence < 10 ? $distance_essence = 10 : '' ;
			$distance_diesel < 8 ? $distance_diesel = 8 : '' ;

			$resultat_essence = ($duree * 30) + ($distance_essence);
			$resultat_essence *=1.196;
			$resultat_essence = round($resultat_essence, 2);
			$resultat_diesel = ($duree * 33.4) + ($distance_diesel);
			$resultat_diesel *= 1.196;
			$resultat_diesel = round($resultat_diesel, 2);
				echo "Distance : $distance kilomètres, Durée : $duree jours, Total essence: $resultat_essence € , Total diesel: $resultat_diesel € ";
			if ($resultat_diesel > $resultat_essence) {
				echo "Meilleur prix: Essence";
			}
			else{
				echo "Meilleur prix : Diesel";
			}
			}	
			else{
				$erreur = "Erreur de nombre";
			}
		}
		else{
			$erreur = "Erreur de saisie";
		}
	}
	else{
		$erreur = "Erreur de saisie";
	}
	echo $erreur;
	}

 ?>