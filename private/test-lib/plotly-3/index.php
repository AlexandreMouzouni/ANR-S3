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
</head>
<body>
	<h1>Dataviz</h1>


	<?php
  $listauteur= $model->getNbOeuvreWithAuteur();
print_r($listauteur);
print("<br><br>");
  		$liste= [];
  		foreach ($listauteur as $value) {
  			$liste[] = $value;
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

	 <div id="container" style="width:100%; height: 500px;"></div>

</body>
</html>
