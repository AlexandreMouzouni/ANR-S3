<?php
	require_once '../../../Model.php';
	$model = Model::get_model();
?>
<html>
    <head>
        <title>Test Plotly</title>
        <meta charset="utf-8"/>
</head>
<body>
  <script src="https://cdn.plot.ly/plotly-latest.min.js"></script>
  <div id="container" style="max-width: 1000px; height: 600px; margin: 2em auto"></div>
  <script type="module">