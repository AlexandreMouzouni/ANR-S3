<?php
	require_once '../../../Model.php';
	$model = Model::get_model();
?>
<html>
    <head>
        <title>Test Plotly</title>
        <meta charset="utf-8"/>
        <script src="https://cdn.plot.ly/plotly-latest.min.js"></script>
    </head>
    <body>
        <h1>Line Chart</h1>
        <div id="line-chart"></div>

        <h1>Bar Chart</h1>
        <div id="bar-chart"></div>

        <h1>Pie Chart</h1>
        <div id="pie-chart"></div>
        
    </body>
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

    var barchartdata = [
    {
        x: data[0],
        y: data[1],
        type: 'bar'
    }
    ];

alert(barchartdata.join(""));
alert(data.join(""));




        Plotly.newPlot('bar-chart', barchartdata);
    </script>
</html>