<?php
$hostname = "localhost";
$user = "php";
$password = "jesuistresencolere";
$db_string = "mysql:host=localhost;dbname=anticipation;charset=utf8";

try {
    $dbb = new PDO($db_string, $user, $password);
} catch (PDOException $e) {
    echo 'Connexion échouée : ' . $e->getMessage();
}

$result = $dbb->query('select titrePE, anneePE from oeuvres');
while ($data = $result->fetch())
{
    echo '<li>' . $data['titrePE'] . '<b> écrit en l\'année </b>' . $data['anneePE'] . '</li>';
}
echo '<ul/>';
