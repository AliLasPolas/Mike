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
	// echo ctype_digit($mike[1]);
	// echo ctype_digit($mike[2]);
	// echo count($mike);
	// var_dump($mike);
	$taille = count($mike);
	if($mike[0] != "Mike"){
		echo "Paramètre incorrect : le premier mot n'est pas 'Mike'";
	}
	elseif($taille < 3){
		echo "Paramètre incorrect : le nombre de mots est inferieur a 3";
	}
	elseif($taille > 3){
		echo "Paramètre incorrect : le nombre de mots est supérieur a 3";
	}
	elseif(ctype_digit($mike[1]) != 1 || ctype_digit($mike[2]) != 1 ){
		echo "Paramètre incorrect : les deux derniers paramètres doivent etre des nombres entiers positifs";
	}
	elseif($mike[1] < 0 || $mike[2] < 0){
		echo "Paramètre incorrect : les deux derniers paramètres doivent etre des nombres entiers positifs";
	}
	elseif ($mike[0] == "Mike" && $taille == 3) {
		echo intval($mike[1]+ $mike[2])  ;		
	}
}
 ?>