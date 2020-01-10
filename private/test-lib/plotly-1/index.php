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
   <script>
    <?php
      $anneeMinMax = $model->getNbAnnee();
      $anneeMin = $anneeMinMax['dateMin'];
      $anneeMax = explode('-', $anneeMinMax['dateMax']);
      $anneeMax = $anneeMax[2];
      $tableauDonnee= array();
      for($annee= $anneeMin; $annee< $anneeMax; $annee+=1){
          $nbPublication= $model->getNbPublicationsPeriodes($annee, $annee+1);
          $nbPublication = intval($nbPublication); // Transformer en int
          $tableauDonnee[] = ["annee" => strval($annee),
                              "nombre" => $nbPublication];
      }
      ?>
      const data = <?php echo json_encode($tableauDonnee) . ";"; ?>

var dates = donnee.map((d) => d.annee)
  var publication = donnee.map((d) => d.nombre)
  var trace1 = {
    type: "scatter",
    mode: "markers",
    x: ,
    y: ,
    marker: {
      color: 'rgba(165, 196, 50, 0.5)',
      line: {
        color: 'rgba(165, 196, 50, 1)',
        width: 1,
      },
      symbol: 'circle',
      size: 8,
    }
  };

var data = [trace1];

var layout = {
  title: 'Evolution du nombre de traductions',
  showlegend: false,
};

Plotly.newPlot('container', data, layout);

  </script>
</body>
</html>