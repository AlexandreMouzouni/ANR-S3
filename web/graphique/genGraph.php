<?php
require '../lib/connexion.php';
define('BDD_HOST', 'localhost');
define('BDD_LOGIN', 'php');
define('BDD_MDP', 'jesuistresencolere');
define('BDD_DATABASE', 'anticipation');

$conn = Connexion::getBD();

/**
 * Retourne le SQL nécéssaire pour faire une sous-requete.
 * Ce code est le même pour toutes les requêtes, 
 * parce que nous avons besoin uniquement des oeuvres elle-mêmes.
 * @param data Les données de base (tableau js.)
 */
function makeSubrequest($data) {
    $listeID = [];
    foreach($data as $_ => $val) {
        array_push($listeID, $val['idOeuvre']);
    }
    $sql = implode($listeID, ","); // "1,2,34,238"...
    return $sql;
}

function barChart($data, $sub_sql, $conn) {
    $sql = 
    'SELECT anneePE as x, count(*) as y
    from oeuvres
    where idOeuvre in (' 
    . $sub_sql 
    . ')
    group by anneePE
    order by anneePE asc;';

    //print $sql;
    $req = $conn->query($sql) or die();
    $result = $req->fetch_all(MYSQLI_ASSOC);
    return $result;
}


/* Main
*/
if (!isset($_POST)) {
    echo json_encode("erreur: pas de paramètre");
    exit();
}

$typeGraphe = $_POST['typeGraphe'];
$data = $_POST['data'];

//echo $data;
$sub_sql = makeSubrequest($data);
//echo $sub_sql;
$result = barChart($data, $sub_sql, $conn);
echo json_encode($result);
?>
