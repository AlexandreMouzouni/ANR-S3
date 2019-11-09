<?php  
require_once '../../../Model.php';
$model = Model::get_model();

function dataPhp() {
    $anneeMinMax = $model->getNbAnnee();
    $anneeMin = $anneeMinMax['dateMin'];
    $anneeMax = explode('-', $anneeMinMax['dateMax']);
    $anneeMax = $anneeMax[2];
    $tableauDonnee= array();
    for($annee= $anneeMin; $annee< $anneeMax; $annee+=1){
        $nbPublication= $model->getNbPublicationsPeriodes($annee, $annee+1);
        $nbPublication = intval($nbPublication); // Transformer en int
        $tableauDonnee[] = ["annee" => strval($annee), // Transformer en string, et mettre en format ISO
                                  "nombre" => $nbPublication];
    }
    return $tableauDonnee[];
}
?>
