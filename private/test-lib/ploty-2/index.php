<?php
	require_once '../../../Model.php'; 
	$model = Model::get_model();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<script src="https://cdn.plot.ly/plotly-latest.min.js"></script>
	<title>Dataviz</title>
</head>
<body>
	<h1>Dataviz</h1>

	<?php 

		$patternAnnee = "#(\d{4})#";

		$listeDate= $model->getListesAnnesTrad();
/**/	$lesAnnee= array();
		foreach ($listeDate as $value) {
			if(preg_match($patternAnnee, trim($value['annee']), $annee))
				$lesAnnee[]= $annee[1];
		}

		$tab=[];
		foreach ($lesAnnee as $value) {
			$nbtrad= $model->getNbTrad($value);
			$tab[] = ['annee'=> $value, 'nombre'=> $nbtrad];
		}

		/* 16 date non pris en compte car date non renseigné*/

		$listeOeuvreAdaptee= $model->getListesOeuvreAdaptee();
		$tabAdaptations=[];
		foreach ($listeOeuvreAdaptee as $value) {
			$nbAdaptations = $model->getNbAdaptations($value['titrePE']);
			$tabAdaptations[]= ['titre' => $value['titrePE'], 'nombre'=> $nbAdaptations];
		}

	 ?>


	
	<div id="myDivTest"><!-- Plotly chart will be drawn inside this DIV --></div>
	<div id="myDivTest2"><!-- Plotly chart will be drawn inside this DIV --></div>
  <script src="graph.js">
 	


 	
  </script>

  <script type="text/javascript">

  	var donnee = <?php echo json_encode($tab) ?>;

  	var dates = donnee.map((d) => d.annee)
  	var nombresPub = donnee.map((d) => d.nombre)
  	
  	var data = [{
	  x: dates,
	  y: nombresPub,
	  type: 'scatter'
	}, ];

	var layout = {
  		title :'<b> Evolution de la traductions des oeuvres </b><br> 16 oeuvres non prises en compte*'
	};

	Plotly.newPlot('myDivTest', data, layout);


//	deuxieme
	var donnee = <?php echo json_encode($tabAdaptations) ?>;
  	var titre = donnee.map((d) => d.titre)
  	var nombresAdaptations = donnee.map((d) => d.nombre)

  	var data = [{
	  x: titre,
	  y: nombresAdaptations,
	  type: 'bar'
	}, ];

	var layout = {
  		title :'<b> nombres d\'adaptation par oeuvres </b><br> (liste non exhaustive)'
	};

	Plotly.newPlot('myDivTest2', data, layout);

  </script>

</body>
</html>
