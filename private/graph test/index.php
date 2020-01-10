<?php
	require_once 'Model.php'; 
	$model = Model::get_model();
?>
<!DOCTYPE html>
<html>
<head>
  <script src="https://cdn.plot.ly/plotly-latest.min.js"></script>
  <div id="container" style="max-width: 1000px; height: 600px; margin: 2em auto"></div>
  <script type="module">
   
  ?php
  		$tableau=[];
		foreach ($key as $value) {
			$nbeuvre= $model->getNbOeuvre($value);
			$tab[] = ['annee'=> $value, 'nombre'=> $nboeuvre];
		}


