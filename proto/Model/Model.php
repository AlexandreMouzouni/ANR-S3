<?php
class Model{
	private $bdd;
	private static $instance= NULL;

	private function __construct(){
		try {
			require 'creds.php'; // Login, mot de passe a changer au besoin
			$this->bdd = new PDO($dsn, $user, $pass,
			array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, 
				PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC));
		} catch (Exception $e) {
			die('<p> La connexion à echoué : '. $e->getCode() .', ' . $e->getMessage() .'</p>');
		}
	}

	public static function get_model(){
		if(is_null(self::$instance)) self::$instance= new Model();
		return self::$instance;
	}

	public function getNbOeuvre(){
		$sql= 'SELECT COUNT(*) AS nbOeuvre FROM oeuvres';
		$req= $this->bdd->query($sql) or die(print_r($bdd->errorInfo()));
		$res= $req->fetch();
		$nbOeuvre= $res['nbOeuvre'];
		$req->closeCursor();
		return $nbOeuvre;
	}

	public function getNbDateNull(){
		$sql= 'SELECT COUNT(*) AS nbDateNull FROM oeuvres WHERE anneePE is null';
		$req= $this->bdd->query($sql) or die(print_r($bdd->errorInfo()));
		$res= $req->fetch();
		$nbOeuvre= $res['nbDateNull'];
		$req->closeCursor();
		return $nbOeuvre;
	}

	public function getNbAnnee(){
		$sql= 'SELECT MIN(anneePE) as dateMin, MAX(anneePE) as dateMax from oeuvres WHERE anneePE!=""';
		$req= $this->bdd->query($sql) or die(print_r($bdd->errorInfo()));
		$res= $req->fetch();
		$req->closeCursor();
		return $res;
	}

	public function getNbPublicationsPeriodes($anneeD, $anneeF){
		$sql= 'SELECT COUNT(*) as nbOeuvre FROM `oeuvres` WHERE anneePE BETWEEN :anneeD AND :anneeF';
		$req= $this->bdd->prepare($sql) or die(print_r($bdd->errorInfo()));
		$req->execute(array(
			':anneeD' => htmlspecialchars($anneeD),
			':anneeF' => htmlspecialchars($anneeF)
		));
		$res= $req->fetch();
		$nbOeuvre= $res['nbOeuvre'];
		$req->closeCursor();
		return $nbOeuvre;
	}

	public function getAllAuteurFiche() {
		$sql = 'SELECT idOeuvre, auteurFiche from oeuvres where auteurFiche != ""';
		$req = $this->bdd->query($sql) or die(print_r($bdd->errorInfo()));
		$result = $req->fetchAll();
		$req->closeCursor();
		return $result;
	}
}
?>