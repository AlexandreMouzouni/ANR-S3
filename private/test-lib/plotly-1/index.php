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

