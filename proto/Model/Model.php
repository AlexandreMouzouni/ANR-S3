<?php
class Model{
	private $bdd;
	private static $instance= NULL;

	private function __construct(){
		try {
			require_once 'creds.php'; // Login, mot de passe a changer au besoin
			$this->bdd = new PDO($dsn, $user, $pass,
			array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, 
				PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC));
		} catch (Exception $e) {
			die('<p> La connexion à echoué : '. $e->getCode() .', ' . $e->getMessage() .'</p>');
		}
	}

	public static function getModel(){
		if(is_null(self::$instance)) self::$instance= new Model();
		return self::$instance;
	}

	public function getAllAuteurNbFiche() {
		$sql = 
'SELECT auteurFiche as nomAuteur, count(*) as nombreFiches
from oeuvres 
where auteurFiche != ""
group by auteurFiche
order by nombreFiches desc;
		';
		$req = $this->bdd->query($sql) or die(print_r($bdd->errorInfo()));
		$result = $req->fetchAll();
		$req->closeCursor();
		return $result;
	}

	public function getAllAnneeNbOeuvres() {
		$sql = 
'SELECT anneePE as annee, count(*) as nombreOeuvres
from oeuvres 
group by anneePE
order by nombreOeuvres desc;
		';
		$req = $this->bdd->query($sql) or die(print_r($bdd->errorInfo()));
		$result = $req->fetchAll();
		$req->closeCursor();
		return $result;
	}
}
?>