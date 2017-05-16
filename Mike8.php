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

$octet1 = 0;
$octet2 = 0;
$octet3 = 0;
$octet4 = 0;


if ($_POST) {
	if (is_numeric($_POST['Mike']) ) {
		$valeur = trim($_POST['Mike']);
		$valeur = doubleval($valeur);
		if ($valeur > 4294967295 || $valeur < 1 ) {
			echo "Erreur, entrez un entier entre 1 et 4294967295";	
		}
		elseif($valeur < 4294967295 || $valeur > 0){
		while ($valeur > 255) {
			$valeur -= 256;
			$octet2++;
			if ($octet2 > 255) {
				$octet2++;
				$octet1 = 0;
				if ($octet2 > 255) {
					$octet3++;
					$octet2 = 0;
					if ($octet3 > 255) {
						$octet4++;
						$octet3 = 0;
					}
				}
			}
		}
		$octet1 = $valeur;
		echo $octet4 . "." . $octet3 ."." . $octet2 . "." . $octet1;
		}
	}
	else{
		echo "Erreur de saisie";
	}
}

 ?>