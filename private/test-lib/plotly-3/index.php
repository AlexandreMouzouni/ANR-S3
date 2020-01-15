<?php
	require_once '../../../Model.php';
	$model = Model::get_model();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Dataviz</title>
	<!-- Resources -->
	<script src="https://cdn.plot.ly/plotly-latest.min.js"></script>
</head>
<body>
	<h1>Dataviz</h1>

	<?php
  $listauteur= $model->getNbOeuvreWithAuteurX();

  		$liste= [];
  		foreach ($listauteur as $value) {
  			$liste[] = $value["x"];
  		}

  	 ?>
  <script>
 const data = <?php echo json_encode($liste) . ";"; ?>
 var donnee = [{
   type: 'scatterpolar',
   r: data.x,
   theta: donnee.map((d) => d.auteur),
   fill: 'toself',
 },
 ]

 var layout = {
   polar: {
     radialaxis: {
       visible: true,
       range: donnee.map((d) => d.nombre),
     }
   },
   showlegend: false
 }

 Plotly.plot("container", donnee, layout)

   </script>
 </body>
 </html>
