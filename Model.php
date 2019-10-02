<?php
	class Model{
		private $bdd;
		private static $instance= NULL;


		private function __construct(){
			try {
				$this->bdd = new PDO('mysql:host=localhost;dbname=dataviz;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC));
	//			echo '<h3> Connexion Reussi à la Base </h3>';
			}
			catch (Exception $e) {
		        die('<p> La connexion à echoué : '. $e->getCode() .', ' . $e->getMessage() .'</p>');
			}
		}

		public static function get_model(){
			if(is_null(self::$instance)) self::$instance= new Model();
			return self::$instance;
		}

		/*
			return le nombre de oeuvress
		*/
		public function getNbOeuvre(){
			$sql= 'SELECT COUNT(*) AS nbOeuvre FROM oeuvres';
			$req= $this->bdd->query($sql) or die(print_r($bdd->errorInfo()));
			$res= $req->fetch();
			$nbOeuvre= $res['nbOeuvre'];
			$req->closeCursor();
			return $nbOeuvre;
		}

		/*
			return les date min et max
		*/
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


		/*
			return un tableau contenant la liste des nom de magazine par ordre alphabetique ainsi que tout les info les concernant
		*/
		public function getTousMag(){
			$sql='SELECT * FROM magazine ORDER BY nom_mag';
			$req= $this->bdd->query($sql) or die(print_r($bdd->errorInfo())); 
			$res= $req->fetchALL(PDO::FETCH_ASSOC);
			$req->closeCursor();
			return $res;
		}

/*
		public function listeMag(){
			$sql= 'SELECT * FROM magazine ORDER BY nom_mag';
			$req= $this->bdd->prepare($sql) or die(print_r($bdd->errorInfo()));
			$req->execute();

			echo '<ul>';
			while ($res= $req->fetch(PDO::FETCH_ASSOC)){
				echo '<li>'. $res['nom_mag'] .' </li>';
			}$req->closeCursor();
			echo '</ul>';
		}
*/


		/*
			return un tableau contenant la liste des nom de magazine
		*/
		public function getNomMags(){
			$sql= 'SELECT nom_mag FROM magazine ORDER BY nom_mag';
			$req= $this->bdd->prepare($sql) or die(print_r($bdd->errorInfo()));
			$req->execute();
			$tab= $req->fetchAll(PDO::FETCH_ASSOC);
			$req->closeCursor();
			return $tab;
		}


		/*
			return un tuple avc les info concernant une personne à partir de son login
		*/
		public function getPers($login){
			$sql= 'SELECT * FROM personne WHERE login= :log';
			$req= $this->bdd->prepare($sql) or die(print_r($bdd->errorInfo()));
			$req->execute(array(
				':log' => htmlspecialchars($login)
			));
			$res= $req->fetch(PDO::FETCH_ASSOC);
			$req->closeCursor();
			return $res;
		}


		/*
			fonction permettant d'ajouter une personne dans la base de donné
		*/
		public function ajoutPers($login, $nom, $prenom, $age, $ville){
			$sql= 'INSERT INTO personne(login, nom, prenom, age, ville) Values(:login, :nom, :prenom, :age, :ville)';
			$req= $this->bdd->prepare($sql) or die(print_r($bdd->errorInfo()));
			$req->execute(array(
				':login' 	=> htmlspecialchars($login),
				':nom' 		=> htmlspecialchars($nom),
				':prenom'	=> htmlspecialchars($prenom),
				':age'		=> htmlspecialchars($age),
				':ville'	=> htmlspecialchars($ville)
			));
		}


		/*
			prend en paramettre un login et un nom de magazine
			permet d'ajouter la magazine dans la liste des abonnement du login
		*/
		public function ajoutMag($login, $nom_mag){
			$sql= 'INSERT INTO abonne(nom_mag, login) VALUES(:nom_mag, :login) ';
			$req= $this->bdd->prepare($sql) or die(print_r($bdd->errorInfo()));
			$req->execute(array(
				':nom_mag'	=> htmlspecialchars($nom_mag),
				':login'	=> htmlspecialchars($login)
			));
		}


			/*
				return true si le login est abonné a au moins un magazine
				return false si s'il n'est abonné a aucun magazine
			*/
		public function estAbonne($login){
			$sql= 'SELECT nom_mag FROM abonne WHERE login= :login ';
			$req= $this->bdd->prepare($sql) or die(print_r($bdd->errorInfo()));
			$req->execute(array(
				':login'	=> htmlspecialchars($login)
			));
			$res = $req->fetchAll(PDO::FETCH_ASSOC);
			$req->closeCursor();
			if($res != NULL) return true;
			else return false;
		}		

			/*
				retourne la table abonnement d'un login
			*/
		public function getListeAbo($login){
			$sql= 'SELECT nom_mag FROM abonne WHERE login= :login ';
			$req= $this->bdd->prepare($sql) or die(print_r($bdd->errorInfo()));
			$req->execute(array(
				':login'	=> htmlspecialchars($login)
			));
			$res = $req->fetchAll(PDO::FETCH_ASSOC);
			$req->closeCursor();
			return $res;
		}

			/*
				return le cout des abonné d'un login donné
			*/
		public function getCoutAbo($login){
			$sql= 'SELECT Sum(prix) as cout from abonne AS abo INNER JOIN magazine AS mag on  abo.nom_mag = mag.nom_mag WHERE login= :login' ;
//			$sql= 'SELECT Sum(prix) as cout from abonne, magazine WHERE abonne.nom_mag = magazine.nom_mag AND login= :login';
			$req= $this->bdd->prepare($sql) or die(print_r($bdd->errorInfo()));
			$req->execute(array(
				':login'	=> htmlspecialchars($login)
			));
			$res= $req->fetch();
			$req->closeCursor();
			return $res['cout'];
		}


		/*
			test de la fonction Except
		*/
		public function listeMagazineNonAbonne($login){
			$sql= 'SELECT nom_mag FROM magazine EXCEPT SELECT nom_mag FROM abonne WHERE login= :login';
			$req= $this->bdd->prepare($sql) or die(print_r($bdd->errorInfo()));
			$req->execute(array(
				':login' => htmlspecialchars($login)
			));
			$res = $req->fetchAll(PDO::FETCH_ASSOC);
			$req->closeCursor();
			return $res;
		}

		public function removeMagazine($mag){
			$sql = 'DELETE from magazine WHERE nom_mag = :mag';
			try{
				$req = $this->bdd->prepare($sql);
				$req->execute(array(
					':mag' 		=> htmlspecialchars($mag)
				));

			}
			catch(PDOException $e){
				echo '<p> Probleme de suppresion de tuple! '. $e->getMessage() .'</p>';
			}
		}



	}

?>


 