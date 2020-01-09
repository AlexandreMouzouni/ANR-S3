<?php
	require_once 'Model.php'; 
	$model = Model::get_model();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<script src="https://cdn.plot.ly/plotly-latest.min.js"></script>

	<script src="graph.js"></script>
	<title>Dataviz</title>
</head>
<body>
	<h1>Dataviz</h1>

	<?php 
	//	 echo json_encode($sampleArray);

	/////////////////////////// ajout pattern
		$patternAnnee = "#(\d{4})#";

		$listAnnee = $model->getAnneeTousOeuvre();
		//print_r($listAnnee);
		$lesAnnee= array();
		foreach ($listAnnee as $value) {
			if(preg_match($patternAnnee, trim($value['annee']), $anneePE))
				echo $anneePE[1].' - ';
//				$lesAnnee[$anneePE[1]] = $model->getNbOeuvreparAnnee($anneePE[1]);
		}

//		print_r($lesAnnee);
////////////////////////////////////

		$nbouvre= $model->getNbOeuvre();
		echo "<p> Il y a ". $nbouvre ." dans la base de donnee </p>";

		$anneeMinMax = $model->getNbAnnee();
		$anneeMin = $anneeMinMax['dateMin'];
		$anneeMax = explode('-', $anneeMinMax['dateMax']);
		$anneeMax = $anneeMax[2];
		echo "<p> Date de publications de la première oeuvre = ". $anneeMin ."</p>";
		echo "<p> Date de publications de la dernière oeuvre = ". $anneeMax ."</p>";

		$tableauDonnee= array(); $i=0;
		for($annee= $anneeMin; $annee< $anneeMax; $annee+=10){
			$nbPublication= $model->getNbPublicationsPeriodes($annee, $annee+10);
			echo "<p> Entre <b>". $annee."</b> et <b>". ($annee+10) ."</b> il y a eu <b> ".$nbPublication."</b> publications.</p>";
			//$tableauDonnee[$annee+5] = $nbPublication;
			$tableauDonnee[] = ["annee" => $annee, "nombre" => $nbPublication];
		}

		echo "<br><p> Tableau de donnee: <br><i>l'index des valeurs est la date au milieu de la periode</i></p>";
		//print_r($tableauDonnee);
		echo json_encode($tableauDonnee);

	 ?>
	
	<div id="myDiv"><!-- Plotly chart will be drawn inside this DIV --></div>
	<div id="myDivTest"><!-- Plotly chart will be drawn inside this DIV --></div>
  <script src="graph.js">
 	


 	
  </script>

  <script type="text/javascript">

  	var donnee = <?php echo json_encode($tableauDonnee) ?>;
 	console.log(donnee);

  	var dates = donnee.map((d) => d.annee)
  	var nombresPub = donnee.map((d) => d.nombre)
  	console.log(dates);
  	console.log(nombresPub);
  	
  	var data = [{
	  x: dates,
	  y: nombresPub,
	  type: 'scatter'
	}, ];

	var layout = {
  		title:'Line and Scatter Plot'
	};

	Plotly.newPlot('myDivTest', data, {}, {showSendToCloud:true});

  </script>

	
	


</body>
</html>
