<?php
	require_once '../../Model.php';
	$model = Model::get_model();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Dataviz</title>
	<!-- Resources -->
	
	<script src="https://cdn.plot.ly/plotly-latest.min.js"></script>
	<div id="container" style="max-width: 1000px; height: 600px; margin: 2em auto"></div>
  <script type="module">
</head>
<body>
	<h1>Dataviz</h1>

	<?php
  $listauteur= $model->getNbOeuvreWithAuteur();


  		$liste= [];
  		foreach ($listauteur as $value) {
  			$liste[] = ['x'=>$value["x"],'y'=>$value["y"]];
  		}
  		print_r($liste);
  	 ?>
  <script>
 const data = <?php echo json_encode($liste) . ";"; ?>
 var donnee = [{
   type: 'scatterpolar',
   r: data.x,
   theta: data.y,
   fill: 'toself',
 },
 ]

 var layout = {
   polar: {
     radialaxis: {
       visible: true,
       range: data.y,
     }
   },
   showlegend: false
 }

 Plotly.plot("container", donnee, layout)

   </script>
 </body>
 </html>
