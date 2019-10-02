<?php
	require_once 'Model.php'; 
	$model = Model::get_model();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<script src="https://d3js.org/d3.v5.js"></script>
	<script src="graph.js"></script>
	<title>Dataviz</title>
</head>
<body>
	<h1>Dtaviz</h1>

	<?php 
	//	 echo json_encode($sampleArray);
	//	SELECT * FROM `oeuvres` WHERE anneePE BETWEEN 1870 and 1980
	//	<p>

		$nbouvre= $model->getNbOeuvre();
		echo "<p> Il y a ". $nbouvre ." dans la base de donnee </p>";

		$anneeMinMax = $model->getNbAnnee();
		$anneeMin = $anneeMinMax['dateMin'];
		$anneeMax = explode('-', $anneeMinMax['dateMax']);
		$anneeMax = $anneeMax[2];
		echo "<p> Date de publications de la première oeuvre = ". $anneeMin ."</p>";
		echo "<p> Date de publications de la première oeuvre = ". $anneeMax ."</p>";

		$tableauDonnee= array();
		for($annee= $anneeMin; $annee< $anneeMax; $annee+=10){
			$nbPublication= $model->getNbPublicationsPeriodes($annee, $annee+10);
			echo "<p>".$nbPublication." </p>";
			$tableauDonnee[]= $nbPublication;
		}

	
	//	print_r();
	 ?>
	<div id="graph" style="height: 750;"></div>


</body>
</html>