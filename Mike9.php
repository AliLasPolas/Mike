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
	$mike = trim($_POST['Mike']);
	$mike = explode(" ", $mike);

	if ($mike[0] == 1) {
		if (count($mike) == 3) {
			if ($mike[1] < 9 && $mike[2] < 9 && $mike[1] > 0 && $mike[2] > 0) {	
			intval($mike[2])%2 == 1 && intval($mike[1])%2 == 0 ||intval($mike[2])%2 == 0 && intval($mike[1])%2 == 1 ? $resultat = "La case est bleue" : $resultat = "La case est blanche";
			}
			else{
				$resultat = "Erreur de saisie";
			}
		}
		else{
			$resultat = "Erreur de saisie";
		}
	}
	elseif ($mike[0] == 2) {
	$resultat = "Erreur de saisie";
			if (count($mike) != 5) {
				die("Erreur de saisie");
			}

			if ($mike[3] == ($mike[1]-2) || $mike[3] == ($mike[1]+2)  ) {
				if ($mike[4] == ($mike[2]-1) || $mike[4] == ($mike[2]+1)) {
				$resultat = "Votre mouvement de cavalier du " . $mike[1] . " " . $mike[2] . " en " . $mike[3] . " " .  $mike[4] . " est valide" ;
			}
			else{
			$resultat = "Votre mouvement de cavalier du " . $mike[1] . " " . $mike[2] . " en " . $mike[3] . " " .  $mike[4] . " est invalide";

			}
		}
		else{
		$resultat = "Votre mouvement de cavalier du " . $mike[1] . " " . $mike[2] . " en " . $mike[3] . " " .  $mike[4] . " est invalide";

		}	
		if ($mike[3] == ($mike[1]-1) || $mike[3] == ($mike[1]+1)  ) {
				if ($mike[4] == ($mike[2]-2) || $mike[4] == ($mike[2]+2)) {
					$resultat = "Votre mouvement de cavalier du " . $mike[1] . " " . $mike[2] . " en " . $mike[3] . " " .  $mike[4] . " est valide " ;
				}
				else{
				$resultat = "Votre mouvement de cavalier du " . $mike[1] . " " . $mike[2] . " en " . $mike[3] . " " .  $mike[4] . " est invalide";
				}
			}
		else{
		$resultat = "Votre mouvement de cavalier du " . $mike[1] . " " . $mike[2] . " en " . $mike[3] . " " .  $mike[4] . " est invalide";
		}
		if (!is_numeric($mike[0]) || !is_numeric($mike[2]) || !is_numeric($mike[1]) || !is_numeric($mike[3]) || !is_numeric($mike[4]) ) {
		$resultat = "Erreur de saisie";
		}
		if (count($mike) != 5){
			$resultat = "Erreur de saisie";
		}
		if ($mike[1] > 8 || $mike[2] > 8 || $mike[3] > 8 || $mike[4] > 8 || $mike[1] < 0 || $mike[2] < 0|| $mike[3] < 0 || $mike[4] < 0) {
			$resultat = "Mauvais nombre";
		}
	}
	else{
		$resultat = "Erreur de saisie";
	}
	echo $resultat;
}
?>